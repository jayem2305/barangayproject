@extends('layouts.admincertificate')
@section('title', 'Barangay 781 Zone 85')

@section('certificate')
<body style="background-color:#1C2035">
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
        <a href="../Admin" class="nav-item nav-link text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
      </svg> Statistical Report </a>
      <a href="../admin/contentmanager" class="nav-item nav-link text-white"><i class="bi bi-menu-button-wide"></i> Content Manager</a>
      <a href="../Admin/certificate" class="nav-item nav-link text-primary"><i class="bi bi-file-earmark-richtext-fill"></i> Certificates</i></a>
      <li class="dropdown">
        <a class="nav-link  dropdown-toggle text-white" href="#" role="button"data-bs-toggle="dropdown"  aria-expanded="false">
            <i class="bi bi-person-square"></i> Residences
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="../Admin/resident"><i class="bi bi-card-checklist"></i> List of Residents</a></li>
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
        <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">Certificates</h1>
    </div>
</section>
</div>
<div class="row g-0" style="margin-top: -3rem;">
    <div class="col-2">
        <div class="card text-white" style="background-color: #1C2035;" >
        <br>
          <img src="../barangayprorfile/1714398238_logo.png" class=" rounded-circle mx-auto d-block" alt="..." width="200" height="200" id="logo">
          <hr>
          <div class="d-grid gap-3">
          <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
  <input type="radio" class="btn-check" name="options-base" id="ftj" autocomplete="off" >
<label class="btn btn-outline-primary" for="ftj">First-Time Job Seeker <span class="badge text-bg-primary" id="ftj_pending">0</span></label>

<input type="radio" class="btn-check" name="options-base" id="indigency" autocomplete="off">
<label class="btn btn-outline-primary" for="indigency">Barangay Indigency <span class="badge text-bg-primary"id="indigency_pending">0</span></label>

<input type="radio" class="btn-check" name="options-base" id="certificate" autocomplete="off" >
<label class="btn btn-outline-primary" for="certificate">Barangay Certificate <span class="badge text-bg-primary"id="cert_pending">0</span></label>

<input type="radio" class="btn-check" name="options-base" id="permits" autocomplete="off">
<label class="btn btn-outline-primary" for="permits">Business Permit <span class="badge text-bg-primary"id="permit_pending">0</span></label>

<input type="radio" class="btn-check" name="options-base" id="cessation" autocomplete="off">
<label class="btn btn-outline-primary" for="cessation">Cessation of Business  <span class="badge text-bg-primary"id="cessation_pending">0</span></label>

<input type="radio" class="btn-check" name="options-base" id="soloparent" autocomplete="off">
<label class="btn btn-outline-primary" for="soloparent">Solo Parent <span class="badge text-bg-primary"id="soloparent_pending">0</span></label>
</div>
</div>
        </div>
    </div>
    <div class="col-10">
        <div class="card">
            <div class="card-body" style="background-color: #E8E6E6;">
             <h3>History and Monitoring of Certificate</h3>
                <table class="table" id="ApprovalTable">
                    <thead>
                        <tr>
                            <th scope="col">Controll #</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Address</th>
                            <th scope="col">Certificate</th>
                            <th scope="col">Purpose</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body" style="background-color: #E8E6E6;">
            <h3>Approved Certificate</h3>
                <table class="table" id="ClaimTable">
                    <thead>
                        <tr>
                            <th scope="col">Controll #</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Address</th>
                            <th scope="col">Certificate</th>
                            <th scope="col">Purpose</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-medium text-light" href="#">J.Rizz&Co.</a>, All Right Reserved.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">View Requested Document</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-4">
            <label for="formGroupExampleInput" class="form-label">Are you a voters of Manila ? <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="voters" id="voters"  readonly>
            </div>
            <div class="col-8">
                <label for="formGroupExampleInput" class="form-label">Name of Requester <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="names_display" id="names_display"  readonly>
            </div>
            <div class="col-3">
                <label for="formGroupExampleInput" class="form-label">Number of copies <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="copy" readonly>
            </div>
            <div class="col-9">
            <label for="formGroupExampleInput" class="form-label">Purpose of Barangay Certificate <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="purpose" id="purpose" readonly>
            </div>
            <div class="col-lg-12" id="childdisplay_view">
            <label for="formGroupExampleInput" class="form-label text-primary">Name of Child/Children:<span class="text-danger">*</span></label>
                <div class="row gx-2" id="childdisplay">
                    
                   
                </div>
            </div>
        </div>
            <div class="col-12">
                <br>
                <label for="formGroupExampleInput" class="form-label">Uploaded PDF Requirements <span class="text-danger">*</span></label>
                <div id="pdfViewer">
                    <!-- PDF will be displayed here -->
                </div>
            </div>
        </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-indigency">Submit</button>
</div>
</div>
</div>
</div>


<div class="modal fade" id="modalBpermit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">View Requested Document</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
        <div class="row gy-3">
        <div class="col-4">
            <label for="formGroupExampleInput" class="form-label">Are you a voters of Manila ? <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="voters" id="voters_permit"  readonly>
            </div>
            <div class="col-8">
                <label for="formGroupExampleInput" class="form-label">Name of Requester <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="names_display" id="names_display_permit"  readonly>
            </div>
            <div class="col-3">
                <label for="formGroupExampleInput" class="form-label">Number of copies <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="copy_permit" readonly>
            </div>
            <div class="col-lg-9">
            <label for="formGroupExampleInput" class="form-label">Business Name: <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-lg" placeholder="Business Name" name="bname" id="bname" readonly>
            </div>
            <div class="col-lg-12" id="ceo_display">
            <label for="formGroupExampleInput" class="form-label">CEO Name: <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-lg" name="ceo" id="ceo" readonly>
            </div>
            <div class="col-lg-12">
            <label for="formGroupExampleInput" class="form-label">Business Address: <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-lg" placeholder="Business Address" name="baddress" id="baddress" readonly>
            </div>
            <div class="col-12">
            <label for="formGroupExampleInput" class="form-label">Purpose <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="purpose" id="purpose_permit" readonly>
            </div>
            <div class="col-12">
                <br>
                <label for="formGroupExampleInput" class="form-label">Uploaded PDF Requirements <span class="text-danger">*</span></label>
                <div id="pdfViewer_permit">
                    <!-- PDF will be displayed here -->
                </div>
            </div>
        </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-bpermit">Submit</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="exampleModalftjcert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">View Requested Document</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
        <div class="row gy-3">
            <div class="col-4">
            <input type="hidden" class="form-control" value="First-Time Job Seeker" name="cbpermit" id="cbpermit">
            <label for="formGroupExampleInput" class="form-label">Are you a voters of Manila ? <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-lg" name="voters" id="voters_ftj" readonly>
            </div>
            <div class="col-8">
                <label for="formGroupExampleInput" class="form-label">Name of Requester <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-lg" name="names_display" id="names_display_ftj" readonly>
            </div>
            <div class="col-3">
                <label for="formGroupExampleInput" class="form-label">Number of copies <span class="text-danger">*</span></label>
                <input type="number" class="form-control form-control-lg" id="copy_ftj" max="5" min="1" value="1" readonly>
            </div>
            <div class="col-lg-9">
            <label for="formGroupExampleInput" class="form-label">Type of First-Time Job Seeker<span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-lg" name="ftjtypes" id="ftjtypes" readonly>
            </div>
            <div class="col-12">
                <label for="formGroupExampleInput" class="form-label">Uploaded PDF Requirements</label>
                <div id="requirements_ftj" ></div>
            </div>
            <div class="col-lg-12" style="display: none;" id="minordisplay">
                <div class="row">
                    <hr>
                    <h4>Guardian Information</h4>
                    <div class="col-lg-6">
                    <label for="formGroupExampleInput" class="form-label">Guardian Name: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg" placeholder="Guardian's Name" name="pname" id="pname" readonly>
                    </div>
                    <div class="col-lg-6">
                    <label for="formGroupExampleInput" class="form-label">Guardians age: <span class="text-danger">*</span></label>
                        <input type="number" class="form-control form-control-lg" placeholder="Guardian Age" name="page" id="page" min="18"readonly>
                    </div>
                    <div class="col-lg-12">
                    <label for="formGroupExampleInput" class="form-label">Guardians Current Address: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg" placeholder="Guardian Current Address" name="paddress" id="paddress" readonly >
                    </div>
                    <div class="col-12">
                    <label for="formGroupExampleInput" class="form-label">Approval of Guardian With Valid ID <span class="text-danger">*</span> </label>
                    <div id="requirements_parents_ftj"></div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-ftj">Submit</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="kagawadsignatory" data-bs-backdrop="static" tabindex="-1" aria-labModalLabel" aria-hidden="true">elledby="example
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Kagawad Signatory</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="formGroupExampleInput" class="form-label">Select a name of Kagawad: <span class="text-danger">*</span></label>
        <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="official_display_solo" id="official_display_solo">
           
        </select>
        <input type="hidden" class="form-control form-control-lg" id="setid">
        <input type="hidden" class="form-control form-control-lg" id="typeofcert">
        <input type="hidden" class="form-control form-control-lg" id="emaiapprove">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary pdfconvert">Convert to PDF</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModalLabel">Generated PDF</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe id="pdfFrame" src="" style="width: 100%; height: 500px;" frameborder="0"></iframe>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="declineModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="declineModalLabel">Decline Reason</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3 id="userName">To Mr./Ms. : <span id="user-name"></span></h3>
        <label for="declineReason">Why is it Declined?</label>
        <input type="hidden" class="form-control form-control-lg" id="setid_decline">
        <input type="hidden" class="form-control form-control-lg" id="typeofcert_decline">
        <input type="hidden" class="form-control form-control-lg" id="emaildecline">
        <input type="hidden" class="form-control form-control-lg" id="controlnum">
        <textarea class="form-control" id="declineReason" rows="3" required></textarea>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger decline_request" id="submitDeclineReason">Decline</button>
      </div>
    </div>
  </div>
</div>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header text-success">
      <strong class="me-auto">Document Status</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-bg-success">
      Document Declined Successfully
    </div>
  </div>
</div>