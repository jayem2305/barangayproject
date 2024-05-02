<?php
session_start();
include('../dbh/dbh.inc.php');

if (!(isset($_SESSION['login_user']))) {
    header("Location: ../login/index.php");
    exit();
} else {
    $email = $_SESSION['login_user'];
}

$selectUser = "SELECT * FROM user WHERE email = '$email'";
$resultUser = mysqli_query($conn, $selectUser);
$row = mysqli_fetch_array($resultUser);

$lname = ucwords(strtolower($row['lastname']));
$fname = ucwords(strtolower($row['firstname']));
$mname = strtoupper(substr($row['middleinitial'], 0, 1));
$address = ucwords(strtolower($row['address']));
$mobile = $row['mobilenum'];
$bday = $row['bday'];
$age = $row['age'];
$gender = ucwords(strtolower($row['gender']));
$civil = ucwords(strtolower($row['civilstats']));
$educ = ucwords(strtolower($row['educattainment']));
$prof = ucwords(strtolower($row['profession']));
$place = ucwords(strtolower($row['place']));
$local = ucwords(strtolower($row['locality']));
$religion = ucwords(strtolower($row['religion']));
$relation = ucwords(strtolower($row['relation']));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>781 Zone 85</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../pic/brgy_logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
  </svg>
  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
   #hero {
      background-repeat: no-repeat;
      animation: carousel 1000s linear infinite;
  }

  @keyframes carousel {
      0%, 100% {
        background-position: 0 0;
    }
    25% {
        background-position: 100% 0;
    }
    50% {
        background-position: 200% 0;
    }
    75% {
        background-position: 300% 0;
    }
}

</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
    <!-- <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <h2 class="text-white fw-bold m-0">781 Zone 85</h2>
                </a>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark sticky-top">
        <div class="container bg-transparent">
            <nav class="navbar navbar-expand-lg bg-transparent navbar-light p-lg-0">
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ">
                    <a class="navbar-brand" href="index.php">
                        <img src="../pic/nav.png" alt="Logo" width="400" height="70" class="d-inline-block align-text-top">

                    </a>
                </div>
                <div class = "navbar-nav ms-auto mb-2 mb-lg-0">
                    <a href="profile.php" class="nav-item nav-link  active" >Profile</a>
                    <a href="events.php" class="nav-item nav-link text-white" >Events</a>
                    <a href="certificate.php" class="nav-item nav-link text-white">Certificate</a>
                    <a href="residentreports.php" class="nav-item nav-link text-white">Residents Reports</a>
                    <a href="about.php" class="nav-item nav-link text-white" >About us</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="../dbh/logout.dbh.php" class="btn btn-danger rounded-pill py-2 px-3">Log Out</a>
                </div> 
            </div>
        </nav>
    </div>
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
        <h1 style="font-size: 5rem;">Profile</h1>
    </div>
</section>
</div>


<!-- Features Start -->
<!-- profile view start -->
<div class="container-xxl py-5" style="margin-top: -5rem;">
    <div class="container-fluid">
        <div class="row g-0 feature-row">
            <nav aria-label="breadcrumb" style="text-align: center;">
                <h3><ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">Profile</li>
                </ol></h3>
            </nav> 
            <div class="col-lg-12">
                <div class="card w-100 mb-3">
                  <div class="card-body">
                    <h3>Profile Information</h3>
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="row">
                                <div class="col-lg-6">
                                    <p><?php echo $lname.", ".$fname." ".$mname.". ";?></p>
                                </div>
                                <div class="col-lg-6">
                                    <p><?php echo $gender;?></p>
                                </div>
                            </div>

                            <hr class="border border-secondary border-2 opacity-50">

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Name:</p>
                                </div>
                                <div class="col-lg-6">
                                    <p>Gender:</p>
                                </div>
                            </div>

                            <p><?php echo $address;?></p>
                            
                            <hr class="border border-secondary border-2 opacity-50">

                            <p>Address:</p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p><?php echo $educ;?></p>
                                </div>
                                <div class="col-lg-6">
                                    <p><?php echo $place;?></p>
                                </div>
                            </div>

                            <hr class="border border-secondary border-2 opacity-50">

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Educational Attainment:</p>
                                </div>
                                <div class="col-lg-6">
                                    <p>Place of Work/School:</p>
                                </div>
                            </div>

                            <p><?php echo $email;?></p>

                            <hr class="border border-secondary border-2 opacity-50">

                            <p>Email Address:</p>
                        </div>
                        <div class="col-lg-6">

                        <div class="row">
                                <div class="col-lg-6">
                                    <p><?php echo $bday;?></p>
                                </div>
                                <div class="col-lg-6">
                                    <p><?php echo $age;?></p>
                                </div>
                            </div>


                            <hr class="border border-secondary border-2 opacity-50">

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Birthday:</p>
                                </div>
                                <div class="col-lg-6">
                                    <p>Age:</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p><?php echo $civil;?></p>
                                </div>
                                <div class="col-lg-6">
                                    <p><?php echo $religion;?></p>
                                </div>
                            </div>


                            <hr class="border border-secondary border-2 opacity-50">


                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Civil Status:</p>
                                </div>
                                <div class="col-lg-6">
                                    <p>Religion:</p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <p><?php echo $prof;?></p>
                                </div>
                                <div class="col-lg-6">
                                    <p><?php echo $mobile;?></p>
                                </div>
                            </div>

                            <hr class="border border-secondary border-2 opacity-50">


                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Profession:</p>
                                </div>
                                <div class="col-lg-6">
                                    <p>Mobile Number:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- profile view end -->

            <!-- update start -->
            <div class="card w-100">
              <div class="card-body">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="mb-4">Update Profile</h2>
                            <div class="row g-3">
                                <div class="col-sm-5">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name" required>
                                        <label for="lname">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="fname" placeholder="First Name" required>
                                        <label for="fname">First Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mname" placeholder="M.I" required>
                                        <label for="mname">M.I</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Address" placeholder="Your Address">
                                        <label for="Address">Your Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="mobile" placeholder="Your Mobile">
                                        <label for="mobile">Your Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="Birthday" placeholder="Your Birthday">
                                        <label for="Birthday">Your Birthday</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Birthplace" placeholder="Your Birthplace">
                                        <label for="mail">Your Birthplace</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                      <option selected>Gender</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                  </select>
                              </div>
                              <div class="col-lg-6">
                                <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                  <option selected>Civil Status</option>
                                  <option value="male">Single</option>
                                  <option value="female">Married</option>
                                  <option value="female">Widowed</option>
                              </select>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="file" class="form-control" id="lname" placeholder="Last Name" required>
                                <label for="lname">Upload Your Valid I.D</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="file" class="form-control" id="lname" placeholder="Last Name" required>
                                <label for="lname">Upload Your 2x2 Picture</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1</p>
                                <p class="font-monospace">Accepted file types:.pdf .png .jpg .jpeg</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email" placeholder="Your Email Address">
                                <label for="email">Your Email Address</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Your Password">
                                <span class="input-group-text" id="basic-addon2">
                                    <a id="togglePassword" type="button"><i class="bi bi-eye-slash" id="eyeIcon"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                         <label for="enrol">Are you Currently Enrolled ?</label><br>
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="enrol" id="yesenrol" value="yes">
                            <label class="form-check-label" for="yesenrol">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="enrol" id="noenrol" value="no">
                          <label class="form-check-label" for="noenrol">No</label>
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="School" placeholder="Your School" disabled>
                        <label for="School">School / University Name: </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="Level" placeholder="Your Level" disabled>
                        <label for="Level">Your Grade Level</label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-floating">
                        <input type="file" class="form-control" id="COR" placeholder="COR" required disabled>
                        <label for="COR">Upload Your COR</label>
                        <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1</p>
                                <p class="font-monospace">Accepted file types:.pdf .png .jpg .jpeg</p>
                    </div>
                </div>
                <div class="col-sm-12">
                 <label for="tenant">Are you a Tenant ?</label><br>
                 <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tenant" id="yestenant" value="yes">
                    <label class="form-check-label" for="yestenant">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="tenant" id="notenant" value="no">
                  <label class="form-check-label" for="notenant">No</label>
              </div>
          </div>
          <div class="col-sm-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="landlord" placeholder="Your landlord" disabled>
                <label for="landlord">Name of Landlord/Landlady: </label>
            </div>
        </div>
    </div>
</div>
<div class="col-12 wow fadeInUp" data-wow-delay="1.5s">
    <button class="btn btn-primary w-100 py-3" type="submit">Update Info</button>
</div>
</div>
</div>
</div>
</div>
<!-- update end -->
</div>   
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
                    <a class="btn btn-square btn-light rounded-circle me-2" href="barangay781.2023@gmail.com"><i
                        class="fab fa-google"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100089497350963"><i
                            class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="about.php">About Us</a>
                        <a class="btn btn-link" href="residentsreports.php">Contact Us</a>
                        <a class="btn btn-link" href="#proj">Our Projects</a>
                        <a class="btn btn-link" href="">Terms & Condition</a><!-- TBF -->
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
        </body>

        </html>