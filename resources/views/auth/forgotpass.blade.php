@extends('layouts.forgotpass')

@section('title', 'Barangay 781 Zone 85')

@section('content_forgotpass')
 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->
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
    <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">Change Password</h1>
    </div>
</section>
</div>


<!-- login Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Change Your Password</h2>
                <div class="row g-3">
                                           <div id="forgotpassuccess">
                            <div class="alert alert-primary d-flex align-items-center" role="alert" >
                                <div class="spinner-border text-primary" role="status" style="display:none;" id="load">
                                  <span class="visually-hidden">Loading...</span>
                              </div>
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill" id="svg"/></svg>
                          <div>
                            Fill up The password Correctly.
                         </div>
                     </div>
                        </div>
                    <input type="hidden" class="form-control form-control-lg" id="idnumber" name="idnumber"  required>
                    <div class="col-sm-12">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg" id="password" placeholder="New Password" name="password" required oninput="updatePasswordRequirements()">
                            <span class="input-group-text" id="basic-addon2">
                                <a id="togglePassword" type="button"><i class="bi bi-eye-slash" id="eyeIcon"></i></a>
                            </span>
                            <div id="password-requirements" class="col-lg-12">
              Password must have at least 8 characters, at least 1 uppercase letter, 1 number, and 1 special character.
          </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required>
                            <span class="input-group-text" id="basic-addon2">
                                <a id="togglePassword2" type="button"><i class="bi bi-eye-slash" id="eyeIcon2"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center" style="float:right;">
                        <div class="row">
                            <div class="col-lg-6">
                                 <a href="login.php" class="btn btn-secondary" >Cancel</a>
                            </div>
                            <div class="col-lg-6">
                                 <button class="btn btn-primary forgotpass-btn" type="button" name="login" data-confirmpassword="#confirmpassword"
                        data-password="password" data-username="username">Confirm</button>
                            </div>
                        </div>
                    </div>
             </div>
         </div>
     </div>
 </div>
</div>