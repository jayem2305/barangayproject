@extends('layouts.content')
@section('title', 'Barangay 781 Zone 85')

@section('contentmanager')
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
        <a href="../Admin" class="nav-item nav-link text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
      </svg> Statistical Report </a>
      <a href="../admin/contentmanager" class="nav-item nav-link text-primary"><i class="bi bi-menu-button-wide"></i> Content Manager</a>
      <a href="../Admin/certificate" class="nav-item nav-link text-white"><i class="bi bi-file-earmark-richtext-fill"></i> Certificates</i></a>
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
    <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">Content Manager</h1>
    </div>
</section>
</div>

<div class="container-fluid">
    <div class="row ">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body" style="text-align:center;">
            <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
            <h5 class="card-title" >Barangay Announcement</h5>
            <p class="card-text">formal or informal communication from the local government unit at the barangay level. It is used primarily to keep residents informed about </p>
        </div>
        <div class="card-footer">
           <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create <i class="bi bi-chevron-double-right"></i></a>
       </div>
   </div>
</div>
<div class="col-lg-3 ">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
        <h5 class="card-title" >Barangay Events</h5>
        <p class="card-text">formal or informal communication from the local government unit at the barangay level. It is used primarily to keep residents informed about </p>
    </div>
    <div class="card-footer">
       <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#staticBackdropforevents">Create <i class="bi bi-chevron-double-right"></i></a>
   </div>
</div>
</div>
<div class="col-lg-3">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
        <h5 class="card-title" >Barangay Projects</h5>
        <p class="card-text">formal or informal communication from the local government unit at the barangay level. It is used primarily to keep residents informed about </p>
    </div>
    <div class="card-footer">
       <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#staticBackdropforproject">Create <i class="bi bi-chevron-double-right"></i></a>
   </div>
</div>
</div>
<div class="col-lg-3">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-info-circle"></i></h1>
        <h5 class="card-title" >Update About us</h5>
        <p class="card-text">formal or informal communication from the local government unit at the barangay level. It is used primarily to keep residents informed about </p>
    </div>
    <div class="card-footer">
       <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#updateaboutus">Create <i class="bi bi-chevron-double-right"></i></a>
   </div>
</div>
</div>
</div>
</div>
<hr>
<h1 class="display-12 mb-5 text-primary"><i>Barangay Events</i></h1>
<table class="table table-hover" id="myevents">
          <thead>
            <tr>
              <th scope="col">Type</th>
              <th scope="col">image</th>
              <th scope="col">Title</th>
              <th scope="col">Published Date</th>
              <th scope="col">Published Time</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody id="tableevents">
      </tbody>
</table>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Barangay Announcement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div id="showmessage">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
           <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" placeholder="Place your Title here" name="titleannouncement">
                    <label for="title">Write your Title Here <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-lg-12">
                <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
                Accepted file types: .png .jpg .jpeg</p>
            </div>
            <div class="col-lg-12">
            <div class="mb-3">
            <label for="editor_announcement">Content of an Announcement <span class="text-danger">*</span></label>
                <div id="editor_announcement" class="form-control" name="content"></div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary announce-btn" name="submit">Submit</button>

    </div>
</div>
</div>
</div>

<!-- MOdal for Events -->
<div class="modal fade " id="staticBackdropforevents" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Barangay Events</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="showmessageevent">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="titleevent" placeholder="Place your Title here" name="titleevent">
                  <label for="title">Write your Title Here...</label>
              </div>
          </div>
<div class="col-lg-6">
    <div class="form-floating">
        <input type="date" class="form-control" id="startdateeven" name="startdateeven" >
        <label for="startdateeven">Start date</label>
    </div>
</div>
<div class="col-lg-6">
    <div class="form-floating">
        <input type="date" class="form-control" id="enddateeven" name="enddateeven" >
        <label for="enddateeven">End date</label>
    </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="mb-3">
            <label for="editor_events">Content of an Events <span class="text-danger">*</span></label>
                <div id="editor_events" class="form-control" name="content"></div>
                   
                </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary event-btn">Submit</button>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade " id="staticBackdropforproject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Barangay Project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
         <div id="showmessageproject">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="titleproject" placeholder="Place your Title here" name="titleproject">
                  <label for="title">Write your Title Here...</label>
              </div>
          </div>
          <div class="col-lg-12">
            <div class="form-floating">
              <input type="file" class="form-control" id="filetypeproject" placeholder="Upload Picture" name="filetypeproject">
              <label for="filetype">Upload Picture</label>
          </div>
      </div>
      <div class="col-lg-12">
        <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
        Accepted file types: .png .jpg .jpeg</p>
    </div>
    <div class="col-lg-6">
        <div class="form-floating">
          <input type="date" class="form-control" id="startdateproject" placeholder="Upload Picture" name="startdateproject">
          <label for="filetype">Start date</label>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-floating">
      <input type="date" class="form-control" id="enddateproject" placeholder="Upload Picture" name="enddateproject">
      <label for="filetype">End date</label>
  </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="mb-3">
            <label for="editor_project">Content of an Events <span class="text-danger">*</span></label>
                <div id="editor_project" class="form-control" name="content"></div>
                   
                </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary project-btn" 
    >Submit</button>
</div>
</div>
</div>
</div>
</div>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto text-success headerupdate">Updated Successfully</strong>
      <small class="text-muted">Just now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Announcement updated successfully!
    </div>
  </div>
</div>

<!-- Update modal-->
<div class="modal fade" id="updateAnnouncement" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Barangay Announcement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div id="showmessage">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
           <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="titleaanouncement_update" placeholder="Place your Title here" name="titleannouncement">
                    <label for="title">Write your Title Here <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-lg-12">
                <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
                Accepted file types: .png .jpg .jpeg</p>
            </div>
            <div class="col-lg-12">
            <div class="mb-3">
            <label for="editor_announcement_update">Content of an Announcement <span class="text-danger">*</span></label>
                <div id="editor_announcement_update" class="form-control" name="content"></div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success announce-update-btn" name="submit" id="liveToastBtn">Update</button>

    </div>
</div>
</div>
</div>
<!-- Update modal event-->
<div class="modal fade " id="updateforevents" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="upateLabel">Update Barangay Events</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="showmessageevent">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="updatetitleevent" placeholder="Place your Title here" name="titleevent">
                  <label for="title">Write your Title Here...</label>
              </div>
          </div>
<div class="col-lg-6">
    <div class="form-floating">
        <input type="date" class="form-control" id="updatestartdateeven" name="startdateeven" >
        <label for="startdateeven">Start date</label>
    </div>
</div>
<div class="col-lg-6">
    <div class="form-floating">
        <input type="date" class="form-control" id="updateenddateeven" name="enddateeven" >
        <label for="enddateeven">End date</label>
    </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="mb-3">
            <label for="updateeditor_events">Content of an Events <span class="text-danger">*</span></label>
                <div id="updateeditor_events" class="form-control" name="content"></div>
                   
                </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-success update-event-btn">Update</button>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade " id="updateforproject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Barangay Project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
         <div id="showmessageproject">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="updatetitleproject" placeholder="Place your Title here" name="titleproject">
                  <label for="title">Write your Title Here...</label>
              </div>
          </div>
          <div class="col-lg-12 text-center"><span id="fileInputNameDisplay"></span><h6>Current Image</h6></div>
          <div class="col-lg-12">
            <div class="form-floating">
              <input type="file" class="form-control" id="updatefiletypeproject" placeholder="Upload Picture" name="filetypeproject">
              <label for="filetype">Upload Picture</label>
          </div>
      </div>
      <div class="col-lg-12">
      <p class="text-start text-danger">Input only if needed to update</p>
        <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
        Accepted file types: .png .jpg .jpeg</p>
    </div>
    <div class="col-lg-6">
        <div class="form-floating">
          <input type="date" class="form-control" id="updatestartdateproject" placeholder="Upload Picture" name="startdateproject">
          <label for="filetype">Start date</label>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-floating">
      <input type="date" class="form-control" id="updateenddateproject" placeholder="Upload Picture" name="enddateproject">
      <label for="filetype">End date</label>
  </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="mb-3">
            <label for="updateeditor_project">Content of an Events <span class="text-danger">*</span></label>
                <div id="updateeditor_project" class="form-control" name="content"></div>
                   
                </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-success update-project-btn" 
    >Update</button>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade " id="updateaboutus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Barangay Project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
         <div id="showmessageproject">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
          <div class="col-lg-12 text-center"><span id="logodisplay"></span><h6>Current Logo</h6></div>
          <div class="col-lg-12">
            <div class="form-floating">
              <input type="file" class="form-control" id="updatelogo" placeholder="Upload Logo" name="updatelogo">
              <label for="filetype">Upload Logo</label>
          </div>
      </div>
      <div class="col-lg-12">
      <p class="text-start text-danger">Input only if needed to update</p>
        <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
        Accepted file types: .png .jpg .jpeg</p>
    </div>
<div class="col-lg-12">
    <br>
    <div class="mb-3">
        <label for="updatemission">Content of an Mission <span class="text-danger">*</span></label>
            <div id="updatemission" class="form-control" name="mission"></div>  
    </div>
    <div class="mb-3">
        <label for="updatevission">Content of an Vission <span class="text-danger">*</span></label>
            <div id="updatevission" class="form-control" name="vission"></div>  
    </div>
    <div class="mb-3">
        <label for="updatehistory">Content of an Background History <span class="text-danger">*</span></label>
            <div id="updatehistory" class="form-control" name="history"></div>  
    </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary update-info-btn" 
    >Submit</button>
</div>
</div>
</div>
</div>
</div>
@endsection