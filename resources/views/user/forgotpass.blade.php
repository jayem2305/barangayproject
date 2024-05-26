@extends('layouts.forgotpass')

@section('title', 'Barangay 781 Zone 85')

@section('content_forgotpass')
 <!-- Spinner Start -->
 <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->
<!-- Navbar Start -->
<div class=" bg-transparent sticky-top">
    <nav class="navbar navbar-expand-lg p-lg-0"style="background-color: #1C2035;">
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon " ></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav text">
                <a href="../User" class="nav-item nav-link text-white"> 
                    <img src="../pic/nav.png" alt="Logo" width="400" height="70" class="d-inline-block align-text-top">
                </a>
            </div> 
            <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                <a href="../User/events" class="nav-item nav-link text-white"><i class="bi bi-calendar2-event-fill"></i> Events </a>
                <a href="../User/certificate" class="nav-item nav-link text-white"><i class="bi bi-file-earmark-text-fill"></i> My Certificates</a>
                <a href="../User/aboutus" class="nav-item nav-link text-primary"><i class="bi bi-info-circle-fill"></i> About us </i></a>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear-fill"></i> Settings
                    </a>
                    <ul class="dropdown-menu" style="max-height: 300px; overflow-y: auto;">
                        <li><a class="dropdown-item text-bg-white" href="../User/forum"><i class="bi bi-info-circle-fill"></i> Forum</a></li>
                        <li><a class="dropdown-item" href="../User/profile"><i class="bi bi-person-circle"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="/" class="nav-item nav-link text-white"><i class="bi bi-door-closed"></i> Logout</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<div class="container-fluid px-0 mb-5">
    <section id="hero" class="d-flex align-items-center" style=" max-width: 100%;
    height: auto;
    height: calc(50vh - 50px);
    background: url('../pic/whole.png') top center;
    background-size: cover;
    opacity: .8;
    position: relative;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
        <h1 style="font-size: 5rem;">Change your Password</h1>
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
                    <input type="hidden" class="form-control form-control-lg" id="username" placeholder="Username" name="username" required>
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