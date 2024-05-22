@extends('layouts.default')

@section('title', 'Barangay 781 Zone 85')

@section('content')

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
                    <a href="aboutus" class="nav-item nav-link text-primary"><i class="bi bi-info-circle"></i> About us </i></a>
                    <a href="login" class="nav-item nav-link text-white"><i class="bi bi-door-open-fill"></i> Login</a>
                </div>
            </div>
        </nav>
    </div>
<!-- Navbar End -->

<div class="container-fluid px-0 mb-5">
<section id="hero" class="d-flex align-items-center" style=" max-width: 100%;
    height: auto;
    height: calc(50vh - 50px);
    background: linear-gradient(to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, .5) 100%, #000 100%), url('../pic/whole.png');
    background-size: cover;
    opacity: .8;
    position: relative;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
    <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">ABOUT US</h1>
    </div>
</section>
</div>

<!-- profile view start -->
<div class="container-xxl py-5" style="margin-top: -5rem;">
    <div class="container-fluid">
        <div class="row g-0 feature-row">
                        <div class="col-lg-12">
                <div class="card w-100 mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Mission</h5>
                            <p class="card-text">To have effective dedicated leaders that will provide outstanding services in terms of public safety, clean and beautiful environment, healthy constituents and spiritual growth towards future development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Vision</h5>
                        <p class="card-text">A peaceful, drug-cleared, healthy and progressive barangay with empowered and productive citizenry under a transparent and competent government.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <br>
                <div class="card">
                  <div class="row">
                    <div class="col-md-3">
                      <img src="../pic/brgy_logo.png" class="img-fluid rounded-start" alt="..." style="margin-top:1rem; margin-left: 1rem;">
                  </div>
                  <div class="col-md-9">
                      <div class="card-body">
                        <h5 class="card-title">History</h5>
                        <p class="card-text justify-content-center">The history of Barangay 781 Zone 85 can be traced back to the early 1900s when the area was still part of a larger barangay. Over time, as the population grew, there was a need to create smaller subdivisions to effectively govern and provide essential services to the residents. It was around the 1950s when the division of barangays began to happen, and Barangay 781 Zone 85 emerged as its own distinct and autonomous unit. Throughout the years, the barangay has undergone modernization and development, witnessing changes in governance and infrastructure. Today, Barangay 781 Zone 85 stands as a vibrant and dynamic community, contributing to the overall progress of its city and serving as an important hub for its residents. Comprehending the history of a specific barangay provides valuable insights into the evolution of local communities. Understanding the background of Barangay 781 Zone 85 not only sheds light on its origins and growth but also highlights the significance of effective governance and community engagement.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Barangay Officials</p>
            <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
        </div>
        <div class="row g-4" id="display_officials">
    
        </div>
    </div>
</div> 
 </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <h2>Contact Details</h2>
            <h4><i class="bi bi-circle"></i> Barangay 781 Zone 85 Sta. Ana Manila City</h4>
            <hr>
            <h4><i class="bi bi-circle"></i> +012 8856 9560</h4>
            <hr>
            <h4><i class="bi bi-circle"></i> barangay781.2023@gmail.com</h4>
        </div>
        <div class="col-lg-6">
            <style type="text/css">
                #map-container-google-2 {
                    overflow: hidden;
                    padding-bottom: 75%; /* Increase this value to make the map larger */
                    position: relative;
                    height:0;
                    margin-bottom: -20rem;
                }

                #map-container-google-2 iframe {
                    left: 0;
                    top: 0;
                    height: 50%;
                    width: 100%; /* Set to 100% to take the entire width of the container */
                    position: absolute;
                }
                .custom-close-button {
    color: white;
}
            </style>
            <div class="row">
                <!-- Google map -->
<div id="map-container-google-2" class="z-depth-1-half map-container col-lg-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.3711620152803!2d121.00593120950249!3d14.577914177575233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c997b217d703%3A0x49c1cd83e3086f25!2sBrgy.%20781%2C%20San%20Andres%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1698527704865!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


            </div>
        </div>
    </div>
</div>

<!-- Team End -->


</div>
</div>

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


@endsection