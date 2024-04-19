@extends('layouts.header')

@section('title', 'Barangay 781 Zone 85')

@section('contentAdmin')
<body>
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
                 <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav text" style="margin-left: 1rem;">
                     <img src="../pic/nav.png" alt="Logo" width="300" height="70" class="d-inline-block align-text-top">
                    </div> 
                    <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a href="statisticalreport" class="nav-item nav-link text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
</svg> Statistical Report </a>
                    <a href="register" class="nav-item nav-link text-white"><i class="bi bi-menu-button-wide"></i> Content Manager</a>
                    <a href="certificae" class="nav-item nav-link text-white"><i class="bi bi-file-earmark-richtext-fill"></i> Certificates</i></a>
                    <li class="dropdown">
                    <a class="nav-link  dropdown-toggle text-white" href="#" role="button"data-bs-toggle="dropdown"  aria-expanded="false">
                    <i class="bi bi-person-square"></i> Residences
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="residence"><i class="bi bi-card-checklist"></i> List of Residents</a></li>
                        <li><a class="dropdown-item" href="pendingresidents"><i class="bi bi-person-fill"></i> Pending Account of Residence</a></li>
                        <li><a class="dropdown-item" href="forum" class="nav-item nav-link text-white"><i class="bi bi-info-circle"></i> Forum</i></a></li>
                    </ul>
                </li>
                    <a href="logout" class="nav-item nav-link text-white"><i class="bi bi-door-closed-fill"></i> Logout</a>
                </div>
            </div>
        </nav>
    </div>
<!-- Navbar End -->

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
    <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">StatisTical Reports</h1>
    </div>
</section>
</div>

<!-- Features Start -->
<!-- statistic start -->
<div class="container-fluid col-lg-12" style="margin-top:-2rem;" >
    <div class="row"style="margin-left:1.5rem;" >
        <div class="card col-lg-2" style="width: 15rem;">
          <div class="card-body">
                <b><h3 style="text-align:center; font-size:7rem;">0</h3>
                    <h3 style="text-align:center; ">Total Numbers of Residences</h3></b>
                    <p style="text-align:center;">Includes all Registered that lives in the community</p>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 15rem;">
              <div class="card-body">
                <b><h3 style="text-align:center; font-size:7rem;">0</h3>
                    <h3 style="text-align:center; ">Total Numbers of Seniors</h3></b>
                    <p style="text-align:center;">Includes all Registered that lives in the community</p>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 15rem;">
                  <div class="card-body">
                        <b><h3 style="text-align:center; font-size:7rem;">0</h3>
                            <h3 style="text-align:center; ">Total Numbers of Minors</h3></b>
                            <p style="text-align:center;">Includes all Registered that lives in the community</p>
                        </div>
                    </div>
            <div class="card col-lg-2" style="width: 15rem;">
              <div class="card-body">
                    <b><h3 style="text-align:center; font-size:7rem;">0</h3>
                        <h3 style="text-align:center; ">Total Numbers of Males</h3></b>
                        <p style="text-align:center;">Includes all Registered that lives in the community</p>
                    </div>
                </div>
                <div class="card col-lg-2" style="width: 15rem;">
                  <div class="card-body">
                        <b><h3 style="text-align:center; font-size:7rem;">0</h3>
                            <h3 style="text-align:center; ">Total Numbers of Females</h3></b>
                            <p style="text-align:center;">Includes all Registered that lives in the community</p>
                        </div>
                    </div>
    </div>
</div>
<br>


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