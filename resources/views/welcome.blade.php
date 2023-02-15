<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body class="overflow-x-hidden">
        <nav class="navbar  d-flex flex-row-reverse " style="background:WHITE">
           
            @if (Route::has('login'))
                <div class="hidden ">
                    @auth
                        <a href="{{ url('/homeMenu') }}" class="text-decoration-none text-black px-2 btn ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-decoration-none text-black  px-4 btn text-white " style="background:rgb(2, 109, 136)" >Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"  class=" btn  text-decoration-none text-white  text-black px-4 btn " style="background:rgb(5, 79, 97)">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
             <div>
                <a class=" text-decoration-none text-black mx-4 p-4   fst-italic" href="#"><b>NM <span style="color:rgb(4, 127, 157) ">
                    Bistro </span>Macaron </b></a>
                </div>
        </nav>
         <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                
                <img src="./images/3.jpg" class="  w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./images/3.jpg" class="w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./images/3.jpg" class="  w-100" alt="..." style="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> 
          <div class="d-flex justify-content-center flex-wrap fs-3 my-3"> Welcome to NM Bistro Macaron</div>
          <div class="d-flex justify-content-center flex-wrap my-3">
            <div class=" p-2 mx-2">
                <img src="./images/28.jpg" class="card-img-top" alt="..." style="border-radius: 50% ; width: 300px;
                height:300px;">
              </div>
                    <div class="p-2 mx-2 d-none d-sm-block" >
                        <img src="./images/24.jpg" class="card-img-top" alt="..." style="border-radius: 50%; width: 300px;
                        height:300px;">
                      </div>
                        <div class=" p-2 mx-2 d-none d-sm-block">
                            <img src="./images/4.jpg" class="card-img-top" alt="..." style="border-radius: 50%; width:px;
                            height:300px;">
                          </div></div>
                         <div class="my-5">
            <h4 class="text-center ">Special title treatment</h4>
                          <div class=" w-100 my-4  d-flex justify-content-center align-items-center">
                            <div class=" ">
                                <img src="./images/8.jpg" class="" alt="..."style="width: 250px"></div>
                            <div class="mx-4">
                                <h5 class="title">Special title treatment</h5>
                                <p class="text">With supporting text below as a natural lead-in to additional content.
                                  
                                </p>
                                <a href="#" class="btn text-white"  style="background:rgb(206, 13, 45) ">Go somewhere</a>
                              </div>
                        
                        </div>
                <div class=" w-100  d-flex justify-content-center align-items-center m-4">
                    
                        <div class=" mx-4">
                            <h5 class="title">Special title treatment</h5>
                            <p class="text">With supporting text below as a natural lead-in to additional content.
                                
                            </p>
                            <a href="#" class="btn btn" style="background:rgb(252, 147, 77)">Go somewhere</a>
                          </div><div class=" ">
                            <img src="./images/mama.jpg" class="" alt="..."style="width: 250px"></div>
                    
                    </div>
                </div>
           
        <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-4 d-none d-lg-block">
        <span>Get connected :</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
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

    </body>
</html>
