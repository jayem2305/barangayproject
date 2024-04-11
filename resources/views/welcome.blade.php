@extends('layouts.default')

@section('title', 'Barangay 781 Zone 85')

@section('content')

<body style="background-color: #1C2035;">
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
    <!-- <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <h2 class="text-white fw-bold m-0">781 Zone 85</h2>
                </a>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class=" bg-transparent sticky-top">
        <nav class="navbar navbar-expand-lg p-lg-0"style="background-color: #1C2035;">
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                 <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav text">
                     <a class="navbar-brand" href="/">
                     <img src="../pic/nav.png" alt="Logo" width="400" height="70" class="d-inline-block align-text-top">
                     </a>
                    </div> 
                    <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a href="onlineservices" class="nav-item nav-link text-white"><i class="bi bi-newspaper"></i> Online Services </a>
                    <a href="register" class="nav-item nav-link text-white"><i class="bi bi-person-fill"></i> Create an Account</a>
                    <a href="aboutus" class="nav-item nav-link text-white"><i class="bi bi-info-circle"></i> About us </i></a>
                    <a href="login" class="nav-item nav-link text-white"><i class="bi bi-door-open-fill"></i> Login</a>
                </div>
            </div>
        </nav>
    </div>
<!-- Navbar End -->

<div class="container-fluid px-0 mb-5">
    <section id="hero" class="d-flex align-items-center" style=" max-width: 100%;
    height: auto;
    height: calc(110vh - 110px);
    Background: linear-gradient(to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, .5) 100%, #000 100%), url('../pic/whole.png');
    background-size: cover;
    position: relative;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500" >
        <img src="../pic/brgy_logo.png" class="img-thumbnail rounded-circle mx-auto d-block" alt="logo" width="200" height="200" style="opacity: .8;">
        <h1 class="text-center text-white text-uppercase"style="font-size: 3rem;">Welcome to Brgy. 781 Zone 85 </h1>
        <div class="text-center">
            <a href="onlineservices" class="btn btn-lg btn-primary" style="font-size: 1rem;">REQUEST A CERTIFICATE</a>
        </div>
    </div>
</section>
</div>

<!-- Features Start -->

<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Barangay 781 Zone 85 Sta. Ana Manila City</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 8856 9560</p>
                <p class="mb-2" style="font-size: 13px;"><i class="fa fa-envelope me-3" style="font-size: 19px;"></i>barangay781.2023@gmail.com</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light rounded-circle me-2" href="https://mail.google.com/mail/?view=cm&fs=1&to=barangay781.2023@gmail.com" target="_blank"><i
                        class="fab fa-google"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100089497350963" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                            <div class="col-lg-3 col-md-6">
                                <h4 class="text-white mb-4">Business Hours</h4>
                                <p class="mb-1">Monday - Friday</p>
                                <h6 class="text-light">09:00 am - 07:00 pm</h6>
                                <p class="mb-1">Saturday</p>
                                <h6 class="text-light">09:00 am - 12:00 pm</h6>
                                <p class="mb-1">Sunday</p>
                                <h6 class="text-light">Closed</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->

 <!-- Copyright Start -->
                <div class="container-fluid copyright py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="fw-medium text-light" href="#">J.Rizz&Co.</a>, All Right Reserved.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright End -->





        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


                    <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                        class="bi bi-arrow-up"></i></a>

                       <div class="modal fade" tabindex="-1" role="dialog" id="autoShowModal" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" style="background-image: url('../pic/popup.png'); background-size: cover; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <button type="button" class="btn-close custom-close-button" data-bs-dismiss="modal" aria-label="Close" style="margin-left: 48rem; margin-bottom: 23rem; z-index: 1;"></button>

                <!-- Background Image -->
                <div >
                    <a href="onlineservices" class="btn btn-primary btn-lg" role="button" style="margin-left: -22rem;margin-top: -6rem; z-index: 1; position: absolute;">CLICK HERE TO APPLY</a>
                </div>
                <!-- End Background Image -->
            </div>
        </div>
    </div>
</div>



@endsection