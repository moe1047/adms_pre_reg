<?php

namespace App\Http\Controllers;

use App\Department;
use App\Region;
use App\Registration;
use App\Registration_detail;
use App\School;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Faculty;
use App\Http\Controllers\Controller;
use App\Http\Requests\create_registration_req;
use Intervention\Image\Facades\Image;

class Registration_cont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $registrations=Registration::orderBy('id','desc')->get();
        //$registrations->created_at=Carbon::parse($registrations->created_at)->date('d/m/y');
        //return $registrations->department;

        return view('registration.index',compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools=School::all()->lists('name','id');
        $regions=Region::all()->lists('name','id');
        $faculties=Faculty::all()->lists('name','id');
        return view('registration.create',compact('faculties','regions','schools'));
    }


    public function store(create_registration_req $request)
    {
        //171x180
        $department_name=Department::find($request->department_id)->name;
         $data=$request->all();
        //process image
            if($request->hasFile('image')){
                $image=$request->file('image');
                $image_name=trim(time()."-".$request->admission_no."-".$department_name).".".$image->getClientOriginalExtension();
                $image->move('uploads',$image_name);
                $data['image']="$image_name";
                $registration_id= Registration::create($request->all())->id;
                $registration_id=Registration::find($registration_id);
                $registration_id->image=$image_name;
                $registration_id->save();//end process
            }else{
                $registration_id=Registration::create($request->all());
            }
        $request->merge(['registration_id'=>"$registration_id->id"]);
        Registration_detail::create($request->all());
        //return $request->all();
        return redirect('registration');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function print_reg(){
        return view('registration.print');
    }

}
