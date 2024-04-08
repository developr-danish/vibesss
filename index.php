<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibesss</title>
    <link rel="stylesheet" href="CSS/owl.carousel.min.css">
    
</head>
<body>

    <div class="topbar d-flex justify-content-between">
    <div class="social-details d-flex gap-3 text-white ">
      <p>Follow US</p>
      <a href="https://www.facebook.com/VibesssIndia/" target="_blank"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/vibesssindia/" target="_blank"><i class="bi bi-instagram"></i></a>
      <a href="https://in.pinterest.com/vibesssndia/" target="_blank"><i class="bi bi-pinterest"></i></a>
      <a href="https://www.linkedin.com/company/vibesssindia/about/" target="_blank"><i class="bi bi-linkedin"></i></a>
      <a href="https://twitter.com/VibesssIndia/" target="_blank"><i class="bi bi-twitter"></i></a>
    </div>
    <div class="help-section d-flex">
      <a href="Order-Tracking.php">
        <i class="me-2 fa-solid fa-truck-fast"></i>Track Order
      </a>
      <a class="ms-4" href="">
        <i class="me-2 fa-solid fa-location-dot"></i>Our Store
      </a>
      <a class="ms-4" href="">
        <i class="me-2 fa-solid fa-gift"></i>Gift Card
      </a>
    </div>
    </div>

    <div class="whatsapp">
      <a href="https://wa.me/+919580262936"><span class="fa-brands fa-whatsapp"></span></a>
    </div>

    <?php include 'header.php';?>

    <!-- login popup menu -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center">
          <div class="modal-content">
              <div class="modal-body">
                  <div class="text-end"> <i class="fa fa-close close" data-bs-dismiss="modal"></i> </div>
                  <h5 class="text-uppercase text-center mb-5">Login / Create Account</h5>
                  <a href="Login.php"><button class="form-control mb-3">Sign in with Mobile/Email <i class="ms-2 fa-solid fa-arrow-right-long"></i></button></a>
                  <a href=""><button class="form-control"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>Google <i class="ms-2 fa-solid fa-arrow-right-long"></i></button></a>
              </div>
          </div>
      </div>
    </div>
    <!-- login popup menu -->

    <section class="carousel">
        <div id="sliders" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#sliders" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#sliders" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#sliders" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="w-100" src="assets/vibesss-banner.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="w-100" src="https://img.freepik.com/free-vector/realistic-beauty-sale-ad-template_52683-20023.jpg?t=st=1712130822~exp=1712134422~hmac=084c203e89ab0611e0790de70c7ac698e8b037ca823aa0cc41147aee5770e6fd&w=996" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="w-100" src="https://img.freepik.com/premium-vector/cosmetics-product-skin-care-advertising-banner_297886-37.jpg?w=996" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sliders" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sliders" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <section class="products">
        <div class="content">
            <div class="site-section bg-left-half mb-5">
              <div class="container owl-2-style">
                <h2 class="py-4">Our Top Products</h2>
                <div class="owl-carousel owl-2">
                  <div class="media-29101">
                    <a href="#"><img src="https://images.pexels.com/photos/2866796/pexels-photo-2866796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100"></a>
                    <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="https://images.pexels.com/photos/2537930/pexels-photo-2537930.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100"></a>
                    <h3><a href="#">Beatae Doloribu</a></h3>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="https://images.pexels.com/photos/2639947/pexels-photo-2639947.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100"></a>
                    <h3><a href="#">Accusantium Eius Soluta</a></h3>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="https://images.pexels.com/photos/2566853/pexels-photo-2566853.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100"></a>
                    <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="https://images.pexels.com/photos/2732197/pexels-photo-2732197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100"></a>
                    <h3><a href="#">Beatae Doloribu</a></h3>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="https://images.pexels.com/photos/3373744/pexels-photo-3373744.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100"></a>
                    <h3><a href="#">Accusantium Eius Soluta</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section class="promotion">
      <div class="text-slider">
        <div class="text">
          <h1>EXPERIENCES</h1>
          <div class="gola"></div>
          <h1>ENVIRONMENTS</h1>
          <div class="gola"></div>
          <h1>CONTENT</h1>
          <div class="gola"></div>
        </div>
        <div class="text">
          <h1>EXPERIENCES</h1>
          <div class="gola"></div>
          <h1>ENVIRONMENTS</h1>
          <div class="gola"></div>
          <h1>CONTENT</h1>
          <div class="gola"></div>
        </div>
        <div class="text">
          <h1>EXPERIENCES</h1>
          <div class="gola"></div>
          <h1>ENVIRONMENTS</h1>
          <div class="gola"></div>
          <h1>CONTENT</h1>
          <div class="gola"></div>
        </div>
      </div>
    </section>

    <section class="container-fluid p-0">
        <img class="w-100" src="https://img.freepik.com/premium-vector/realistic-podium-sale-banner_23-2150993244.jpg?w=1060" alt="">
    </section>

    <section class="products">
      <div class="content">
          <div class="site-section bg-left-half mb-5">
            <div class="container owl-2-style">
              <h2 class="py-4">Featured Products</h2>
              <div class="owl-carousel owl-2">
                <div class="media-29101">
                  <img src="https://images.pexels.com/photos/2866796/pexels-photo-2866796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100">
                  <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium optio sed, nisi ullam cum sint, nobis cumque laboriosam obcaecati, 
                    rerum assumenda eius blanditiis. Aliquam et veniam sapiente maxime nobis.</p>
                  <button class="btn btn-danger">Shop Now</button>
                </div>
                <div class="media-29101">
                  <img src="https://images.pexels.com/photos/2537930/pexels-photo-2537930.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100">
                  <h3><a href="#">Beatae Doloribu</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium optio sed, nisi ullam cum sint, nobis cumque laboriosam obcaecati, 
                    rerum assumenda eius blanditiis. Aliquam et veniam sapiente maxime nobis.</p>
                  <button class="btn btn-danger">Shop Now</button>
                </div>
                <div class="media-29101">
                  <img src="https://images.pexels.com/photos/2639947/pexels-photo-2639947.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100">
                  <h3><a href="#">Accusantium Eius Soluta</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium optio sed, nisi ullam cum sint, nobis cumque laboriosam obcaecati, 
                    rerum assumenda eius blanditiis. Aliquam et veniam sapiente maxime nobis.</p>
                  <button class="btn btn-danger">Shop Now</button>
                </div>
                <div class="media-29101">
                  <img src="https://images.pexels.com/photos/2566853/pexels-photo-2566853.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100">
                  <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium optio sed, nisi ullam cum sint, nobis cumque laboriosam obcaecati, 
                    rerum assumenda eius blanditiis. Aliquam et veniam sapiente maxime nobis.</p>
                  <button class="btn btn-danger">Shop Now</button>
                </div>
                <div class="media-29101">
                  <img src="https://images.pexels.com/photos/2732197/pexels-photo-2732197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100">
                  <h3><a href="#">Beatae Doloribu</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium optio sed, nisi ullam cum sint, nobis cumque laboriosam obcaecati, 
                    rerum assumenda eius blanditiis. Aliquam et veniam sapiente maxime nobis.</p>
                  <button class="btn btn-danger">Shop Now</button>
                </div>
                <div class="media-29101">
                  <img src="https://images.pexels.com/photos/3373744/pexels-photo-3373744.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="w-100">
                  <h3><a href="#">Accusantium Eius Soluta</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium optio sed, nisi ullam cum sint, nobis cumque laboriosam obcaecati, 
                    rerum assumenda eius blanditiis. Aliquam et veniam sapiente maxime nobis.</p>
                  <button class="btn btn-danger">Shop Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <?php include 'footer.php';?>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="Script/owl.carousel.min.js"></script>
    <script src="Script/main.js"></script>
    <script src="Script/popper.min.js"></script>
</body>
</html>