@extends('layouts.master')
@section('content')



<hr class="style-one">
<section class="my-5">
  <div class="container">
      {{-- <h2>News</h2> --}}
    <div class="row">
      @foreach ($view as $d)                
      <div class="col-sm">
          <div class="card c-border-card" style="width: 18rem;">
              <img src="{{asset('img/lpaten.png')}}" class="card-img-top c-img mx-auto mt-2" alt="berita">
              <div class="card-body">
                  <dl>
                      <a href="{{route('berita.show', $d->id_article)}}" style="text-decoration: none; font-size: 20px;"><dt>{{$d->judul}}</dt></a>
                      <hr>
                      <dd>{{substr($d->paragraf,0,120)}}...</dd>
                  </dl>
                  <hr>
                  <span><i class="fas fa-eye"> {{$d->view}}</i></span>
                  <span class="share">
                      {{-- <a href="http://"><i class="fa fa-instagram" aria-hidden="true"></i></a>      --}}
                      <a href="http://"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>       
                      {{-- <a href="http://"><i class="fa fa-twitter" aria-hidden="true"></i></a>             --}}
                  </span>
              </div>
          </div>
      </div>            
      @endforeach
    </div>
  </div>
</section>
<div class="paginate">
    {{-- {{$data->links()}} --}}
</div>

<!-- Footer -->
<footer class="page-footer font-small footer-blue pt-4">
  <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3 ml-4">
  
            <img src="{{asset('img/logo tv.png')}}" alt="" style="width: 100px; height: auto; text-align: justify;">
          <!-- Content -->
          <p class="pt-2" style="text-align: justify;"> Here you can use rows and columns to organize your footer content.
              Here you can use rows and columns to organize your footer content.
              Here you can use rows and columns to organize your footer content.
              Here you can use rows and columns to organize your footer content.
          </p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3 ml-5">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            {{-- <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li> --}}
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->              
  
      </div>
      <!-- Grid row -->
  
    </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-2">&copy;
      <script>
          document.write(new Date().getFullYear());
      </script> - CyberOneIdn.
  {{-- <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a> --}}
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

@endsection
    