<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Database\Eloquent\Model;
use App\Department;

Route::get('/', function () {
    return view('home');
});

Route::post('excel',function(){
     $excel_file=Excel::load(Input::file('excel'), function($reader) {})->get();
        return view('home',compact('excel_file'));

});


Route::post('upload', function () {

    /*$file=Input::file('image');
    //$file->move('uploads',$file);
    //Image::make(Input::file('image'))->resize('300','200')->save($path."/foo.jpg");
    $image_name = time()."-".$file->getClientOriginalName();
    $file->move('uploads', $image_name);
    $image = Image::make(sprintf('uploads/%s', $image_name))->resize(200, 200)->save();*/
});
Route::resource('registration/print','Registration_cont@print_reg');
Route::resource('registration','Registration_cont');
Route::get('school/upload','School_cont@upload');
Route::post('school/upload','School_cont@store_upload');
Route::resource('school','School_cont');


Route::get('api/populate/department',function(){
     $id = Input::get('option');
     $faculty = App\Faculty::find($id)->departments;
     return $faculty->lists('name', 'id');
});
