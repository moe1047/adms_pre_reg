<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">




</head>

<body>

<div class="container">
    @yield('content')


</div>

<!-- jQuery -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/sb-admin-2.js') }}"></script>

@yield('script_footer')

</body>

</html>
