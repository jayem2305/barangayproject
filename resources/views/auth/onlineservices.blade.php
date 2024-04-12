@extends("layouts.default")
@section("title","Barangay 781 Zone 85")
@section("content")

   <!-- Spinner Start -->
   <div id="spinner"class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <a href="onlineservices" class="nav-item nav-link text-primary"><i class="bi bi-newspaper"></i> Online Services </a>
                    <a href="register" class="nav-item nav-link text-white"><i class="bi bi-person-fill"></i> Create an Account</a>
                    <a href="aboutus" class="nav-item nav-link text-white"><i class="bi bi-info-circle"></i> About us </i></a>
                    <a href="login" class="nav-item nav-link text-white"><i class="bi bi-door-open-fill"></i> Login</i></a>
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
    <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">Online <br> Services</h1>
    </div>
</section>
</div>


<!-- Features Start -->
<!-- certificate request start -->
<div class="container-xxl py-5" style="margin-top: -5rem;">
    <div class="container-fluid">
        <div class="row g-0 feature-row">
            <div class="col-lg-12" >
                <div class="card w-100 mb-3">
                  <div class="card-body">
                    <div class="row">
                       <div class="col-lg-12 text-center">
                        <img src="../pic/process.jpg" class="img-fluid img-thumbnail">
                    </div>
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
             <a href="login" class="btn btn-primary col-lg-12">Request <i class="bi bi-chevron-double-right"></i></a>
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
     <a href="login" class="btn btn-primary col-lg-12">Request <i class="bi bi-chevron-double-right"></i></a>
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
 <a href="login" class="btn btn-primary col-lg-12">Request <i class="bi bi-chevron-double-right"></i></a>
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
     <a href="login" class="btn btn-primary col-lg-12">Request <i class="bi bi-chevron-double-right"></i></a>
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
 <a href="login" class="btn btn-primary col-lg-12">Request <i class="bi bi-chevron-double-right"></i></a>
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
                    <li>National ID</li>
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
 <a href="login" class="btn btn-primary col-lg-12">Request <i class="bi bi-chevron-double-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
<!-- certificate request end -->
</div>
</div>  
</div>
<!-- Features End -->

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


            <!-- JavaScript Libraries -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
            <script src="../js/jquery/dataTables.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/lightbox/js/lightbox.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
            <script>
                $('input[name="enrol"]').change(function() {
                  if ($('#yesenrol').is(':checked')) {
                    $('#School').prop('disabled', false);
                    $('#COR').prop('disabled', false);
                    $('#Level').prop('disabled', false);
                } else {
                    if ($('#noenrol').is(':checked')) {
                     $('#School').prop('disabled', true);
                     $('#COR').prop('disabled', true);
                     $('#Level').prop('disabled', true);
                 }
             }
         });
                $('input[name="tenant"]').change(function() {
                  if ($('#yestenant').is(':checked')) {
                    $('#landlord').prop('disabled', false);
                } else {
                    if ($('#notenant').is(':checked')) {
                     $('#landlord').prop('disabled', true);
                 }
             }
         });
                const passwordInput = document.getElementById('password');
                const toggleButton = document.getElementById('togglePassword');
                const eyeIcon = document.getElementById('eyeIcon');
                let isPasswordVisible = false;

                toggleButton.addEventListener('click', () => {
                    if (isPasswordVisible) {
                        passwordInput.type = 'password';
                        eyeIcon.classList.remove('bi-eye');
                        eyeIcon.classList.add('bi-eye-slash');
                    } else {
                        passwordInput.type = 'text';
                        eyeIcon.classList.remove('bi-eye-slash');
                        eyeIcon.classList.add('bi-eye');
                    }
                    isPasswordVisible = !isPasswordVisible;
                });

            </script>
            <script type="text/javascript">
              $(document).ready(function(){
                  $('#mytable').DataTable();
              });
          </script>
          <!-- Add this script inside the <head> section of your HTML -->
              <script>
    // JavaScript to handle certificate search
                $(document).ready(function () {
                    $('#Searchbar').on('input', function () {
                        var searchValue = $(this).val().toLowerCase();

            // Move matched cards to the top and set the layout class
                        $('#certificateCards .card').each(function () {
                            var certificateName = $(this).find('.card-title').text().toLowerCase();
                            if (certificateName.includes(searchValue)) {
                                $(this).prependTo('#certificateCards');
                    $(this).addClass('col-lg-4 mb-3 mb-sm-0') // Change the layout class as needed
                } else {
                    $(this).addClass('col-lg-4 mb-3 mb-sm-0'); // Reset the layout class
                }
            });

            // Hide non-matching cards
                        $('#certificateCards .card').each(function () {
                            var certificateName = $(this).find('.card-title').text().toLowerCase();
                            if (certificateName.includes(searchValue)) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

            // Show all cards if search is empty
                        if (searchValue === '') {
                $('#certificateCards .card').show().addClass('col-lg-4 mb-3 mb-sm-0');  // Reset the layout class
            }

            // Handle case when no matching certificates are found
            var visibleCards = $('#certificateCards .card:visible').length;
            if (visibleCards === 0) {
                alert('No matching certificates found.');
                // You can also add logic to display a message or perform other actions.
            }
        });
                });
            </script>





            <!-- indigency -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Request Barangay Indigency</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                          <option selected>Select The type of  Barangay Indiigency</option>
                          <option value="1">4P's</option>
                          <option value="2">Non-Voters</option>
                          <option value="3">Voters-Burial Financial</option>
                          <option value="3">Voters</option>
                      </select>

                      <div class="row">
                          <div class="col-lg-6">
                              <h2>Name: Mark</h2>
                          </div>
                          <div class="col-lg-6">
                              <h2>Age: 53 Years Old</h2>
                          </div>
                          <div class="col-lg-12">
                              <h3>Addres: 2036 int.3 PasigLine St. Sta Ana Manila</h3>
                          </div>
                          <div class="col-lg-12">
                            <label for="floatingInput">The Purpose of  Barangay Indigency</label>
                            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                              <option selected>Select The Purpose of  Barangay Indigency</option>
                              <option value="1">Financial Assistance</option>
                              <option value="2">School Requirement</option>
                              <option value="3">Burial Assistance</option>
                              <option value="4">Educational Assistance</option>
                              <option value="4">Medical Assistance</option>
                              <option value="4">Hospital Requirement</option>
                              <option value="4">Scholarship Application</option>
                              <option value="4">Social Pension Application For Indigent Senior Citizen</option>
                              <option value="4">Others</option>
                          </select>
                      </div>
                      <div class="col-lg-12">
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingInput" placeholder="Others">
                              <label for="floatingInput">Others</label>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</div>

@endsection