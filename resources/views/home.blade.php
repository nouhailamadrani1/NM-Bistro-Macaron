@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
    <a class=" text-decoration-none text-black p-4 fs-4 fst-italic" href="#"><b>NM <span style="color:rgb(126, 166, 81) ">
        Bistro </span>Macaron </b></a>
    </div>
    <div class="d-flex justify-content-center ">
    <a class="btn btn-danger text-decoration-none text-white  fs-5 " href="{{ url('profile',$user->id) }}">
      profile  
   </a></div>
    <div  class="d-flex justify-content-between shadow">
        <div> 
            <img src="./images/bbb.jpg" class=" d-none d-sm-block " alt="..." style=" width: auto;
           height:300px;"></div>
        <div class="d-flex align-items-center text-center"><div><h4 class="card-title" style="color:rgb(241, 195, 29);">Macaron</h4>
            <p class="card-text fst-italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text fst-italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h3 style="color:rgb(242, 132, 134)">30 dhs</h3>
          </div></div>
          <div> 
            <img src="./images/bbb.jpg" class="d-block " alt="..." style=" width: auto;
           height:300px;"></div>
        </div>
 @if (Auth::user()->role == 2 )

 <div  class="d-flex justify-content-center shadow"> <a href="/dashbord" class=" w-100 btn btn text-decoration-none text-black" style="background:rgb(242, 132, 134)" >Dashboard Admin</a>
</div>
@endif

<h4 class="text-center my-4 fst-italic">MACAROON MENU</h4>
    <div class="d-flex justify-content-center flex-wrap my-3">
        @foreach($menu as $menus)
          <div class=" p-2 mx-2" style="width: 14rem;">
            <img src="/images/{{ $menus["image"]}}" class="card-img-top" alt="..." style="border-radius: 50%;  width: 200px;
            height:200px;">
            <div class="card-body text-center w-100">
              <h5 class="card-text "> {{ $menus["name"]}}</h5>
              <p class="texe" title="" style=""> {{ $menus["description"]}} </p>
              <h6>Price : {{ $menus["price"]}} Dhs</h6>
            </div>
          </div>
          @endforeach  
    </div>
<footer class="text-center text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Get connected :</span>
      </div>
    </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                <a class=" text-decoration-none text-black me-3  fst-italic" href="#"><b>NM <span style="color:rgb(4, 127, 157) ">
                    Bistro </span>Macaron </b></a>
            </h6>
            <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dignissimos non labore tempora tempore praesentium quidem debitis laudantium! Porro Quo, quod odit.
            </p>
          </div>
          <div class="col-md-5 col-lg-4 col-xl-4 mx-auto mb-4">
            <h6 class="text-black fw-bold mb-4">Map</h6>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=california&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-black fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Maroc, Youssoufia, YouCode</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              nmbistromacaron@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 212 639 467 124</p>
            <p><i class="fas fa-print me-3"></i> + 212 534 567 829</p>
          </div>
        </div>
      </div>
    </section>
  </footer>
  
    

@endsection

