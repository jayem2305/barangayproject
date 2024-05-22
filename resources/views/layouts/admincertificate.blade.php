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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
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
   

   @yield("certificate")
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
                    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
                    <script type="text/javascript">
$(document).ready( function () {
    $('#ApprovalTable').DataTable();
    $('#ClaimTable').DataTable();
        $.ajax({
            url: "{{ route('getInfos') }}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                // Update Logo
                $('#logo').attr('src', '../barangayprorfile/'+response.logo);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
} );
</script>
<script>
    $(document).ready(function() {
        function updatePendingCount() {
            $.ajax({
                url: "{{ route('count.pending.ftj') }}",
                type: 'GET',
                success: function(response) {
                    $('#ftj_pending').text(response.count);
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
            $.ajax({
                url: "{{ route('count.pending.indigency') }}",
                type: 'GET',
                success: function(response) {
                    $('#indigency_pending').text(response.count);
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
            $.ajax({
                url: "{{ route('count.pending.cert') }}",
                type: 'GET',
                success: function(response) {
                    $('#cert_pending').text(response.count);
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
            $.ajax({
                url: "{{ route('count.pending.permit') }}",
                type: 'GET',
                success: function(response) {
                    $('#permit_pending').text(response.count);
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
            $.ajax({
                url: "{{ route('count.pending.cessation') }}",
                type: 'GET',
                success: function(response) {
                    $('#cessation_pending').text(response.count);
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
            $.ajax({
                url: "{{ route('count.pending.soloparent') }}",
                type: 'GET',
                success: function(response) {
                    $('#soloparent_pending').text(response.count);
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Call the function on page load
        updatePendingCount();
        
        // Optionally, you can call this function periodically to update the count
        // setInterval(updatePendingCount, 60000); // Refresh every minute
    $('input[type=radio][name=options-base]').change(function() {
    var type = $(this).attr('id');
    var tableId;
    var id ,name,date,address,type,purpose,phone_number,action;

     tableId = '#ApprovalTable';
    $.ajax({
        url: '/Admin/certificate/get-data/' + type,
        type: 'GET',
        success: function(response) {
            $(tableId).DataTable().clear().draw();

            $(tableId + ' tbody').empty();
            if (response.length === 0) {
            $(tableId + ' tbody').html('<tr><td colspan="8" class="text-center">No data available</td></tr>');
        } else {
            // Append new rows to the table
            $.each(response, function(index, item) {
                if(item.type == "First Time Job Seeker Oath Taking" || item.type == "First Time Job Seeker" ||item.type == "First Time Job seeker (Minor)"){
                id = "FTJ_"+formatDatecontroll(item.created_at) +"_"+item.id;
                name = item.name;
                date = formatDate(item.created_at);
                address = item.residents.address;
                type = "First-Time Job Seeker";
                purpose = item.type;
                phone_number = item.residents.cnum;
                action = "<div class='btn-group ' role='group' aria-label='Basic example'><button class='btn btn-lg btn-warning view-btn' data-control-number='" + item.id + "'><i class='bi bi-eye-fill'></i></button> " +
                 "<button class='btn btn-success btn-lg approve-btn' data-control-number='" + item.id + "'><i class='bi bi-check'></i></button> " +
                 "<button class='btn btn-danger btn-lg decline-btn' data-control-number='" + item.id + "'><i class='bi bi-x'></i></button></div>";
                }
                if(item.type == "Barangay Indigency"){
                id = "BI_"+formatDatecontroll(item.created_at) +"_"+item.id;
                name = item.name;
                date = formatDate(item.created_at);
                address = item.resident.address;
                type = item.type;
                if(item.purpose == "Others"){
                    purpose = item.otherpurpose;
                }else{
                    purpose = item.purpose;
                }
                phone_number = item.resident.cnum;
                action = "<div class='btn-group ' role='group' aria-label='Basic example'><button class='btn btn-lg btn-warning view-btn' data-control-number='" + item.id + "'><i class='bi bi-eye-fill'></i></button> " +
                 "<button class='btn btn-success btn-lg approve-btn' data-control-number='" + item.id + "'><i class='bi bi-check'></i></button> " +
                 "<button class='btn btn-danger btn-lg decline-btn' data-control-number='" + item.id + "'><i class='bi bi-x'></i></button></div>";
                }
                else if(item.type == "Barangay Certificate"){
                id = "BC_"+formatDatecontroll(item.created_at) +"_"+item.id;
                name = item.name;
                date = formatDate(item.created_at);
                address = item.resident.address;
                type = item.type;
                purpose = item.type;
                if(item.purpose == "Others"){
                    purpose = item.otherpurpose;
                }else{
                    purpose = item.purpose;
                }
                phone_number = item.resident.cnum;
                action = "<div class='btn-group ' role='group' aria-label='Basic example'><button class='btn btn-lg btn-warning view-btn' data-control-number='" + item.id + "'><i class='bi bi-eye-fill'></i></button> " +
                 "<button class='btn btn-success btn-lg approve-btn' data-control-number='" + item.id + "'><i class='bi bi-check'></i></button> " +
                 "<button class='btn btn-danger btn-lg decline-btn' data-control-number='" + item.id + "'><i class='bi bi-x'></i></button></div>";
                }
                if(item.type == "Business Permit"){
                id = "BP_"+formatDatecontroll(item.created_at) +"_"+item.id;
                name = item.name;
                date = formatDate(item.created_at);
                address = item.resident.address;
                type = item.type;
                purpose = item.type;
                phone_number = item.resident.cnum;
                action = "<div class='btn-group ' role='group' aria-label='Basic example'><button class='btn btn-lg btn-warning view-btn' data-control-number='" + item.id + "'><i class='bi bi-eye-fill'></i></button> " +
                 "<button class='btn btn-success btn-lg approve-btn' data-control-number='" + item.id + "'><i class='bi bi-check'></i></button> " +
                 "<button class='btn btn-danger btn-lg decline-btn' data-control-number='" + item.id + "'><i class='bi bi-x'></i></button></div>";
                }
                if(item.type == "Business Cessation"){
                id = "BCS_"+formatDatecontroll(item.created_at) +"_"+item.id;
                name = item.name;
                date = formatDate(item.created_at);
                address = item.resident.address;
                type = item.type;
                purpose = item.type;
                phone_number = item.resident.cnum;
                action = "<div class='btn-group ' role='group' aria-label='Basic example'><button class='btn btn-lg btn-warning view-btn' data-control-number='" + item.id + "'><i class='bi bi-eye-fill'></i></button> " +
                 "<button class='btn btn-success btn-lg approve-btn' data-control-number='" + item.id + "'><i class='bi bi-check'></i></button> " +
                 "<button class='btn btn-danger btn-lg decline-btn' data-control-number='" + item.id + "'><i class='bi bi-x'></i></button></div>";
                }
                if(item.type == "Solo Parents"){
                id = "SP_"+formatDatecontroll(item.created_at) +"_"+item.id;
                name = item.name;
                date = formatDate(item.created_at);
                address = item.resident.address;
                type = "Solo parent";
                purpose = item.type;
                phone_number = item.resident.cnum;
                action = "<div class='btn-group ' role='group' aria-label='Basic example'><button class='btn btn-lg btn-warning view-btn' data-control-number='" + item.id + "'><i class='bi bi-eye-fill'></i></button> " +
                 "<button class='btn btn-success btn-lg approve-btn' data-control-number='" + item.id + "'><i class='bi bi-check'></i></button> " +
                 "<button class='btn btn-danger btn-lg decline-btn' data-control-number='" + item.id + "'><i class='bi bi-x'></i></button></div>";
                }
                var row = $(tableId).DataTable().row.add([
                    id,
                    name,
                    date,
                    address,
                    type,
                    purpose,
                    '0' + phone_number,
                    action
                ]).draw().node();
                console.log(row);
                    // Attach event listeners to the buttons in the row
                    $(row).find('.view-btn').on('click', function() {
                        // Handle view button click
                        var controlId = $(this).data('control-number');
                        // Get the data associated with the row and populate the modal
                        // Show the modal
                        if(type == "Barangay Indigency"){
                        $('#myModal').modal('show');
                        $('#voters').val(item.voters);
                        $('#names_display').val(name);
                        $('#copy').val(item.copy);
                        $('#purpose').val(purpose);
                        $('#childdisplay_view').hide();

                        var embedTag = "<embed src='../Files_Requirements/" + item.requirements + "' type='application/pdf' width='100%' height='600px' />";
                        // Append the <embed> tag to the <div> with id "pdfViewer"
                        $("#pdfViewer").html(embedTag);
                        }
                        if(type == "Barangay Certificate"){
                        $('#myModal').modal('show');
                        $('#voters').val(item.voters);
                        $('#names_display').val(name);
                        $('#copy').val(item.copy);
                        $('#purpose').val(purpose);
                        $('#childdisplay_view').hide();

                        var embedTag = "<embed src='../Files_Requirements/" + item.requirements + "' type='application/pdf' width='100%' height='600px' />";
                        // Append the <embed> tag to the <div> with id "pdfViewer"
                        $("#pdfViewer").html(embedTag);
                        }
                        if(type == "Business Permit"){
                        $('#modalBpermit').modal('show');
                        $('#voters_permit').val(item.voters);
                        $('#names_display_permit').val(name);
                        $('#copy_permit').val(item.copy);
                        $('#bname').val(item.bname);
                        $('#baddress').val(item.baddress);
                        $('#purpose_permit').val(purpose);
                        $('#ceo_display').hide();
                        var embedTag = "<embed src='../Files_Requirements/" + item.requirements + "' type='application/pdf' width='100%' height='600px' />";
                        // Append the <embed> tag to the <div> with id "pdfViewer"
                        $("#pdfViewer_permit").html(embedTag);
                        }
                        if(type == "Business Cessation"){
                        $('#modalBpermit').modal('show');
                        $('#voters_permit').val(item.voters);
                        $('#names_display_permit').val(name);
                        $('#copy_permit').val(item.copy);
                        $('#bname').val(item.bname);
                        $('#baddress').val(item.baddress);
                        $('#purpose_permit').val(purpose);
                        $('#ceo_display').show();
                        $('#ceo').val(item.CEO);
                        var embedTag = "<embed src='../Files_Requirements/" + item.requirements + "' type='application/pdf' width='100%' height='600px' />";
                        // Append the <embed> tag to the <div> with id "pdfViewer"
                        $("#pdfViewer_permit").html(embedTag);
                        }
                        if(type == "Solo parent"){
                        $('#myModal').modal('show');
                        $('#voters').val(item.voters);
                        $('#names_display').val(name);
                        $('#copy').val(item.copy);
                        $('#purpose').val(purpose);
                        $('#childdisplay_view').show();
                       // Assuming item.children is a JSON string like '["Enrique, Jhon mark Alacapa"]'
                        // Parse it if necessary
                        var childrenArray = JSON.parse(item.children);

                        // Check if it's an array and then iterate over it
                        if (Array.isArray(childrenArray)) {
                            // Clear the existing content of the #childdisplay element
                            $('#childdisplay').empty();

                            // Iterate over the children array and create list items for each child
                            childrenArray.forEach(function(child) {
                                // Create a list item element and set its text to the child's name
                                var listItem = $('<li>').text(child);

                                // Append the list item to the #childdisplay element
                                $('#childdisplay').append(listItem);
                            });
                        } else {
                            // Handle the case where childrenArray is not an array (optional)
                            console.error('children is not an array:', childrenArray);
                        }
                        var embedTag = "<embed src='../Files_Requirements/" + item.requirements + "' type='application/pdf' width='100%' height='600px' />";
                        // Append the <embed> tag to the <div> with id "pdfViewer"
                        $("#pdfViewer").html(embedTag);
                        }
                        if(type == "First-Time Job Seeker"){
                        $('#exampleModalftjcert').modal('show');
                        $('#voters_ftj').val(item.voters);
                        $('#names_display_ftj').val(name);
                        $('#copy_ftj').val(item.copy);
                        $('#ftjtypes').val(purpose);
                        if(item.pname != null){
                            $('#minordisplay').show();
                            $('#pname').val(item.pname);
                            $('#paddress').val(item.paddress);
                            $('#page').val(item.page);
                            var parenttag = "<embed src='../Files_Requirements/" + item.parentrequirements + "' type='application/pdf' width='100%' height='600px' />";
                            $("#requirements_parents_ftj").html(parenttag);
                        }else{
                            $('#minordisplay').hide();
                        }
                        var embedTag = "<embed src='../Files_Requirements/" + item.requirements + "' type='application/pdf' width='100%' height='600px' />";
                        $("#requirements_ftj").html(embedTag);
                        }
                        console.log(type);
                    });

                    $(row).find('.approve-btn').on('click', function() {
    // Handle approve button click
    var controlId = $(this).data('control-number');
    $("#setid").val(item.id);
    $("#typeofcert").val(item.type);
    var display_item = item.type; 

    $.ajax({
        url: "{{route('approvecert')}}",
        method: 'POST',
        data: {
            email: item.email, // Change this to the actual email
            type: item.type,
            id: item.id
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        success: function(response) {
            console.log('Email notification sent successfully');
            //var controlId = $(this).data('control-number');
            $('#kagawadsignatory').modal('show');
            console.log('Approve button clicked for control number: ' + controlId);
            console.log('Type of cert: ' + item.type);
        updatePendingCount();
        // Check the type and trigger change event accordingly
            if (display_item === "First Time Job Seeker Oath Taking" || display_item === "First Time Job Seeker" || display_item === "First Time Job seeker (Minor)") {
                $('#ftj').prop('checked', true).trigger('change');
            } else if (display_item === "Barangay Indigency") {
                $('#indigency').prop('checked', true).trigger('change');
            } else if (display_item === "Barangay Certificate") {
                $('#certificate').prop('checked', true).trigger('change');
            } else if (display_item === "Business Permit") {
                $('#permits').prop('checked', true).trigger('change');
            } else if (display_item === "Business Cessation") {
                $('#cessation').prop('checked', true).trigger('change');
            } else if (display_item === "Solo Parents") {
                $('#soloparent').prop('checked', true).trigger('change');
            }

        },
        error: function(xhr, status, error) {
            console.error('Error sending email notification:', error);
            // Handle error response if needed
        }
    });
});


                  /*  $(row).find('.approve-btn').on('click', function() {
                        // Handle approve button click
                        var controlId = $(this).data('control-number');
                        // Perform necessary action
                        $("#setid").val(item.id);
                        $("#typeofcert").val(item.type);
                        $('#kagawadsignatory').modal('show');

                        //$('#kagawadsignatory').show();
                        console.log('Approve button clicked for control number: ' + controlId);
                        console.log('Type of cert: ' + item.type);
                    });*/

                    $(row).find('.decline-btn').on('click', function() {
                        // Handle decline button click
                        var controlId = $(this).data('control-number');
                        // Perform necessary action
                        var userName = $(this).data('user-name'); // Assuming you have a data attribute with the user name
                        // Populate modal with user information
                        $('#user-name').text(item.name);
                        $("#setid_decline").val(item.id);
                        $("#emaildecline").val(item.email);
                        $("#typeofcert_decline").val(item.type);
                        $("#controlnum").val(id);
                        // Show the modal
                        $('#declineModal').modal('show');
                        console.log('Decline button clicked for control number: ' + controlId);
                    });
                  
            });
            $(tableId).DataTable();
        }
        },
        error: function(xhr, status, error) {
            // Handle errors
            console.error(xhr.responseText);

        }
    });
    
});
$('.pdfconvert').on('click', function() {
    var controlId = $("#setid").val();
    var typeofcert = $("#typeofcert").val();
    var offcier = $("#official_display_solo").val();
    console.log('button clicked for control number: ' + controlId);
    
    $.ajax({
        url: '/Admin/generate-pdf',
        type: 'POST',
        data: {
            id: controlId,
            type: typeofcert,
            offcier: offcier
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // PDF generation successful, open the generated PDF in the modal
            $('#pdfFrame').attr('src', response.url);
            $('#pdfModal').modal('show');
            $('#liveToast .toast-body').text('Document Approve Successfully');
            var toastElement = new bootstrap.Toast(document.getElementById('liveToast'));
            toastElement.show();
            console.log(response);
            
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error(error);
        }
    });
});

$('.decline_request').on('click', function() {
    var controlId = $("#setid_decline").val();
    var typeofcert = $("#typeofcert_decline").val();
    var email = $("#emaildecline").val();
    var text = $("#declineReason").val();
    var controlnum = $("#controlnum").val();
    console.log('button clicked for control number: ' + controlId); 
    $.ajax({
        url: "{{route('declined')}}",
        type: 'POST',
        data: {
            id: controlId,
            type: typeofcert,
            email: email,
            text: text,
            controlnum:controlnum

        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            console.log(response);
            $('#liveToast .toast-body').text('Document Declined Successfully');
            var toastElement = new bootstrap.Toast(document.getElementById('liveToast'));
            toastElement.show();
            $('#declineModal').modal('hide');
            if (typeofcert === "First Time Job Seeker Oath Taking" || typeofcert === "First Time Job Seeker" || typeofcert === "First Time Job seeker (Minor)") {
                $('#ftj').prop('checked', true).trigger('change');
            } else if (typeofcert === "Barangay Indigency") {
                $('#indigency').prop('checked', true).trigger('change');
            } else if (typeofcert === "Barangay Certificate") {
                $('#certificate').prop('checked', true).trigger('change');
            } else if (typeofcert === "Business Permit") {
                $('#permits').prop('checked', true).trigger('change');
            } else if (typeofcert === "Business Cessation") {
                $('#cessation').prop('checked', true).trigger('change');
            } else if (typeofcert === "Solo Parents") {
                $('#soloparent').prop('checked', true).trigger('change');
            }
            console.log(typeofcert);
        updatePendingCount();


        },
        error: function(xhr, status, error) {
            // Handle error
            console.error(error);
        }
    });
});


function formatDate(dateString) {
    var date = new Date(dateString);
    var options = { year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString('en-US', options);
}
function formatDatecontroll(dateString) {
    var date = new Date(dateString);
    var month = (date.getMonth() + 1).toString().padStart(2, '0'); // Adding leading zero
    var day = date.getDate().toString().padStart(2, '0'); // Adding leading zero
    var year = date.getFullYear();
    return month + day + year;
}
    });


var selectedValue; // Define selectedValue outside of event handlers
$('#official_display_solo').change(function() {
    // Get the selected option's value and text
    selectedValue = $(this).val(); // Update the value of selectedValue
    var selectedText = $(this).find('option:selected').text();
    
    // Update the text of a separate element to display the selected option
    $('.selected_option_display_officials').text(selectedText);
});

    $('#official_display_solo').click(function() {
    $.ajax({
        url: '{{ route("related-datas") }}',
        type: 'GET',
        success: function(data) {
            // Clear existing options before populating new ones
            $('#official_display_solo').empty();
            // Add a default option
            // Check if data is not empty
            if (data.length > 0) {
                // Loop through fetched data and append options
                $.each(data, function(index, fullName) {
                    $('#official_display_solo').append($('<option>', {
                        value: fullName.name,
                        text: fullName.name
                    }));   
                });
            } else {
                console.log('No data found');
            }
            // If there's a selected value, set it as selected
            if (selectedValue) {
                $('#official_display_solo').val(selectedValue);
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});
</script>
