@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberOne | Idn</title>

    <!-- Link css Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- link js Boostrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Link Style Custom -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Link Icon Tab -->
    <link rel="icon" href="{{asset('img/logo tv.png')}}">

    {{-- link font-awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <nav class="navbar navbar-expand-lg nav-head pt-0 pb-0">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="#">
                <img src="{!! asset('img/lpaten.png') !!}" width="60" height="auto" class="d-inline-block align-top" alt="berita">
            </a>
        </nav>
      
        <div class="collapse navbar-collapse text-nav" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('headnews.show', 1)}}">Headlines <span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        News
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('kategori.show', 1)}}">Sosial & Budaya</a>
                      <a class="dropdown-item" href="{{route('kategori.show', 2)}}">Olahraga</a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Susunan Redaksi</a> --}}
                        {{-- <a class="dropdown-item" href="#">Tradisional</a> --}}
                        {{-- <div class="dropdown-divider"></div> --}}
                        {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    {{-- </div>
                </li> --}}
                <li class="nav-item">
                      <a class="nav-link" href="">Mco TV</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link" href="{{route('redaksi.struktur')}}">Redaksi</a>
                </li>
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="#">About <span class="sr-only"></span></a>
                </li>                 --}}
            </ul>
        </div>
      </nav>

@yield('content')

</body>
<script src="{{asset('js/jquery.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>


</html>