@extends('template.master')


@section('title') Registrations @stop

@section('heading') Registrations @stop

@section('content')
    <div class="panel panel-info">
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Gender</b></td>
                    <td><b>Department</b></td>
                    <td><b>Session</b></td>
                    <td><b>Admission No.</b></td>
                    <td><b>Registered Date</b></td>
                    <td><b>Action</b></td>
                </tr>
                </thead>
                <tbody>
                @if(!empty($registrations))
                    @foreach($registrations as $registration)
                        <tr>
                            <td>{{$registration->first_name." ".$registration->mid_name." ".$registration->last_name}}</td>
                            <td>{{$registration->gender}}</td>
                            <td>{{$registration->department->name}}</td>
                            <td>{{$registration->session}}</td>
                            <td>{{$registration->admission_no}}</td>
                            <td>{{$registration->created_at}}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle btn-sm " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Action
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Print</a></li>
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                    @endforeach


                @endif
                <tr>

                </tr>
                </tbody>
            </table>
        </div>
    </div>

@stop