<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title","781 Zone 85")</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="../pic/brgy_logo.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <linkhref="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
   <style type="text/css">
#hero {
 background-repeat: no-repeat;
 animation: carousel 100s linear infinite;
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
.toast-container {
        z-index: 9999;

    }
    .circle-number-color {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        background-color: #1C2035; /* Dark background color */
        color: #fff; /* Text color */
        margin-right: 10px; /* Adjust spacing */
    }

    .circle-number {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        border: 1px solid #1C2035; /* Set border color */
        color: #1C2035; /* Text color */
        margin-right: 10px; /* Adjust spacing */
    }
    
</style>
<style>
    .valid-secondary::before {
        content: "\f05a"; /* Unicode for the Font Awesome info-circle icon */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: #0d6efd; /* Choose your desired color */
         /* Adjust spacing as needed */
    }
</style>

</head>
  <body>
   

   @yield("contentresidentAdmin")
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="../lib/wow/wow.min.js"></script>
                    <script src="../lib/easing/easing.min.js"></script>
                    <script src="../lib/waypoints/waypoints.min.js"></script>
                    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
                    <script src="../lib/lightbox/js/lightbox.min.js"></script>
                    <!-- Template Javascript -->
                    <script src="../js/main.js"></script>

                    <script>
$(document).ready(function () {
    $(document).ajaxComplete(function () {
        $('#myTable').DataTable();
    });
});

$(document).ready(function () {
    // Function to populate modal with resident details
    function populateModal(resident) {
        console.log("Resident Object:", resident.reg_number);
        var ext;

        if(resident.ext == null){
            ext = "";
        }else{
            ext = resident.ext+".";
        }
        if(resident.proof_of_owner == null){
            proof_of_owner = "empty.png";
        }else{
            proof_of_owner = resident.proof_of_owner;
        }
        if(resident.voters_filename == null){
            voters_filename = "empty.png";
        }else{
            voters_filename = resident.voters_filename;
        }
        // Populate modal content with resident details
        $('#residentDetailsModal .modal-body').html(`
        <div class="row">
            <div class="col-lg-4">
            <img src="../residentprofile/${resident.image_filename}"class="rounded-circle mx-auto d-block" alt="Profile pic" width="200" height="200" >
            <br>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 text-start"><p><strong>Contoll #:</strong> ${resident.reg_number}</p></div>
                    <div class="col-lg-6 text-end"><p><strong>Status:</strong> ${resident.status}</p></div>
                    <h1 class="text-center"> ${resident.lname}, ${resident.fname} ${resident.mname} ${ext}</h1>
                    <h3 class="text-center text-primary text-decoration-underline"> ${resident.email}</h3>
                    <h3 class="text-center"><strong> ${resident.household}</strong></h3>
                </div>    
            </div>
            <div class="col-lg-3">  <p><strong>Birthday:</strong> ${resident.birthday}</p> </div>
            <div class="col-lg-3">  <p><strong>Age:</strong> ${resident.age} Years old</p> </div>
            <div class="col-lg-3">  <p><strong>Birt Place:</strong> ${resident.Birth}</p></div>
            <div class="col-lg-3">  <p><strong>Gender:</strong> ${resident.gender}</p></div>
            <div class="col-lg-4">  <p><strong>Occupation:</strong> ${resident.occupation}</p></div>
            <div class="col-lg-4">  <p><strong>Civil Status:</strong> ${resident.civil}</p></div>
            <div class="col-lg-4">  <p><strong>Citizenship:</strong> ${resident.citizenship}</p></div>
            <div class="col-lg-4">  <p><strong>Contact Number:</strong>0${resident.cnum}</p></div>
            <div class="col-lg-4">  <p><strong>Uri ng Pag-Pagmamayari:</strong> ${resident.owner_type}</p></div>
            <div class="col-lg-4">  <p><strong>Pangalan ng May-Ari:</strong> ${resident.owner_name}</p></div>
            <div class="col-lg-6">  <p><strong>Personal Status:</strong> ${resident.indicate_if}</p></div>
            <div class="col-lg-6">  <p><strong>Number of Members of Family:</strong> ${resident.number_of_family}</p></div>
            <hr><div class="col-lg-12">  <p><strong>Valid ID:<br></strong>
            <img src="../residentprofile/${resident.valid_id_filename}"class="rounded mx-auto d-block" alt="Profile pic" width="700" height="300" ></p>
            </div>
            <div class="col-lg-6">  <p><strong>Proof of Owner:</strong> <div class="valid-secondary text-primary" style="margin-top: -1rem;">
                            If applicable
                            </div><img src="../residentprofile/${proof_of_owner}"class="rounded float-start mx-auto d-block" alt="Profile pic" width="300" height="300" ></p>
            </div>
        <div class="col-lg-6">  <p><strong>Voters Certificate:</strong> <div class="valid-secondary text-primary" style="margin-top: -1rem;">
                            If applicable
                            </div><img src="../residentprofile/${voters_filename}"class="rounded float-start mx-auto d-block" alt="Profile pic" width="300" height="300" ></p>
            </div>
        </div>
        <br>
        <div class="modal-footer">
                <button type="button" class="btn btn-success btn-accept"data-id="${resident.reg_number}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
</svg> Accept</button>
                <button type="button" class="btn btn-danger" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg> Decline</button>
                <!-- Additional buttons or actions can be added here if needed -->
            </div>
        `);
    }

    // AJAX request to fetch resident data
    $.ajax({
        url: "{{ route('residents.pendingaccount') }}",
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log("Data received:", data);
            $.each(data, function (index, resident) {
                var ext = (resident.ext == null) ? " " : resident.ext;
                $('#myTable tbody').append('<tr ><td>' + resident.reg_number + '</td> <td><img src="../residentprofile/'
                    + resident.image_filename + '"class="rounded-circle mx-auto d-block" alt="Cinque Terre" width="45" height="45" ></td><td>'
                    + resident.lname + ', ' + resident.fname + ' ' + resident.mname + ' ' + ext + '</td><td >'
                    + resident.age + '</td><td>' + resident.address + '</td><td>' + resident.gender +
                    '</td><td>' + resident.cnum + '</td><td>' + resident.status + '</td><td>' +
                    '<div class="btn-group" role="group" aria-label="Basic example"><button class="btn btn-view btn-warning btn-lg" type="button" data-id="' + resident.id + '"><i class="bi bi-eye-fill"></i></button>' +
                    '</div>' +
                    '</td></tr>');
            });
        },
        error: function (xhr, status, error) {
            console.error("Error fetching data:", error);
        }
    });

    // Click event handler for the "View" button
  // Click event handler for the "View" button
$(document).on('click', '.btn-view', function () {
    var residentId = $(this).data('id');
    
    // AJAX request to fetch resident details
    $.ajax({
        url: "{{ route('residents.accountview') }}", // Replace with the actual URL to fetch resident details
        type: "GET",
        dataType: "json",
        data: { residentId: residentId }, // Pass residentId as data
        success: function (resident) {
        console.log("Resident id:", resident);
            // Populate modal with resident details
            populateModal(resident);
            // Show the modal
            $('#residentDetailsModal').modal('show');
        },
        error: function (xhr, status, error) {
        console.log("Resident Object:", residentId);
            console.error("Error fetching resident details:", error);
            // Handle error
        }
    });
});


    // Click event handler for the "Disapprove" button
    $(document).on('click', '.btn-disapprove', function () {
        var residentId = $(this).data('id');
        // Add logic to handle disapprove action
        // Example: Send Ajax request to mark resident as disapproved
    });



    $(document).on('click', '.btn-accept', function () {
    var residentId = $(this).data('id');
   // alert(residentId);
    console.log("Resident ID:", residentId);

   // var csrfToken = $('meta[name="csrf-token"]').attr('content');
    // AJAX request to send email notification
    $.ajax({
        url: "{{ route('send.email.notification') }}",
        type: "POST",
        dataType: "json",
        headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
        data: {
            residentId: residentId
        },
        success: function (response) {
            if (response.success) {
                // Email notification sent successfully
                // You can perform additional actions here if needed
                console.log("Email notification sent successfully");
            } else {
                console.error("Error sending email notification:", response.error);
                // Handle error
            }
        },
        error: function (xhr, status, error) {
            console.error("Error sending email notification:", error);
            // Handle error
        }
    });
});

});

</script>
