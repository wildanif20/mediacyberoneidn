@extends('layouts.app')

@section('content')
<div class="container">
    

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        {{-- <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> --}}
      </ul>
  
      <!-- SEARCH FORM -->
      {{-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form> --}}
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('img/lpaten.png')}}" alt="berita" width="40" height="auto" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          
              <li class="nav-item">
                  <a href="{{route('kategori.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Berita Kategori
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>
              <li class="nav-item">
                  <a href="{{route('berita.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Berita
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Video
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div>
            <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                        <h2>Daftar Kategori</h2>
                        <table class="table">
                            <thead>
                                <tr>                                    
                                    <th>no</th>
                                    <th>nama Berita</th>
                                    <th colspan="2" style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$item->kategori}}</td>
                                        {{-- <td>
                                            <button type="submit" class="btn btn-primary">
                                                <a href="{{route('kategori.edit',$item->id_category)}}">
                                                    <i class="fas fa-edit" style="color: white"></i>
                                                </a>
                                            </button>
                                        </td> --}}
                                        <td>
                                            <form action="{{route('kategori.destroy',$item->id_category)}}" method="post">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin akan di hapus ?')">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>         
                                    {{$no++}}                           
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <form action="{{route('kategori.store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="Kategori">Kategori</label>
                              <input type="text"
                                class="form-control" name="kategori" id="Kategori" aria-describedby="helpId" placeholder="nama kategori,,,">
                              <small id="helpId" class="form-text text-muted"></small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </form>
                    </div>
                  </div>
                </div>
            </section>

            
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 
          <script>
              document.write(new Date().getFullYear());
          </script>
      </strong>
      Cyberone
      <div class="float-right d-none d-sm-inline-block">
        <b></b>
      </div>
    </footer>
@endsection
