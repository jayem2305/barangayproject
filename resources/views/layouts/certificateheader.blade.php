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
$(document).ready(function(){
 $('#ApprovalTable').DataTable();
 $('#ClaimTable').DataTable();
});
</script>
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

// Assuming you're using jQuery
// Ajax Call
var selectedValue; // Define selectedValue outside of event handlers

$('#names_display').change(function() {
    // Get the selected option's value and text
    selectedValue = $(this).val(); // Update the value of selectedValue
    var selectedText = $(this).find('option:selected').text();
    
    // Update the text of a separate element to display the selected option
    $('#selected_option_display').text(selectedText);
});

$('#names_display').click(function() {
    $.ajax({
        url: '{{ route("related-data") }}',
        type: 'GET',
        success: function(data) {
            // Clear existing options before populating new ones
            $('#names_display').empty();
            // Add a default option
           
            // Check if data is not empty
            if (data.length > 0) {
                // Loop through fetched data and append options
                $.each(data, function(index, fullName) {
                    $('#names_display').append($('<option>', {
                        value: fullName,
                        text: fullName
                    }));
                });
            } else {
                console.log('No data found');
            }
            // If there's a selected value, set it as selected
            if (selectedValue) {
                $('#names_display').val(selectedValue);
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});





$('.upload-indigency').click(function (e) {
    e.preventDefault();
    var voters = $('#voters').val();
    var name = $('#names_display').val();
    var copy = $('#copy').val();
    var purpose = $('#purpose').val();
    var otherpurpose = $('#otherpurpose').val();
    var fileInput = $('#requirements')[0].files[0];
    var formData = new FormData(); // Assuming your form is within the #exampleModal modal
    formData.append('voters', voters);
    formData.append('name', name);
    formData.append('copy', copy);
    formData.append('requirements', fileInput);
    formData.append('purpose', purpose);
    formData.append('otherpurpose', otherpurpose);
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: '{{ route("submit.indigency.request") }}',
        type: 'POST',
        data: formData,
        headers: {
        'X-CSRF-TOKEN': csrfToken
    },
        contentType: false,
        processData: false,
        success: function (response) {
            console.log(response);
            // Handle success response
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseJSON);
            // Handle error response
        }
    });
});

        </script>