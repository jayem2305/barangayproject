@extends("layouts.default")
@section("title","Barangay 781 Zone 85")
@section("content")
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
                    <a href="register" class="nav-item nav-link text-primary"><i class="bi bi-person-fill"></i> Create an Account</a>
                    <a href="aboutus" class="nav-item nav-link text-white"><i class="bi bi-info-circle"></i> About us </i></a>
                    <a href="login" class="nav-item nav-link text-white"><i class="bi bi-door-open-fill"></i> Login</a>
                </div>
            </div>
        </nav>
    </div>
<div class="container-fluid px-0 mb-5">
    <section id="hero" class="d-flex align-items-center" style=" max-width: 100%;
    height: auto;
    height: calc(50vh - 50px);
    background: linear-gradient(to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, .5) 100%, #000 100%), url('../pic/whole.png');
    background-size: cover;
    opacity: .8;
    position: relative;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
    <h1 class="text-center text-white text-uppercase"style="font-size: 5rem;">Create An <br>Account</h1>
    </div>
</section>
</div>
<!-- registration Start -->
<div class="container-fluid py-5" style="margin-top: -5rem;">
    <div class="container-fluid" id="step1" style="display: block;">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">  
                <h2 class="mb-4"><i class="bi bi-person-fill"></i>Create an Account </h2>
                <div class="row" style="margin-left:6rem;">
                <div class="col-lg-4">
                 <h5><span class="circle-number-color">1</span>Head of the Family Information<i class="bi bi-caret-right-fill"></i></h5>
             </div>
             <div class="col-lg-4" >
                 <h5><span class="circle-number">2</span>House Hold Information <i class="bi bi-caret-right-fill"></i></h5>
             </div>
             <div class="col-lg-4" >
                 <h5><span class="circle-number">3</span>Upload your Valid ID’s </h5>
             </div>
         </div>
         <hr>
         @if(session()->has("success"))
         <div class="alert alert-success">
            {{session()->get("success")}}
         </div>
         @endif
         @if(session()->has("error"))
         <div class="alert alert-danger">
            {{session()->get("error")}}
         </div>
         @endif
                <div class="row g-3">
                    <div role="alert" id="opTag"></div>
                    <div class="col-lg-3">
                    <label for="formGroupExampleInput" class="form-label">Last Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg" id="lname" placeholder="Last Name" name="lname"  autofocus>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">First Name<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg" id="fname" placeholder="First Name" name="fname" >
                            </div>
                            @error('fname')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <label for="formGroupExampleInput" class="form-label">Middle Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg " id="mname" placeholder="Middle Name" name="mname"  >
                        </div>
                        <div class="valid-secondary text-primary" style="margin-top: -1rem;">
                        If applicable
                            </div>
                    </div>
                    <div class="col-lg-2">
                    <label for="formGroupExampleInput" class="form-label">Ext. Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg" id="ext" placeholder="Extension" name="ext"  >
                            </div>
                            <div class="valid-secondary text-primary" style="margin-top: -1rem;">
                            If applicable
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Comeplete Address<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg" id="address" placeholder="Comeplete Address" name="address" >
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Relation to family</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg" id="household" name="household" value="Head of The Family" disabled>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Place of Birth<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg" id="Birth" placeholder="Place of Birth" name="Birth" >
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Date of Birth<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control form-control-lg" id="birthday" placeholder="Date of Birth" name="birthday" max="2009-12-31" >
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Age<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control form-control-lg" id="age" placeholder="Age" name="age" min="15" >
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Phone Number<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">+639</span>
                                <input type="tel" class="form-control form-control-lg" id="cnum" placeholder="xx-xxx-xxxx" name="cnum"pattern="[0-9]{2}-[0-9]{3}-[0-9]{4}" maxlength="11" >
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Sex<span class="text-danger">*</span></label>
                            <select class="form-select form-select-lg mb-3 " aria-label="Large select example" name="gender" id="gender">
                                <option selected disabled value="">------</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Civil Status<span class="text-danger">*</span></label>
                            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="civil" id="civil">
                                <option selected disabled value="">------</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Citizenship<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg" id="citizenship" placeholder="Citizenship" name="citizenship" >
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                            <label for="formGroupExampleInput" class="form-label">Occupation<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg" id="occupation" placeholder="Occupation" name="occupation" >
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                    <label for="formGroupExampleInput" class="form-label text-primary"><b>Indicate if: <span class="text-danger">*</span></label>
                   <div style="display: none;" class="alert-danger_message">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2"  width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
        Please select at least one option from the checkboxes.
    </div>
</div>
</div>

                    <div class="row">
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Employed" id="employed" name="employed" >
                                    <label class="form-check-label" for="employed">
                                        Labor / Employed
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Unemployed" id="unemployed" name="unemployed">
                                    <label class="form-check-label" for="Unemployed">
                                        Unemployed
                                    </label>
                                </div>
                            </div> 
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="PWD" id="PWD" name="PWD">
                                    <label class="form-check-label" for="PWD">
                                       PWD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="OFW" id="OFW"name="OFW">
                                    <label class="form-check-label" for="OFW">
                                        OFW
                                    </label>
                                </div>
                            </div> 
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Solo Parent" id="soloparent" name="soloparent">
                                    <label class="form-check-label" for="soloparent">
                                       Solo Parent
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Out of School Youth (OSY)" id="OSY" name="OSY">
                                    <label class="form-check-label" for="OSY">
                                        Out of School Youth (OSY)
                                    </label>
                                </div>
                            </div> 
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Student" id="student" name="student">
                                    <label class="form-check-label" for="student">
                                    Student
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Out of School Children (OSC)" id="OSC" name="OSC">
                                    <label class="form-check-label" for="OSC">
                                        Out of School Children (OSC)
                                    </label>
                                </div>
                            </div> 
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-6">
                    <label for="formGroupExampleInput" class="form-label">Email<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Email" name="email"  >
                            </div>
                    </div>
                    <div class="col-lg-6">
                    <label for="formGroupExampleInput" class="form-label">Password<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password" oninput="updatePasswordRequirements()">
                            <span class="input-group-text" id="basic-addon2">
                                <a id="togglePassword" type="button"><i class="bi bi-eye-slash" id="eyeIcon"></i></a>
                            </span>
                            </div>
                            <div class="text-primary" style="margin-top: -1rem;" id="charac">
                            <b><i class="bi bi-emoji-smile-fill" id="eigth_id"></i></b> Must Have 8 Characters long.
                            </div>
                            <div class="text-primary" style="margin-top: -.3rem;" id="cap">
                            <b><i class="bi bi-emoji-smile-fill"id="cap_id"></i></b> Atleast 1 Capital Letter
                            </div>
                            <div class="text-primary" style="margin-top: -.2rem;"id="num">
                            <b><i class="bi bi-emoji-smile-fill" id="num_id"></i></b> Atleast 1 Number
                            </div>
                            <div class=" text-primary" style="margin-top: -.1rem;"id="spec">
                            <b><i class="bi bi-emoji-smile-fill" id="char_id"></i></b> Atleast 1 Special Character [@_><,.?..]
                            </div>

                    </div>
                </div>
                <script>
                    function updatePasswordRequirements() {
    var pass = document.getElementById('password').value;
    var Characters = document.getElementById('charac');
    var passwordRequirements = document.getElementById('cap');
    var numRequirements = document.getElementById('num');
    var cspecRequirements = document.getElementById('spec');
                                // Define the password requirements
    var hasMinLength = pass.length >= 8;
    var hasUppercase = /[A-Z]/.test(pass);
    var hasNumber = /\d/.test(pass);
    var hasSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(pass);

                                // Update the display based on the requirements
    //passwordRequirements.innerHTML = "Password must have at least 1 Capital Letter";
   if (hasUppercase) {
            $('#cap').removeClass('text-danger').addClass('text-success');
            $('#cap_id').removeClass('bi bi-emoji-frown-fill').addClass('bi bi-emoji-laughing-fill');
            $('#cap_id').removeClass('bi bi-emoji-smile-fill');
        } else {
            $('#cap').removeClass('text-success').addClass('text-danger');
            $('#cap_id').removeClass('bi bi-emoji-laughing-fill').removeClass('bi-emoji-smile-fill').addClass('bi bi-emoji-frown-fill');
        }
 // Characters.innerHTML = "Password Must Have 8 Characters long.";
  //numRequirements.innerHTML = "Password must have at least 1 Number.";
    if (hasMinLength) {
        $('#charac').removeClass('text-danger').addClass('text-success');
        $('#eigth_id').removeClass('bi bi-emoji-frown-fill').addClass('bi bi-emoji-laughing-fill');
            $('#eigth_id').removeClass('bi bi-emoji-smile-fill');
        } else {
            $('#charac').removeClass('text-success').addClass('text-danger');
            $('#eigth_id').removeClass('bi bi-emoji-laughing-fill').removeClass('bi-emoji-smile-fill').addClass('bi bi-emoji-frown-fill');
        }
 
    if (hasNumber) {
        $('#num').removeClass('text-danger').addClass('text-success');
        $('#num_id').removeClass('bi bi-emoji-frown-fill').addClass('bi bi-emoji-laughing-fill');
            $('#num_id').removeClass('bi bi-emoji-smile-fill');
        } else {
            $('#num').removeClass('text-success').addClass('text-danger');
            $('#num_id').removeClass('bi bi-emoji-laughing-fill').removeClass('bi-emoji-smile-fill').addClass('bi bi-emoji-frown-fill');
        }
  //cspecRequirements.innerHTML = "Password must have at least 1 Special Character.";
    if (hasSpecialChar) {
        $('#spec').removeClass('text-danger').addClass('text-success');
        $('#char_id').removeClass('bi bi-emoji-frown-fill').addClass('bi bi-emoji-laughing-fill');
            $('#char_id').removeClass('bi bi-emoji-smile-fill');
        } else {
            $('#spec').removeClass('text-success').addClass('text-danger');
            $('#char_id').removeClass('bi bi-emoji-laughing-fill').removeClass('bi-emoji-smile-fill').addClass('bi bi-emoji-frown-fill');
        }
}
</script>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary firststep-btn" type="submit" 
data-lname="lname"
data-fname="fname"
data-mname="mname"
data-ext="ext"
data-address="address"
data-household="household"
data-Birth="Birth"
data-birthday="birthday"
data-age="age"
data-cnum="cnum"
data-gender="gender"
data-civil="civil"
data-citizenship="citizenship"
data-occupation="occupation"
data-employed="#employed"
data-unemployed="#unemployed"
data-PWD="#PWD"
data-OFW="#OFW"
data-soloparent="#soloparent"
data-OSY="#OSY"
data-student="#student"
data-OSC="#OSC"
data-email="email"
data-password="password" name="firststep"> <span class="next-text ">Next</span>
    <i class="bi bi-arrow-right-circle "></i> <div class="spinner-border text-light d-none" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</i></button>
</div>
               </div>
           </div>
       </div>
   </div>
<div class="container-fluid" id="step2" style="display: none;">
    <div class="row g-5">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">  
            <h2 class="mb-4"><i class="bi bi-person-fill"></i>Create an Account </h2>
            <div class="row" style="margin-left:6rem;">
                <div class="col-lg-4 col-xs-4">
                    <h5><span class="circle-number-color">1</span>Head of the Family Information<i class="bi bi-caret-right-fill"></i></h5>
                </div>
                <div class="col-lg-4 col-xs-4" >
                    <h5><span class="circle-number-color">2</span>House Hold Information <i class="bi bi-caret-right-fill"></i></h5>
                </div>
                <div class="col-lg-4 col-xs-4" >
                    <h5><span class="circle-number">3</span>Upload your Valid ID’s </h5>
                </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-lg-4">
      <label for="mail">Uri ng pagmamay-ari<span class="text-danger">*</span></label>
        <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="owner" id="owner">
          <option selected disabled value=" ">-----</option>
          <option value="May-Ari">May-Ari</option>
          <option value="Nangungupahan">Nangungupahan</option>
          <option value="Nakatira sa may Ari">Nakatira sa may Ari</option>
          <option value="Nakikitira sa Nangungupahan">Nakikitira sa Nangungupahan</option>
          <option value="Informal Settler">Informal Settler</option>
      </select>
  </div>
  <div class="col-lg-4">
  <label for="ownername">Pangalan ng May-ari<span class="text-danger">*</span></label>
    <div class="input-group mb-3">
        <input class="form-control form-control-lg" type="text" placeholder="Pangalan ng May-ari" name="ownername" id="ownername" >
    </div>
</div>
<div class="col-lg-4">
<label for="proofofowner">letter ng May-ari<span class="text-danger">*</span> </label>
    <div class="input-group mb-3">
        <input class="form-control form-control-lg" type="file" placeholder="letter ng May-ari"name="proofofowner" id="proofofowner" >
    </div>
</div>
<div class="col-lg-6">
<label for="numberoffam">No. of HouseHold Members<span class="text-danger">*</span></label>
    <div class="input-group mb-3">
        <input class="form-control form-control-lg" type="number" placeholder="Number of Household Member"name="numberoffam" id="numberoffam" min="0" value="0" >
    </div>
    <div class="valid-secondary text-primary" style="margin-top: -1rem;">
    Head of the family is Excluded here.
</div>
</div>

            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary " type="button" onclick="prevStep(1)"><i class="bi bi-arrow-left-circle "></i> <span class="previous-text " >Previous</span>
     <div class="spinner-border text-light d-none" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</i></button>
  <button class="btn btn-primary secondstep-btn" type="button"
  data-owner = "owner"
  data-ownername = "ownername"
  data-proofofowner = "proofofowner"
  data-numberoffam = "numberoffam"> <span class="next-text ">Next</span>
    <i class="bi bi-arrow-right-circle "></i> <div class="spinner-border text-light d-none" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</i></button>
</div>
    </div>
</div>
<!-- Step 3: Upload Valid IDs -->
<div class="step" id="step3" style="display: none;">
<h2 class="mb-4"><i class="bi bi-person-fill"></i>Create an Account </h2>
    <div class="row" style="margin-left:5rem;">
    <div class="col-lg-4 col-xs-4">
        <h5><span class="circle-number-color">1</span>Head of the Family Information<i class="bi bi-caret-right-fill"></i></h5>
    </div>
    <div class="col-lg-3 col-xs-4" >
        <h5><span class="circle-number-color">2</span>House hold Information <i class="bi bi-caret-right-fill"></i></h5>
    </div>
    <div class="col-lg-5 col-xs-4" >
        <h5><span class="circle-number-color">3</span>Upload your Valid ID’s </h5>
    </div>
 </div>
<hr>

<div class="row">
  <div class="col-lg-4 ">
    <div class="alert alert-primary d-flex align-items-center overflow-auto"  role="alert" style="max-height: 31.5rem;">
  <div>
  <img src="../pic/votersid.png"  class="img-thumbnail" style="width: 20rem; margin-top:20rem;">
  <hr>
    <ul>
        <li>Follow The Example Image Above</li>
        <li>Maximum file size: 50 MB, maximum number of files: 1</li>
        <li>Accepted file types: .png .jpg .jpeg</li>
    </ul>
    <br>
    <br>
</div>
</div>
    <div class="form-floating">
        <input type="file" class="form-control" id="voterscert" name="voterscert" >
        <label for="voterscert">Voters Certificate:</label>
    </div>
</div>
  <div class="col-lg-4" >
    <div class="alert alert-primary d-flex align-items-center" role="alert">
  <div>
  <img src="../pic/id.png" width="300" class="img-thumbnail" style="width: 40rem;">
  <hr>
    <ul>
        <li>Follow The Example Image Above</li>
        <li>Maximum file size: 50 MB, maximum number of files: 1</li>
        <li>Accepted file types: .png .jpg .jpeg</li>
        <li>Capture only the front of ID that contains: Your Picture,Name and Address </li>
    </ul>
</div>
</div>
    <div class="form-floating">
        <input type="file" class="form-control" id="idv"  name="idv">
        <label for="idv">Upload Your Valid I.D</label>
    </div>
</div>
<div class="col-lg-4">
    <div class="alert alert-primary d-flex align-items-center" role="alert">
  <div>
  <img src="../pic/2x2.png" width="400" class="img-thumbnail" style="height: 17rem;">
  <hr>
    <ul>
        <li>Follow The Example Image Above</li>
        <li>Maximum file size: 50 MB, maximum number of files: 1</li>
        <li>Accepted file types: .png .jpg .jpeg</li>
    </ul>
    <br>
    <br>
</div>
</div>
    <div class="form-floating">
        <input type="file" class="form-control" id="pic" name="pic">
        <label for="pic">Upload Your 2x2 Picture</label>
    </div>
</div>

</div>
<br>
<div style="float:right;">
<button class="btn btn-primary " type="button" onclick="prevStep(2)"><i class="bi bi-arrow-left-circle "></i> <span class="previous-text " >Previous</span>
     <div class="spinner-border text-light d-none" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</i></button>
    <button class="btn btn-primary laststep-btn" type="submit" id="registerButton" name="start"
    data-lname="lname"
    data-fname="fname"
    data-mname="mname"
    data-address="address"
    data-mobile="mobile"
    data-bday="bday"
    data-age="age"
    data-gender="gender"
    data-civil="civil"
    data-educ="educ"
    data-prof="prof"
    data-place="place"
    data-local="local"
    data-religion="religion"
    data-relation="relation"
    data-email="email"
    data-password="pass"
    data-senior="senior"
    data-solo="solo"
    data-lgbt="lgbt"
    data-voter="voter"
    data-feed="feed"
    data-preg="preg"
    data-pwd="pwd"
    data-kind="kind"
    data-materials="materials"
    data-owner="owner"
    data-nameowner="nameowner"
    data-elect="elect"
    data-water="water"
    data-waste="waste"
    data-wasteother="wasteother"
    data-cr="cr"
    data-valid="valid"
    data-twobytwo="twobytwo"
    data-votersCertificate="votersCertificate"
    ><span class="next-text ">Create Account</span>
    <i class="bi bi-arrow-right-circle "></i> <div class="spinner-border text-light d-none" role="status">
  <span class="visually-hidden">Loading...</span></button>
</div>
</div>
</div>
<!-- Footer Start -->
<div class="container-fluid footer mt-5 py-5 wow fadeIn text-light"style="background-color: #1C2035;" data-wow-delay="0.1s">
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
            </div>
        </div>
    </div>
</div>
<div class="modal fade bg-primay" id="exampleModal"data-bs-backdrop="static" data-bs-keyboard="false"tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl alert-success">
        <div class="alert alert-success" role="alert">
         <h3 class="text-success" style="text-align: center;">The account had been successfully handed to the administrator.</h3>
         <h1  class="text-danger" style="text-align: center;">Account Control Number: <i><span id="controlNumber"></span></i></h1>
         <p class="text-success">Your patience is greatly appreciated, as we process your account within 3-5 business days. Will subsequently email it to your provided email address. We regret any cause of inconvenience this might cause to you, but we assure that care will be implemented while under queue. Thank you</p>
         <div class="modal-content bg-transparent" style="border: none;">
           <div style="margin-left:31rem">
            <a href="login" class="btn btn-success">Close</a>
        </div>
    </div>
</div>
</div>
</div>

@endsection