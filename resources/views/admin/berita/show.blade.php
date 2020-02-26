@extends('layouts.master')
@section('content')
<div class="container col-lg-11 text-nav-buttom">
  
</div>

<hr class="style-one">
<section class="my-5">
  <div class="container">
    <div class="row text-center">
        @foreach ($data as $d)                
            <div class="col-12">
                <img src="{{asset('img/logo tv.png')}}" alt="" style="width: 200px; height: auto; text-align: justify;">
                <hr>
                <h1>{{$d->judul}}</h1>
                <p>{{$d->paragraf}}</p>                
            </div>            
      @endforeach     
    </div>
  </div>
</section>
<div class="paginate">
   
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
          <p class="pt-2" style="text-align: justify;">
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
    