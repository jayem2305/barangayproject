@extends('layouts.certificateheader')

@section('title', 'Barangay 781 Zone 85')

@section('content')
<body style="background-color: #E8E6E6;">
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
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
                <a href="../User/events" class="nav-item nav-link text-primary"><i class="bi bi-calendar2-event-fill"></i> Events </a>
                <a href="../User/certificate" class="nav-item nav-link text-white"><i class="bi bi-file-earmark-text-fill"></i> My Certificates</a>
                <a href="../User/aboutus" class="nav-item nav-link text-white"><i class="bi bi-info-circle-fill"></i> About us </i></a>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear-fill"></i> Settings
                    </a>
                    <ul class="dropdown-menu" style="max-height: 300px; overflow-y: auto;">
                        <li><a class="dropdown-item" href="../User/forum"><i class="bi bi-info-circle-fill"></i> Forum</a></li>
                        <li><a class="dropdown-item" href="../User/profile"><i class="bi bi-person-circle"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="../User/logout" class="nav-item nav-link text-white"><i class="bi bi-door-closed"></i> Logout</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
</div>
<div class="row g-0 feature-row">
    <div class="col-lg-12" >
        <div class="card w-100 mb-3 ">
            <div class="card-body">
                <div class="col-lg-12 text-center">
                    <img src="../pic/process.jpg" class="img-fluid img-thumbnail">
                </div>
                <br>
                <div class="row">

                    <div class="col-md-6">
                        <h3>Request a Certificate</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg" id="Searchbar" placeholder="Search">
                            <span class="input-group-text bg-primary" id="basic-addon2">
                                <a id="search" type="button"><i class="bi bi-search text-light"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-auto row" style="max-height: 40rem;" id="certificateCards">
                        <div class="col-lg-4 mb-3 mb-sm-0">
                            <div class="card" style="height: 23rem; margin-bottom: 1rem;">
                                <div class="card-body">
                                    <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
                                    <h5 class="card-title"style="text-align:center;" >Barangay Indigency</h5>
                                    <hr>
                                    <div class="overflow-auto row" style="max-height: 7.5rem;" id="searchResults">
                                        <p class="card-text " style="text-align:left;"><b>Types of Barangay Indigency : </b>
                                            <div class="col-md-5">
                                                <dl style="text-align: left;">
                                                    <li>4P's</li>
                                                    <li>Non-Voters</li>
                                                </dl>
                                            </div>
                                            <div  class="col-md-7">
                                                <dl style="text-align: left;">
                                                    <li>Voters for Burial / Financial</li>
                                                    <li>Voters</li>
                                                </dl>
                                            </div>
                                            <b>Prepare the following items for claim purposes: </b>
                                            <div class="col-md-12">
                                                <dl style="text-align: left;">
                                                    <li>Atleast 1 valid ID</li>
                                                    <li>Control Number</li>
                                                    <li>Student ID (for Students Only)</li>
                                                </dl>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#exampleModal">Request <i class="bi bi-chevron-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 mb-sm-0">
                            <div class="card" style="height: 23rem; margin-bottom: 1rem;">
                                <div class="card-body">
                                    <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
                                    <h5 class="card-title"style="text-align:center;" >Business Permit</h5>
                                    <hr>
                                    <div class="overflow-auto row" style="max-height: 7.5rem;">
                                        <p class="card-text " style="text-align:left;">
                                            <b>Prepare the following items for claim purposes: </b>
                                            <div class="col-md-12">
                                                <dl style="text-align: left;">
                                                    <li>Atleast 1 valid ID</li>
                                                    <li>Control Number</li>
                                                    <li>Student ID (for Students Only)</li>
                                                </dl>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#modalBpermit">Request <i class="bi bi-chevron-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 mb-sm-0">
                            <div class="card" style="height: 23rem; margin-bottom: 1rem;">
                                <div class="card-body">
                                    <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
                                    <h5 class="card-title"style="text-align:center;" >Cessation of Business</h5>
                                    <hr>
                                    <div class="overflow-auto row" style="max-height: 7.5rem;">
                                        <p class="card-text " style="text-align:left;">
                                            <b>Prepare the following items for claim purposes: </b>
                                            <div class="col-md-12">
                                                <dl style="text-align: left;">
                                                    <li>Atleast 1 valid ID</li>
                                                    <li>Control Number</li>
                                                    <li>Student ID (for Students Only)</li>
                                                </dl>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#modalBcessation">Request <i class="bi bi-chevron-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 mb-sm-0">
                            <div class="card" style="height: 23rem; margin-bottom: 1rem;">
                                <div class="card-body">
                                    <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
                                    <h5 class="card-title"style="text-align:center;" >First time job seeker</h5>
                                    <hr>
                                    <div class="overflow-auto row" style="max-height: 7.5rem;">
                                        <p class="card-text " style="text-align:left;"><b>Types of First time job seeker: </b>
                                            <div class="col-md-12">
                                                <dl style="text-align: left;">
                                                    <li>Oath of Undertaking</li>
                                                    <li>First Time job seeker</li>
                                                    <li>First Time job seeker for minor</li>
                                                </dl>
                                            </div>
                                            <b>Prepare the following items for claim purposes: </b>
                                            <div class="col-md-12">
                                                <dl style="text-align: left;">
                                                    <li>Atleast 1 valid ID</li>
                                                    <li>Control Number</li>
                                                    <li>Student ID (for Students Only)</li>
                                                </dl>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#exampleModalftjcert">Request <i class="bi bi-chevron-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 mb-sm-0">
                            <div class="card" style="height: 23rem; margin-bottom: 1rem;">
                                <div class="card-body">
                                    <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
                                    <h5 class="card-title"style="text-align:center;" >Application of Solo Parent</h5>
                                    <hr>
                                    <div class="overflow-auto row" style="max-height: 7.5rem;">
                                        <p class="card-text " style="text-align:left;">
                                            <b>Prepare the following items for claim purposes: </b>
                                            <div class="col-md-12">
                                                <dl style="text-align: left;">
                                                    <li>Atleast 1 valid ID</li>
                                                    <li>Control Number</li>
                                                    <li>Student ID (for Students Only)</li>
                                                </dl>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#exampleModalsolo">Request <i class="bi bi-chevron-double-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 mb-sm-0">
                            <div class="card" style="height: 23rem; margin-bottom: 1rem;">
                                <div class="card-body">
                                    <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
                                    <h5 class="card-title"style="text-align:center;" >Barangay Certificate</h5>
                                    <hr>
                                    <div class="overflow-auto row" style="max-height: 7.5rem;">
                                        <p class="card-text " style="text-align:left;"><b>Types of Barangay Certificate : </b>
                                            <div class="col-md-5">
                                                <dl style="text-align: left;">
                                                    <li>Bail</li>
                                                    <li>Non-Voters</li>
                                                    <li>Probation</li>
                                                </dl>
                                            </div>
                                            <div  class="col-md-7">
                                                <dl style="text-align: left;">
                                                    <li>Voters</li>
                                                    <li>Non-Voters Kagawad Signatory</li>
                                                </dl>
                                            </div>
                                            <b>Prepare the following items for claim purposes: </b>
                                            <div class="col-md-12">
                                                <dl style="text-align: left;">
                                                    <li>Atleast 1 valid ID</li>
                                                    <li>Control Number</li>
                                                    <li>Student ID (for Students Only)</li>
                                                    <li>Business Permit</li>
                                                </dl>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#exampleModalCertificate">Request <i class="bi bi-chevron-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Request Barangay Indigency</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
             <div id="error-message"  >
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                    Fill Up the form
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
            <input type="hidden" class="form-control" value="Barangay Indigency" name="indigency" id="indigency">
            <label for="formGroupExampleInput" class="form-label">Are you a voters of Manila ? <span class="text-danger">*</span></label>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="voters" id="voters">
                    <option selected disabled>-----</option>
                    <option value="Non-Voters">Non-Voters</option>
                    <option value="Voters">Voters</option>
                </select>
            </div>
            <div class="col-8">
                <label for="formGroupExampleInput" class="form-label">Name of Requester <span class="text-danger">*</span></label>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="names_display" id="names_display">
                    <option selected disabled>-----</option>
                    <!-- Names of members and Head Ofthe family-->
                </select>
            </div>
            <div class="col-3">
                <label for="formGroupExampleInput" class="form-label">Number of copies <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="copy" max="5" min="0" value="0">
            </div>
            <div class="col-9">
                <label for="formGroupExampleInput" class="form-label">Upload your Requirements <span class="text-danger">*</span> <span class="text-primary"><i class="bi bi-info-circle"></i> Compiled it in PDF format with maximum 50mb</span></label>
                <input type="file" class="form-control" id="requirements" >
            </div>
            <div class="col-12">
            <label for="formGroupExampleInput" class="form-label">Purpose of Barangay Indigency <span class="text-danger">*</span></label>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="purpose" id="purpose">
                    <option selected disabled>-----</option>
                    <option value="Financial Assistance">Financial Assistance</option>
                    <option value="School Requirement">School Requirement</option>
                    <option value="Burial Assistance">Burial Assistance</option>
                    <option value="Scholarship Application">Scholarship Application</option>
                    <option value="Educational Assistance">Educational Assistance</option>
                    <option value="Medical Assistance">Medical Assistance</option>
                    <option value="Scholarship Application">Scholarship Application</option>
                    <option value="Social Pension for Indigent Senior Citizen Application">Social Pension for Indigent Senior Citizen Application</option>
                    <option value="Others ">Others </option>
                </select>
            </div>
            <div class="col-lg-12">
                <span class="text-primary"><i class="bi bi-info-circle"></i> Specify The Purpose if Others is selected</span>
                <input type="hidden" class="form-control others" placeholder="Others" name="others" id="otherpurpose">
            </div>
        </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-indigency">Submit</button>
</div>
</div>
<div class="toast-container position-absolute top-0 end-0 p-3" style="margin-top: 1rem;">
    <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true"> 
        <div class="toast-body">
            <div class="row">
                <div class="col-lg-10 col-sm-10 col-md-10">
                    <strong class="me-auto">Archived of resident is successful.</strong>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2">
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
        </div>
    </div> 