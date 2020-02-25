@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberOne | Idn</title>

    <!-- Link css Bootstrap -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">

    <!-- link js Boostrap -->
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.bundle.min.js') !!}"></script>

    <!-- Link Style Custom -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    <!-- Link Icon Tab -->
    <link rel="icon" href="{!! asset('img/logo tv.png') !!}">

    {{-- link font-awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

@yield('content')

</body>
<script src="{{asset('js/jquery.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>


</html>