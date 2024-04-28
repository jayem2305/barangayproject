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
   

   @yield("contentresidentlistAdmin")
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
 $(document).ready(function() {
        $.ajax({
            url:"{{ route('admin.residents') }}",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#residences_num').text(data.totalResidences);
                $('#senior_num').text(data.totalSeniors);
                $('#minor_num').text(data.totalMinors);
                $('#male_num').text(data.totalMales);
                $('#female_num').text(data.totalFemales);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });


                        $(document).ready(function () {
                            $(document).ajaxComplete(function () {
                                $('#myTable').DataTable();
                            });
                        });
                        $(document).ready(function () {
                            $(document).ajaxComplete(function () {
                                $('#myOfficials').DataTable();
                            });
                        });


                      
    $(document).ready(function() {
        function showToast(message) {
    // Set the message content
    $('#liveToast .toast-body').text(message);
    // Show the toast
    $('.toast').toast('show');
}
    var table = $('#myTable').DataTable();
    var ext;
   
    function showModal(residentName) {
        $('#restrictionModal').modal('show');
        $('#residentName').text(residentName);
    }
    // Make AJAX request to fetch resident data
    function updateTableData() {
    $.ajax({
        url: "{{ route('admin.getresident') }}",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Clear existing table rows
            table.clear().draw();
            // Populate table body with resident data
            $.each(data, function(index, resident) {
                if(resident.ext == null){
                ext = "";
            }else{
                ext = resident.ext;
            }
            var restrictBtn = '<button type="button" class="btn btn-danger btn-lg btn-restrict"data-toggle="modal" data-target="#restrictionModal" data-reg='+resident.reg_number +'>Restrict</button>';
            var viewBtn = '<input type="hidden" value="'+resident.reg_number +'" id="viewbtnid"><button type="button" class="btn btn-warning btn-lg btn-view"><i class="bi bi-eye-fill"></i></button>'+ restrictBtn;
            // Check if status is "Restricted", if yes, render different buttons
            if (resident.status === 'Restricted') {
                viewBtn = '<input type="hidden" value="'+resident.reg_number +
                '" id="unrestricted"><button type="button" class="btn btn-warning btn-lg btn-unrestrict" ><span id="unrestrictbtn">Unrestrict</span><div class="spinner-border"style="display: none;" role="status"><span class="visually-hidden" >Loading...</span></div></button>';
            }

            table.row.add([
                   "<img src=../residentprofile/" + resident.image_filename + " class='rounded-circle mx-auto d-block' alt='...' width=50 heght=50>",
                    resident.lname + ", " + resident.fname + " "+ resident.mname + " " +ext,
                    resident.household,
                    resident.address,
                    resident.gender,
                    viewBtn
                ]).draw();
            });
            
            // Add click event listener to the "Restrict" button
            $('#myTable tbody').on('click', '.btn-restrict', function() {
                var rowData = table.row($(this).parents('tr')).data();
                var residentName = rowData[0]; // Get resident name from the clicked row
                var regNumber = $(this).data('reg');
                 $('#regid').val(regNumber);
                showModal(residentName);
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}
$('#myTable tbody').on('click', '.btn-unrestrict', function() {
    var regNumbers = $('#unrestricted').val();
    $(this).find('#unrestrictbtn').hide();
    $(this).find('.spinner-border').show();
     // Assuming registration number is in the second column

    // Perform AJAX request to update the status
    $.ajax({
        url: '{{ route("admin.updatestatus") }}',
        type: 'POST',
        data: {
            regNumbers: regNumbers,
            status: 'Unrestricted'
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Handle success response
            console.log("Status updated successfully:", response);
            $('#restrictionModal').modal('hide');
            $('#restrict').find('#spinner').hide();
            // Refresh table data
            updateTableData();
            showToast('Account Unrestrict successfully');
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error("Error updating status:", error);
        }
    });
});
    //fetchResidentData();
    // Handle click event for the "Restrict" button in the modal
$('#btnRestrict').click(function() {
    var reason = $('#restrictionReason').val();
    var regNumber  = $('#regid').val(); // Assuming you have a hidden input for registration number
    // Perform AJAX request to send data to Laravel route
    $(this).find('#restrict').hide();
    $(this).find('.spinner-border').show();
    $.ajax({
        url: '{{ route("save.restriction") }}',
        type: 'POST',
        data: {
            name: "Barangay 781 Zone 85",
            regNumber: regNumber,
            reason: reason
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Handle success response
            console.log("Data saved successfully:", response);
            // Close the modal
            $('#restrictionModal').modal('hide');
            $('#restrict').find('#spinner').hide();
            $('#residentDetailsModal').modal('hide');
            updateTableData();
            showToast('Account Restricted successfully');
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error("Error saving data:", error);
            // Close the modal
            $('#restrict').find('#spinner').hide();
            $('#residentDetailsModal').modal('hide');
            $('#restrictionModal').modal('hide');
        }
    });
});
// Add click event listener to the "View" button
$('#myTable tbody').on('click', '.btn-view', function() {
    var rowData = table.row($(this).parents('tr')).data(); // Assuming resident data is in the first column
    var regNumber = $('#viewbtnid').val();
    $.ajax({
        url: '{{ route("admin.getResidentsview") }}',
        type: 'POST',
        data: {
            regNumber: regNumber
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(resident) {
            // Populate modal with resident details
            populateModal(resident);
            // Show the modal
            $('#residentDetailsModal').modal('show');
        },
        error: function(xhr, status, error) {
            console.error("Error fetching resident details:", error);
        }
    });
});


// Function to populate modal with resident details
function populateModal(resident) {
    var regNumber = $('#viewbtnid').val();
    console.log("Resident Object:", resident.reg_number);
    var ext;

    if (resident.ext == null) {
        ext = "";
    } else {
        ext = resident.ext + ".";
    }
    if (resident.proof_of_owner == null) {
        proof_of_owner = "empty.png";
    } else {
        proof_of_owner = resident.proof_of_owner;
    }
    if (resident.voters_filename == null) {
        voters_filename = "empty.png";
    } else {
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
        `);
}

updateTableData();
});

$(document).ready(function() {
    $('.btn-confirm-primary').click(function() {
        var name = $('#name').val();
        var position = $('#position').val();
        var profile = $('#profile')[0].files[0];
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var formData = new FormData();
        formData.append('_token', csrfToken);
        formData.append('name', name);
        formData.append('position', position);
        formData.append('profile', profile);

        $.ajax({
            url: "{{ route('official.add') }}", // Update this to match your route URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle success response
                console.log('Data added successfully');
                // Clear any previous error messages
                $('#liveToast').removeClass('text-bg-danger').addClass('text-bg-success');
                $('#liveToast strong').removeClass('text-danger').addClass('text-success').html('<i class="bi bi-check-circle"></i> Valid Official');
                $('.toast-body').text("Data added successfully");
                    var toast = new bootstrap.Toast($('#liveToast'));
                    toast.show();
                    fetchAndPopulateOfficials();
            },
            error: function(xhr, status, error) {
                console.error('An error occurred:', error);
                // Display error message to the user
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        var errorElement = $('#error-' + key);
                        errorElement.text(value[0]).show(); // Display error message
                    });
                } else {
                    // If condition is not followed, display toast message
                    var errorMessage = xhr.responseJSON && xhr.responseJSON.error ? xhr.responseJSON.error : 'An error occurred while processing the request';
                    $('.toast-body').text(errorMessage);
                    $('#liveToast').removeClass('text-bg-success').addClass('text-bg-danger');
                    $('#liveToast strong').removeClass('text-success').addClass('text-danger').html('<i class="bi bi-check-circle"></i> Invalid Official');
                    var toast = new bootstrap.Toast($('#liveToast'));
                    toast.show();
                }
            }
        });
    });
    // Function to fetch officials and populate the table
    function fetchAndPopulateOfficials() {
    $.ajax({
        url: "{{ route('officials.index') }}", // Update with your route to fetch officials
        type: 'GET',
        success: function(response) {
            // Clear existing rows
            $('#myOfficials').DataTable().clear().draw();

            // Append rows for each official
            response.forEach(function(official) {
                var createdAtString = official.created_at;
                var createdAtDate = new Date(createdAtString);

                // Format the date and time
                var formattedDate = formatDate(createdAtDate);

                // Function to format date
                function formatDate(date) {
                    var options = {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: 'numeric',
                        minute: 'numeric',
                        second: 'numeric',
                        hour12: true // Use 12-hour clock
                    };
                    return date.toLocaleDateString('en-US', options);
                }

                // Set the button text and class based on the official's status
                var viewBtn;
                if (official.status === 'Archive') {
                    viewBtn = '<button class="btn btn-lg btn-warning restore-official" data-id="' + official.id + '">Restore</button>';
                } else {
                    viewBtn = '<button class="btn btn-lg btn-danger delete-official" data-id="' + official.id + '">Archive</button>';
                }

                // Construct the new row data
                var rowData = [
                    '<img src="../residentprofile/' + official.profile_path + '" alt="' + official.profile_path + '" width="50" class="rounded-circle mx-auto d-block">',
                    official.name,
                    official.position,
                    formattedDate,
                    viewBtn
                ];

                // Add the new row to the DataTable instance
                $('#myOfficials').DataTable().row.add(rowData).draw();
            });
        },
        error: function(xhr, status, error) {
            console.error('An error occurred while fetching officials:', error);
        }
    });
}



// Call fetchAndPopulateOfficials initially to populate the list
fetchAndPopulateOfficials();

// Add click event listener to the "Archive" button
$(document).on('click', '.restore-official', function() {
    var officialId = $(this).data('id');
    var button = $(this);
        // Perform AJAX request to update the status to "Archive"
        $.ajax({
            url: "{{ route('official.updateStatus') }}", // Update the URL with your route
            type: 'POST',
            data: {
                id: officialId,
                status: 'active'
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response
                fetchAndPopulateOfficials();
                console.log("Official Member Restore successfully!");
                //alert("Official Member Archived successfully!");
                // You may need to reload the page or update the UI accordingly
                //fetchAndPopulateOfficials();
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error("Error Restoring official:", error);
                alert("Error Restoring official. Please try again later.");
            }
        });
    
});
$(document).on('click', '.delete-official', function() {
    var officialId = $(this).data('id');
    var button = $(this);
    // Confirm if user wants to archive the official
    if (confirm("Are you sure you want to archive this official?")) {
        // Perform AJAX request to update the status to "Archive"
        $.ajax({
            url: "{{ route('official.updateStatus') }}", // Update the URL with your route
            type: 'POST',
            data: {
                id: officialId,
                status: 'Archive'
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response
                console.log("Official Member Archived successfully!");
                // You may need to reload the page or update the UI accordingly
                fetchAndPopulateOfficials(response);
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error("Error archiving official:", error);
                alert("Error archiving official. Please try again later.");
            }
        });
    }
    
});
$(document).on('click', '.archive-all-officials', function() {
    if (confirm("Are you sure you want to archive All the officials?")) {
    $.ajax({
        url: "{{ route('officials.archiveAll') }}",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Success message or any other action after archiving all officials
            console.log('All official members archived successfully');
            // Update the officials list after archiving all officials
            fetchAndPopulateOfficials();
        },
        error: function(xhr, status, error) {
            console.error('An error occurred while archiving all officials:', error);
            // Handle error scenario
        }
    });
}
});

});

    
</script>