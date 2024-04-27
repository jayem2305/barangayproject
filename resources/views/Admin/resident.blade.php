@extends('layouts.residentstatus')

@section('title', 'Barangay 781 Zone 85')

@section('contentresidentlistAdmin')
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
                    <a href="../admin" class="nav-item nav-link text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
</svg> Statistical Report </a>
                    <a href="../admin/contentmanager" class="nav-item nav-link text-white"><i class="bi bi-menu-button-wide"></i> Content Manager</a>
                    <a href="certificae" class="nav-item nav-link text-white"><i class="bi bi-file-earmark-richtext-fill"></i> Certificates</i></a>
                    <li class="dropdown">
                    <a class="nav-link  dropdown-toggle text-primary" href="#" role="button"data-bs-toggle="dropdown"  aria-expanded="false">
                    <i class="bi bi-person-square"></i> Residences
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-bg-primary" href="../Admin/resident"><i class="bi bi-card-checklist"></i> List of Residents</a></li>
                        <li><a class="dropdown-item" href="../Admin/pendingaccount"><i class="bi bi-person-fill"></i> Pending Account of Residence</a></li>
                        <li><a class="dropdown-item" href="../Admin/forum" class="nav-item nav-link text-white"><i class="bi bi-info-circle"></i> Forum</i></a></li>
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
    <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">LIST OF RESIDENTS</h1>
    </div>
</section>
</div>

<!-- Features Start -->
<!-- statistic start -->
<div class="container-fluid col-lg-12" style="margin-top:-2rem;" >
    <div class="row"style="margin-left:1.5rem;" >
        <div class="card col-lg-2" style="width: 15rem;">
          <div class="card-body">
            <b><h3 style="text-align:center; font-size:7rem;"><span id="residences_num"></h3>
                <h3 style="text-align:center; ">Total Numbers of Residences</h3></b>
                <p style="text-align:center;">Includes all Registered that lives in the community</p>
            </div>
        </div>
        <div class="card col-lg-2" style="width: 15rem;">
          <div class="card-body">
            <b><h3 style="text-align:center; font-size:7rem;"><span id="senior_num"></span></h3>
                <h3 style="text-align:center; ">Total Numbers of Seniors</h3></b>
                <p style="text-align:center;">Includes all Registered that lives in the community</p>
            </div>
        </div>
        <div class="card col-lg-2" style="width: 15rem;">
          <div class="card-body">
            <b><h3 style="text-align:center; font-size:7rem;"><span id="minor_num"></span></h3>
                <h3 style="text-align:center; ">Total Numbers of Minors</h3></b>
                <p style="text-align:center;">Includes all Registered that lives in the community</p>
            </div>
        </div>
        <div class="card col-lg-2" style="width: 15rem;">
          <div class="card-body">
            <b><h3 style="text-align:center; font-size:7rem;"><span id="male_num"></span></h3>
                <h3 style="text-align:center; ">Total Numbers of Males</h3></b>
                <p style="text-align:center;">Includes all Registered that lives in the community</p>
            </div>
        </div>
        <div class="card col-lg-2" style="width: 15rem;">
          <div class="card-body">
            <b><h3 style="text-align:center; font-size:7rem;"><span id="female_num"></span></h3>
                <h3 style="text-align:center; ">Total Numbers of Females</h3></b>
                <p style="text-align:center;">Includes all Registered that lives in the community</p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-fluid col-lg-12">
    <div class="row">
        <div class="col-md-12">
            <h3>List of Residences </h3>
            <table class="table table-hover" id="myTable">
                <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">HouseHold</th>
                      <th scope="col">Address</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody id="retrievetable">

              </tbody>
          </table>
      </div>
  </div>
</div>
<div class="container-fluid col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <h3>Update Barangay Officials</h3>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#Addofficials">Add Official Members</button>
            <button class="btn btn-danger" type="button">Archive all official Members</button>
            <table class="table table-hover" id="myOfficials">
                <thead>
                    <tr>
                      <th scope="col">Profile</th>
                      <th scope="col">Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody id="officialslist">
            
              </tbody>
          </table>
        </div>
    </div>
</div>

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



                        <div class="modal fade" id="Addofficials" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="declineModalLabel">Add Official Members</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="members" class="form-label">Official Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" placeholder="Name of the Official Member">
          <div class="form-text" id="error-name" style="display: none;"></div>
        </div>
        <div class="mb-3">
          <label for="position" class="form-label">Official Position <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="position" placeholder="Position of the Member">
        </div>
        <div class="mb-3">
          <label for="profile" class="form-label">Profile Picture <span class="text-danger">*</span></label>
          <input type="file" class="form-control" id="profile">
          <div class="form-text" id="error-profile" style="display: none;"></div>
          <div class="form-text" id="basic-addon4">Maximum file size: 50 MB, maximum number of files: 1<br>Accepted file types: .pdf .png .jpg .jpeg</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-confirm-primary" id="liveToastBtn"><span class="decinepbtn">Submit</span> <div class="spinner-border" role="status" style="display: none;">
            <span class="visually-hidden">Loading...</span>
          </div></button>
      </div>
    </div>
  </div>
</div>
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
    
      <strong class="me-auto text-danger"><i class="bi bi-exclamation-triangle-fill"></i> Invalid Input !</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
    </div>
  </div>
</div>

@endsection