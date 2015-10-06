@extends('template.master')


@section('title') Dashboard @stop

@section('heading') Upload Schools @stop

@section('content')
    @include('template.errors')
    <div class="panel panel-default">
        <div class="panel-body">
            {!! Form::open(['url'=>'school/upload','files'=>'true']) !!}

                <!--excel_file  filefield-->
                <div class="form-group col-lg-6 col-lg-offset-3">
                    {!! Form::label('excel_file','Click to Upload the Excel file:',['class' => 'control-label']) !!}
                    {!! Form::file('excel_file',['class'=>'form-control']); !!}
                </div>

                <div class="col-lg-4 col-lg-offset-4">
                    {!! Form::submit('Upload',['class'=>'btn btn-default form-control']) !!}
                </div>


            {!! Form::close() !!}
        </div>

    </div>


@stop