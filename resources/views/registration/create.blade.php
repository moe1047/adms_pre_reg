@extends('template.master')


@section('title') Registration @stop

@section('heading') Register New Student @stop

@section('content')
    @include('template.errors')

        {!! Form::open(['url'=>'registration','files'=>'true']) !!}
            @include('registration.registration_form')
        {!! Form::close() !!}
@stop

@section('script_footer')
    <script>
        $(document).ready(function(){
            $('#transaction_no').show();

        });
        function check_payment($value){
            if($value=='dahabshiil'){
                $('#transaction_no').show();
            }
            if($value=='e-dahab'){
                $('#transaction_no').show();
            }
            if($value=='salama bank'){
                $('#transaction_no').show();
            }
            if($value=='ZAAD'){
                $('#transaction_no').hide();
            }
        }

    </script>
    <script>
        $(document).ready(function($){
            $.get("{{ url('api/populate/department')}}",
                    { option: $('#faculty').val() },
                    function(data) {
                        $('#department_id').empty();
                        $.each(data, function(key, element) {
                            $('#department_id').append("<option value='" + key +"'>" + element + "</option>");
                        });
                    });<!--populate Departments when the page is loaded(faculty)-->


            $('#faculty').change(function(){
                $.get("{{ url('api/populate/department')}}",
                        { option: $(this).val() },
                        function(data) {
                            $('#department_id').empty();
                            $.each(data, function(key, element) {
                                $('#department_id').append("<option value='" + key +"'>" + element + "</option>");
                            });
                        });
            });
        });
    </script><!--populate Departments ON CHANGE(faculty)-->
    <script>
        $(document).ready(function(){
            $('#region_id').select2({

            });
            $('#faculty').select2({
            });
            $('#school_id').select2({
            });


        });
    </script>

@stop