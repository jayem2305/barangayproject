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
        <a href="../Admin" class="nav-item nav-link text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
      </svg> Statistical Report </a>
      <a href="register" class="nav-item nav-link text-white"><i class="bi bi-menu-button-wide"></i> Content Manager</a>
      <a href="certificae" class="nav-item nav-link text-white"><i class="bi bi-file-earmark-richtext-fill"></i> Certificates</i></a>
      <li class="dropdown">
        <a class="nav-link  dropdown-toggle text-primary" href="#" role="button"data-bs-toggle="dropdown"  aria-expanded="false">
            <i class="bi bi-person-square"></i> Residences
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="residence"><i class="bi bi-card-checklist"></i> List of Residents</a></li>
            <li><a class="dropdown-item" href="Admin/pendingaccount"><i class="bi bi-person-fill"></i> Pending Account of Residence</a></li>
            <li><a class="dropdown-item bg-primary text-white" href="Admin/forum" class="nav-item nav-link text-white "><i class="bi bi-info-circle"></i> Forum</i></a></li>
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
        <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">Forum</h1>
    </div>
</section>
</div>

<!-- Features Start -->
<!-- statistic start -->
<div class="container-fluid col-lg-12" style="margin-top:-2rem;" >
    <div class="row" >
        <div class="card">
            <div class="card-body">
                <h2>Create A Forum</h2>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Topic: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="topic" placeholder="Write a Topic" name="topic">
                    <div id="valid" ></div>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description: </label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Write a Description" name="description"></textarea>
                </div>
                <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary btn-forum"
                    data-topic="#topic"
                    date-description="#description">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row" id="displayform">
        
    </div>
</div>
<br>
<script src="{{ asset('js/forum.js') }}"></script>


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

<!-- Modal -->
<div class="modal fade" id="forumModal" tabindex="-1" aria-labelledby="forumModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forumModalLabel">View Forum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" >
      <div class="card" >
          <div class="card-header">
              <div id="forumTopic"></div>
              <div id="forumDescription"></div>
          </div>
          <div class="card-body" style="width: 70rem; height: 20rem;overflow-y: auto;overflow-x: hidden;">
            <div class="row" id="displayComments">
                
            </div>
           
        </div>
        <div class="card-footer text-body-secondary">
            <div class="mb-3">
                <div class="row">
                    <div id="inputform">
                        
                    </div>
                    <div class="col-lg-12" style="margin-top: 1rem; margin-bottom:-1rem;">
                        <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="hidden" id="adminname" name="adminname" value="Barangay 781 Zone 85 (Admin)">
                            <img src="../pic/brgy_logo.png" class="rounded-circle me-3" alt="Profile Picture" width="50" height="50">
                            <input type="text" class="form-control" id="comment" placeholder="Write a Comment" name="commnent">
                            <button type="submit" class="btn btn-primary btn-comment" data-commnent="#comment" data-id_form="#id_form" data-adminname="#adminname"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                              <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
                          </svg> </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>




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