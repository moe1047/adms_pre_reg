@extends('template.master')

@section('title') Registration @stop

@section('heading') Registration @stop

@section('content')

    {!! Form::open(['url'=>'excel','files'=>'true']) !!}

        <!--photo  textfield-->
        <div class="form-group col-md-6">
            {!! Form::label('remark','Upload image:',['class' => 'control-label']) !!}
            {!! Form::file('excel',['class'=>'form-control']); !!}
        </div>
        {!! Form::submit('submit',['class'=>'btn btn-default form-control']) !!}

    {!! Form::close() !!}
@stop