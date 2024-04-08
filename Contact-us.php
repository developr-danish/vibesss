<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us || Vibesss</title>
    <style>
      .contact-form , .reach-us{
        padding: 2rem 2rem;
        border-radius: 5px;
        background-color: white;
      }
      .contact-form input , textarea{
        margin-bottom: 1.5rem;
        border: none;
        background-color: transparent;
        border-bottom:1px Solid #D64867;
      }
      .contact-form textarea{
        border: none;
        background-color: transparent;
        height: 150px !important;
        border-bottom: 1px Solid #D64867;
        resize: none;
        transition: 0.5s all;
      }
      .form-control:focus{
        background-color: transparent;
        border-bottom: 1px solid #D64867 !important;
      }
      #submit-btn{
        width: 100%;
        border: none;
        background-color: #D64867;
        padding: 1rem;
        color: white;
        font-weight: 700;
        border-radius: 7px;
      }
      .circle-icon{
        height: 40px;
        width: 40px;
        border-radius: 50%;
        border: 1px solid rgba(0, 0, 0, 0.512);
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .circle-icon i{
        font-size: 1.1rem;
        color: rgba(0, 0, 0, 0.821);
      }
      .address h5{
        margin: 0;
        font-weight: 300 !important;
      }
    </style>
</head>
<body>

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
                        <a href=""><button class="form-control mb-3">Sign in with Mobile/Email <i class="ms-2 fa-solid fa-arrow-right-long"></i></button></a>
                        <a href=""><button class="form-control"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                          <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                          </svg>Google <i class="ms-2 fa-solid fa-arrow-right-long"></i></button></a>
                    </div>
                </div>
            </div>
    </div>
    <!-- login popup menu -->
     
    <!-- contact form -->
    <section class="container py-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 mb-3">
                <div class="contact-form">
                    <h1 class="pb-3">Contact Us</h1>
                    <form action="">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="tel" name="Phonenumber" id="phonenumber" placeholder="Enter Phone Number" class="form-control">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="text" name="subject" id="subject" placeholder="Enter Subject" class="form-control">
                            </div>
                        </div>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                        <input type="submit" name="" id="submit-btn" value="Send Massage">
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="reach-us">
                <h1 class="pb-5">Reach Us</h1>
                <div class="d-flex align-items-center mb-4">
                  <div class="circle-icon">
                    <i class="fa-solid fa-house"></i>
                  </div>
                  <div class="address ps-3">
                    <h5>10, tirwa road</h5>
                    <h5>Sarifapur, Kannauj,</h5>
                    <h5>Kannauj, Uttar Pradesh,</h5>
                    <h5>209725. IN</h5>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                  <div class="circle-icon">
                    <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div class="address ps-3">
                    <h5>info@vibesss.in</h5>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="circle-icon">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="address ps-3">
                    <h5>+91 95802 62936</h5>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- contact form -->

    <?php include 'footer.php';?>

</body>
</html>