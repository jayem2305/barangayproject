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
   

   @yield("content")
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="../lib/wow/wow.min.js"></script>
                    <script src="../lib/easing/easing.min.js"></script>
                    <script src="../lib/waypoints/waypoints.min.js"></script>
                    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
                    <script src="../lib/lightbox/js/lightbox.min.js"></script>

                    <!-- Template Javascript -->
                    <script src="../js/main.js"></script>
   
   <script type="text/javascript">
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
                     // Get references to the input fields
                    const birthdayInput = document.getElementById('birthday');
                    const ageInput = document.getElementById('age');
                    const age_member = document.getElementById('age_member');
                    const bday_member = document.getElementById('bday_member');

                    // Add event listener to the birthday input
                    birthdayInput.addEventListener('change', function() {
                        // Get the selected birthday value
                        const selectedDate = new Date(this.value);
                        const today = new Date();

                        // Calculate the age
                        let age = today.getFullYear() - selectedDate.getFullYear();
                        const monthDiff = today.getMonth() - selectedDate.getMonth();
                        
                        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < selectedDate.getDate())) {
                            age--;
                        }

                        // Update the age input value
                        ageInput.value = age;
                    });
                    bday_member.addEventListener('change', function() {
                        // Get the selected birthday value
                        const selectedDate = new Date(this.value);
                        const today = new Date();

                        // Calculate the age
                        let age_members = today.getFullYear() - selectedDate.getFullYear();
                        const monthDiff = today.getMonth() - selectedDate.getMonth();
                        
                        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < selectedDate.getDate())) {
                            age_members--;
                        }

                        // Update the age input value
                        age_member.value = age_members;
                    });
                    const mobileInput = document.getElementById('cnum');

                    // Add an event listener to show the format hint
                    mobileInput.addEventListener('input', function () {
                        // Format the input value
                        let formattedValue = this.value.replace(/\D/g, ''); // Remove non-digit characters

                        // Check if the input is empty after formatting
                        if (formattedValue === '') {
                            // Set the input value as empty
                            this.value = '';
                        } else {
                            // Apply formatting as 2-3-4 pattern
                            if (formattedValue.length > 2 && formattedValue.length <= 5) {
                                formattedValue = formattedValue.substring(0, 2) + '-' + formattedValue.substring(2);
                            } else if (formattedValue.length > 5) {
                                formattedValue = formattedValue.substring(0, 2) + '-' + formattedValue.substring(2, 5) + '-' + formattedValue.substring(5, 9);
                            }

                            // Update the input value with the formatted value
                            this.value = formattedValue;
                        }
                    });

                    </script>
                    <script>
        var step = 1;
    $(document).ready(function(){
        $(document).on('click', '.firststep-btn', function () {
    var button = $(this);
    var spinner = button.find('.spinner-border');
    var nextText = button.find('.next-text');
    var previousText = button.find('.previous-text');
    var arrowIcon = button.find('.bi-arrow-right-circle');
    // Hide "Next" text and arrow icon
    nextText.addClass('d-none');
    arrowIcon.addClass('d-none');
    previousText.addClass('d-none');
    // Show the spinner
    spinner.removeClass('d-none');
    var lname = $('#lname').val();
    var fname = $('#fname').val();
    var mname = $('#mname').val();
    var ext = $('#ext').val();
    var address = $('#address').val();
    var household = $('#household').val();
    var Birth = $('#Birth').val();
    var birthday = $('#birthday').val();
    var age = $('#age').val();
    var cnum = $('#cnum').val();
    var gender = $('#gender').val();
    var civil = $('#civil').val();
    var citizenship = $('#citizenship').val();
    var occupation = $('#occupation').val();
    var employed = $('#employed').val();
    var unemployed = $('#unemployed').val();
    var PWD = $('#PWD').val();
    var OFW = $('#OFW').val();
    var soloparent = $('#soloparent').val();
    var OSY = $('#OSY').val();
    var student = $('#student').val();
    var OSC = $('#OSC').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var formData = new FormData();
    formData.append('firstsetp', 'firstsetp');
    formData.append('lname', lname);
    formData.append('fname', fname);
    formData.append('mname', mname);
    formData.append('ext', ext);
    formData.append('address', address);
    formData.append('household', household);
    formData.append('Birth', Birth);
    formData.append('birthday', birthday);
    formData.append('age', age);
    formData.append('cnum', cnum);
    formData.append('gender', gender);
    formData.append('civil', civil);
    formData.append('citizenship', citizenship);
    formData.append('occupation', occupation);
    formData.append('email', email);
    formData.append('password', password);
    
    // Get all form data
    $('#step1').find('input, select, textarea').each(function() {
        formData.append($(this).attr('name'), $(this).val());
    });
    // Check if any required fields are empty
    var requiredFields = ['lname', 'fname', 'address', 'household', 'Birth', 'birthday', 'age', 'cnum', 'gender', 'civil', 'citizenship', 'occupation', 'email', 'password'];
    var isValid = true;


    // If any required field is empty, stop further processing
    if (!isValid) {
        spinner.addClass('d-none');
        nextText.removeClass('d-none');
        arrowIcon.removeClass('d-none');
        return;
    }
    // Create an array to store checked checkboxes
    var checkboxes = [];
    // Check each checkbox and add its value to the array if checked
    if ($('#employed').is(':checked')) {
        checkboxes.push($('#employed').val());
    }
    if ($('#unemployed').is(':checked')) {
        checkboxes.push($('#unemployed').val());
    }
    if ($('#PWD').is(':checked')) {
        checkboxes.push($('#PWD').val());
    }
    if ($('#OFW').is(':checked')) {
        checkboxes.push($('#OFW').val());
    }
    if ($('#soloparent').is(':checked')) {
        checkboxes.push($('#soloparent').val());
    }
    if ($('#OSY').is(':checked')) {
        checkboxes.push($('#OSY').val());
    }
    if ($('#student').is(':checked')) {
        checkboxes.push($('#student').val());
    }
    if ($('#OSC').is(':checked')) {
        checkboxes.push($('#OSC').val());
    }
    // Add the checkboxes array to the form data
    formData.append('checkboxes', checkboxes);

    // Get the CSRF token from the meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    console.log('Sending AJAX request...');
    $.ajax({
        url: "{{ route('register.step1') }}",
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        data: formData,
        contentType: false,
        processData: false,
        success: function(result) {
            console.log('AJAX request successful:', result);
            $('#step2').find('input, select, textarea').removeClass('is-valid');

            // Check the status property of the result object for each step
            if (result.status === 'success') {
                $('#step1').find('input, select, textarea').each(function() {
                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
                $(this).parent().find('.valid-feedback').remove(); // Remove previous valid feedback
                $(this).parent().find('.invalid-feedback').remove(); // Remove previous invalid feedback
                $(this).parent().append('<div class="valid-feedback">Good.</div>');
            });
        
                // Handle next step based on which step was triggered
                if ($('.firststep-btn').is(':visible')) {
                    nextStep(2); // Go to step 2
                }
            } else {
               
                console.log('Next step not triggered. Response:', result);
            }

            spinner.addClass('d-none');
            // Show "Next" text and arrow icon again
            nextText.removeClass('d-none');
            arrowIcon.removeClass('d-none');
            
        },
        error: function(xhr, status, errorThrown) {
    console.error('AJAX request failed:', xhr, status, errorThrown);
    // Display validation errors
    if (xhr.responseJSON && xhr.responseJSON.errors) {
        $.each(xhr.responseJSON.errors, function(key, value) {
            var input = $('#' + key);
            input.addClass('is-invalid');
            input.parent().find('.valid-feedback').remove();
            input.parent().find('.invalid-feedback').remove(); // Remove previous error message
            input.parent().append('<div class="invalid-feedback">' + value + '</div>');
        });
    }else{
        $.each(xhr.responseJSON.errors, function(key, value) {
            var input = $('#' + key);
            input.addClass('is-valid');
            input.parent().find('.valid-feedback').remove();
            input.parent().find('.invalid-feedback').remove(); // Remove previous error message
            input.parent().append('<div class="valid-feedback">' + value + '</div>');
        });
    }
    $('input, select, textarea').each(function() {
        var input = $(this);
        var key = input.attr('name');

        // Check if the field has no error in the response JSON
        if (xhr.responseJSON && xhr.responseJSON.errors && !xhr.responseJSON.errors[key]) {
            // Check the input against specific validation rules
            if (key === 'lname' && input.val().match(/^[a-zA-Z\s ]+$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'fname' && input.val().match(/^[a-zA-Z\s ]+$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.invalid-feedback').remove();
                input.parent().find('.valid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }else if (key === 'Birth' && input.val()) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'birthday' && input.val()) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'age' && input.val() && !isNaN(input.val()) && parseInt(input.val()) >= 15) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'cnum' && input.val().match(/[0-9]{2}-[0-9]{3}-[0-9]{4}/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'citizenship' && input.val().match(/^[a-zA-Z\s ]+$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'occupation' && input.val().match(/^[a-zA-Z\s ]+$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'email' && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.val())) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'password' && /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/.test(input.val())) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }else if (key === 'mname' && input.val().match(/^[a-zA-Z\s ]*$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'ext' && input.val().match(/^[a-zA-Z\s ]*$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'address' && input.val().match(/^[a-zA-Z0-9 .,()-]*$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'gender' && input.val() !== '') {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'civil' && input.val() !== '') {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'email' && input.val().match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } else if (key === 'password' && input.val().match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&_])[A-Za-z\d$@$!%*?&]{8,}$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }else if (key === 'household' && input.val().match(/^[0-9]+$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }
            // Add similar checks for other fields
            // Add more conditions as needed for other fields
        }
    });
    // Additional error handling if needed
    spinner.addClass('d-none');
    nextText.removeClass('d-none');
    arrowIcon.removeClass('d-none');
}

    });
});

$(document).on('click', '.secondstep-btn', function () {
    var button = $(this);
    var spinner = button.find('.spinner-border');
    var nextText = button.find('.next-text');
    var previousText = button.find('.previous-text');
    var arrowIcon = button.find('.bi-arrow-right-circle');

    // Hide "Next" text and arrow icon
    nextText.addClass('d-none');
    arrowIcon.addClass('d-none');
    previousText.addClass('d-none');

    // Show the spinner
    spinner.removeClass('d-none');
    var owner = $('#owner').val();
    var ownername = $('#ownername').val().trim();
    var numberoffam = $('#numberoffam').val().trim();
    var proofofowner = $('#proofofowner')[0].files[0]; // Get the file input
    // Proceed with your form data and AJAX request
    var formData = new FormData();
    formData.append('secondsetp', 'secondsetp');
    formData.append('owner', owner);
    formData.append('ownername', ownername);
    formData.append('numberoffam', numberoffam);
    formData.append('proofofowner', proofofowner);

    $('#step2').find('input, select, textarea').each(function() {
        formData.append($(this).attr('name'), $(this).val());
    });

    // Get the CSRF token from the meta tag
// Get the CSRF token from the meta tag
var csrfToken = $('meta[name="csrf-token"]').attr('content');
console.log('Sending AJAX request...');
$.ajax({
    url: "{{ route('register.step2') }}",
    type: "POST",
    headers: {
        'X-CSRF-TOKEN': csrfToken
    },
    data: formData,
    contentType: false,
    processData: false,
    success: function(result) {
        console.log('AJAX request successful:', result);
 $('#step2').find('input, select, textarea').removeClass('is-valid');

        // Check the status property of the result object for each step
        if (result.status === 'NEXTSTEP') {
            $('#step2').find('input, select, textarea').each(function() {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $(this).parent().find('.valid-feedback').remove(); // Remove previous error message
        $(this).parent().find('.invalid-feedback').remove(); // Remove previous error message
        $(this).parent().append('<div class="valid-feedback">Good.</div>');
    });
            // Handle next step based on which step was triggered
            if ($('.secondstep-btn').is(':visible')) {
                nextStep(3); // Go to step 3
            }
        } else {
            console.log('Next step not triggered. Response:', result);
        }
        spinner.addClass('d-none');
        // Show "Next" text and arrow icon again
        nextText.removeClass('d-none');
        arrowIcon.removeClass('d-none');
    },
    error: function(xhr, status, errorThrown) {
    console.error('AJAX request failed:', xhr, status, errorThrown);
    // Display validation errors
    if (xhr.responseJSON && xhr.responseJSON.errors) {
        $.each(xhr.responseJSON.errors, function(key, value) {
            var input = $('#' + key);
            input.addClass('is-invalid');
            input.parent().find('.valid-feedback').remove();
            input.parent().find('.invalid-feedback').remove(); // Remove previous error message
            input.parent().append('<div class="invalid-feedback">' + value + '</div>');
        });
    }else{
        $.each(xhr.responseJSON.errors, function(key, value) {
            var input = $('#' + key);
            input.addClass('is-valid');
            input.parent().find('.valid-feedback').remove();
            input.parent().find('.invalid-feedback').remove(); // Remove previous error message
            input.parent().append('<div class="valid-feedback">' + value + '</div>');
        });
    }
    $('input, select, textarea').each(function() {
        var input = $(this);
        var key = input.attr('name');

        // Check if the field has no error in the response JSON
        if (xhr.responseJSON && xhr.responseJSON.errors && !xhr.responseJSON.errors[key]) {
            // Check the input against specific validation rules
            if (key === 'owner' && input.val()!== '') {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }else if (key === 'ownername' && input.val().match(/^[a-zA-Z\s ]+$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }else if (key === 'numberoffam' && input.val().match(/^[0-9]+$/)) {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }else if (key === 'proofofowner') {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }
}

    // Hide spinner and show buttons
    spinner.addClass('d-none');
    nextText.removeClass('d-none');
    arrowIcon.removeClass('d-none');

    });
}
    });
});


});
$(document).ready(function () {
        // Attach an event listener to the role select element
        $('#owner').on('change', function () {
            // Check if the selected value is 'owner'
            if ($(this).val() === 'May-Ari') {
                // If 'owner' is selected, display lname, fname, and mname in nameowner
                displayOwnerInfo();
                // Disable the nameowner input
                $('#ownername').prop('readonly', true);
                $('#proofofowner').prop('disabled', true);
            } else {
                // If another role is selected, clear nameowner and enable the input
                clearOwnerInfo();
                $('#ownername').prop('readonly', false);
                $('#proofofowner').prop('disabled', false);
                
            }
        });
      // Function to check numberoffam input and disable button
    function checkNumberoffam() {
        var numberoffamValue = $('#numberoffam').val().trim();
        if (numberoffamValue === '0' || numberoffamValue === '') {
            $('#addfam').prop('disabled', true);
        } else {
            $('#addfam').prop('disabled', false);
        }
    }
    // Call the function on page load
    checkNumberoffam();
    // Call the function on change of numberoffam input
    $('#numberoffam').on('change', function() {
        checkNumberoffam();
    });
    });

    function displayOwnerInfo() {
        var lname = $('#lname').val();
        var fname = $('#fname').val();
        var mname = $('#mname').val();
        var ext = $('#ext').val();
        $('#proofofowner').prop('disabled', true);
        // Concatenate lname, fname, and mname and set it as the value of nameowner
        $('#ownername').val(lname + ', ' + fname + ' ' + mname+' ' + ext);
    }

    function clearOwnerInfo() {
        // Clear the value of nameowner
        $('#ownername').val('');
    }  

    $(document).ready(function() {
    // Initialize array to store members
    var members = [];

    $('.addmember-btn').click(function() {
        // Get values from input fields
        var lname_member = $('#lname_member').val();
        var fname_member = $('#fname_member').val();
        var mname_member = $('#mname_member').val();
        var ext_member = $('#ext_member').val();
        var household_member = $('#household_member').val();
        var birth_member = $('#birth_member').val();
        var bday_member = $('#bday_member').val();
        var age_member = $('#age_member').val();
        var gender_member = $('#gender_member').val();
        var civil_member = $('#civil_member').val();
        var citizenship_member = $('#citizenship_member').val();
        var occupation_member = $('#occupation_member').val();
        var employed_member = $('#employed_member').val();
        var unemployed_member = $('#unemployed_member').val();
        var PWD_member = $('#PWD_member').val();
        var OFW_member = $('#OFW_member').val();
        var soloparent_member = $('#soloparent_member').val();
        var OSY_member = $('#OSY_member').val();
        var student_member = $('#student_member').val();
        var OSC_member = $('#OSC_member').val();
       // File inputs
       var id_member = $('#id_member').prop('files')[0];
        var pic_member = $('#pic_member').prop('files')[0];
        // Create FormData object
        var formData = new FormData();
       // formData.append('addmember', addmember);
        formData.append('lname_member', lname_member);
        formData.append('fname_member', fname_member);
        formData.append('mname_member', mname_member);
        formData.append('ext_member', ext_member);
        formData.append('household_member', household_member);
        formData.append('birth_member', birth_member);
        formData.append('bday_member', bday_member);
        formData.append('age_member', age_member);
        formData.append('gender_member', gender_member);
        formData.append('civil_member', civil_member);
        formData.append('citizenship_member', citizenship_member);
        formData.append('occupation_member', occupation_member);
        formData.append('id_member', id_member);
        formData.append('pic_member', pic_member);
        // Send AJAX request to store member
        var checkboxes = [];
        if ($('#employed_member').is(':checked')) {
        checkboxes.push($('#employed_member').val());
    }
    if ($('#unemployed_member').is(':checked')) {
        checkboxes.push($('#unemployed_member').val());
    }
    if ($('#PWD_member').is(':checked')) {
        checkboxes.push($('#PWD_member').val());
    }
    if ($('#OFW_member').is(':checked')) {
        checkboxes.push($('#OFW_member').val());
    }
    if ($('#soloparent_member').is(':checked')) {
        checkboxes.push($('#soloparent_member').val());
    }
    if ($('#OSY_member').is(':checked')) {
        checkboxes.push($('#OSY_member').val());
    }
    if ($('#student_member').is(':checked')) {
        checkboxes.push($('#student_member').val());
    }
    if ($('#OSC_member').is(':checked')) {
        checkboxes.push($('#OSC_member').val());
    }
    // Add the checkboxes array to the form data
    formData.append('checkboxes', checkboxes);
        $.ajax({
            url: "{{ route('store.member') }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            contentType: false,
            processData: false,
            success: function(result) {
                $('#addmembers').find('input, select, textarea').removeClass('is-valid');

                // Check the status property of the result object for each step
                if (result.status === 'Member_Added') {
                    $('input, select').each(function() {
                        $(this).addClass('is-valid');
                        $(this).removeClass('is-invalid');
                        $(this).parent().find('.valid-feedback').remove(); // Remove previous error message
                        $(this).parent().find('.invalid-feedback').remove(); // Remove previous error message
                        $(this).parent().append('<div class="valid-feedback">Good.</div>');
                    });
                    $('#addmembers')[0].reset();

                }
            },
            error: function(xhr, status, errorThrown) {
                console.error('AJAX request failed:', xhr, status, errorThrown);
               // console.error(xhr.responseText);
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        var input = $('#' + key);
                        input.addClass('is-invalid');
                        input.parent().find('.valid-feedback').remove();
                        input.parent().find('.invalid-feedback').remove();
                        input.parent().append('<div class="invalid-feedback">' + value + '</div>');
                    });
                }
            }
        });
               // Create member object
               var member = {
                    lname_member: lname_member,
                    fname_member: fname_member,
                    mname_member: mname_member,
                    ext_member: ext_member,
                    household_member: household_member,
                    birth_member: birth_member,
                    bday_member: bday_member,
                    age_member: age_member,
                    gender_member: gender_member,
                    civil_member: civil_member,
                    citizenship_member: citizenship_member,
                    occupation_member: occupation_member,
                    employed_member: checkboxes.includes('employed') ? 'employed' : '',
                    unemployed_member: checkboxes.includes('unemployed') ? 'unemployed' : '',
                    PWD_member: checkboxes.includes('PWD') ? 'PWD' : '',
                    OFW_member: checkboxes.includes('OFW') ? 'OFW' : '',
                    soloparent_member: checkboxes.includes('soloparent') ? 'soloparent' : '',
                    OSY_member: checkboxes.includes('OSY') ? 'OSY' : '',
                    student_member: checkboxes.includes('student') ? 'student' : '',
                    OSC_member: checkboxes.includes('OSC') ? 'OSC' : '',
                    id_member: id_member,
                    pic_member: pic_member
                    // Add other fields as needed
                };
                    // Add member object to members array
                    members.push(member);

                    
                    // Update displayed list
                    displayMembers();
               // console.log(response);
    });

    // Function to display members in #list_of_members
    function displayMembers() {
    var listHtml = '';
    for (var i = 0; i < members.length; i++) {
        var member = members[i];
        // Check if all required fields are present and not empty
        if (
            member.hasOwnProperty('lname_member') && /^[a-zA-Z\s]+$/.test(member['lname_member'].trim()) &&
            member.hasOwnProperty('fname_member') && /^[a-zA-Z\s]+$/.test(member['fname_member'].trim()) &&
            (member.hasOwnProperty('mname_member') && /^[a-zA-Z\s]+$/.test(member['mname_member'].trim())) ||
            !member.hasOwnProperty('mname_member') ||
            (member.hasOwnProperty('ext_member') && /^[a-zA-Z\s .]+$/.test(member['ext_member'].trim())) ||
            !member.hasOwnProperty('ext_member') &&
            member.hasOwnProperty('household_member') && /^[a-zA-Z\s .]+$/.test(member['household_member'].trim()) &&
            member.hasOwnProperty('birth_member') && member['birth_member'].trim() !== '' &&
            member.hasOwnProperty('bday_member') && member['bday_member'].trim() !== '' &&
            member.hasOwnProperty('age_member') && !isNaN(member['age_member']) && member['age_member'] >= 15 &&
            member.hasOwnProperty('gender_member') && ['Male', 'Female'].includes(member['gender_member']) &&
            member.hasOwnProperty('civil_member') && ['Single', 'Widowed', 'Married'].includes(member['civil_member']) &&
            member.hasOwnProperty('citizenship_member') && /^[a-zA-Z\s]+$/.test(member['citizenship_member'].trim()) &&
            member.hasOwnProperty('occupation_member') && /^[a-zA-Z\s]+$/.test(member['occupation_member'].trim()) &&
            member.hasOwnProperty('employed_member') && ['employed', 'unemployed'].some(opt => member['employed_member'].includes(opt)) &&
            member.hasOwnProperty('PWD_member') && ['PWD', 'OFW'].some(opt => member['PWD_member'].includes(opt)) &&
            member.hasOwnProperty('soloparent_member') && ['soloparent', 'OSY'].some(opt => member['soloparent_member'].includes(opt)) &&
            member.hasOwnProperty('student_member') && ['student', 'OSC'].some(opt => member['student_member'].includes(opt)) &&
            member.hasOwnProperty('id_member') && ['pdf', 'png', 'jpg', 'jpeg'].some(ext => member['id_member'].toLowerCase().endsWith(ext)) &&
            member.hasOwnProperty('pic_member') && ['png', 'jpg', 'jpeg'].some(ext => member['pic_member'].toLowerCase().endsWith(ext))

        ) {
            listHtml += '<li><button type="button" class="btn btn-warning btn-lg">' + member['lname_member'] + ', ' + member['fname_member'] + ' ' + member['mname_member'] + ' ' + (member['ext_member'] ? member['ext_member'] + ' ' : '') + ' - ' + member['household_member'] + '</button></li>';
            // Add other fields as needed
        } else {
            console.log('Member at index ' + i + ' is missing required fields.');
            // You can handle missing fields here, such as skipping this member or displaying an error
        }
    }
    $('#list_of_members').html(listHtml);
    // Check if the stored member count matches the numberoffam
    var numberoffam = parseInt($('#numberoffam').val());
    if (members.length === numberoffam) {
        // Close the modal
        $('#addmembers').modal('hide');
        // Disable the addmember-btn
        $('.addmember-btn').prop('disabled', true);
        // Disable the addfam button
        $('#addfam').prop('disabled', true);
    } else {
        // Enable the addmember-btn
        $('.addmember-btn').prop('disabled', false);
        // Enable the addfam button
        $('#addfam').prop('disabled', false);
    }
}

// Event listener for numberoffam input change
$('#numberoffam').on('change', function() {
    displayMembers();

    // Display error message if numberoffam and members.length are not equal
    var numberoffam = parseInt($(this).val());
    if (numberoffam !== members.length) {
        $('#numberoffam-error').text('The number of family members does not match the added members.');
    } else {
        $('#numberoffam-error').text('');
    }
});

$('.laststep-btn').click(function() {
    var voterscert = $('#voterscert').prop('files')[0];
        var idv = $('#idv').prop('files')[0];
        var pic = $('#pic').prop('files')[0];
    // Disable button to prevent multiple submissions
    var formData = new FormData();
    // Append file data to the FormData object
    formData.append('voterscert', voterscert);
    formData.append('idv', idv);
    formData.append('pic', pic);

    // Append other data as needed
   /* formData.append('lname_member', $('#lname_member').val());
    formData.append('fname_member', $('#fname_member').val());
    formData.append('mname_member', $('#mname_member').val());
    formData.append('ext_member', $('#ext_member').val());
    formData.append('household_member', $('#household_member').val());
    formData.append('birth_member', $('#birth_member').val());
    formData.append('bday_member', $('#bday_member').val());
    formData.append('age_member', $('#age_member').val());
    formData.append('cnum_member', $('#cnum_member').val());
    formData.append('gender_member', $('#gender_member').val());
    formData.append('civil_member', $('#civil_member').val());*/

    $.ajax({
        url: "{{ route('register.laststep') }}",
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        contentType: false,
        processData: false,
        success: function(result) {
            console.log(result);
            $('#step3').find('input, select, textarea').removeClass('is-valid');

// Check the status property of the result object for each step
if (result.status === 'Complete') {
    $('input, select').each(function() {
        $(this).addClass('is-valid');
        $(this).removeClass('is-invalid');
        $(this).parent().find('.valid-feedback').remove(); // Remove previous error message
        $(this).parent().find('.invalid-feedback').remove(); // Remove previous error message
        $(this).parent().append('<div class="valid-feedback">Good.</div>');
        $("#exampleModal").modal('show');
    });
}
        },
        error: function(xhr, status, errorThrown) {
    console.error('AJAX request failed:', xhr, status, errorThrown);

    // Display validation errors if they exist
    if (xhr.responseJSON && xhr.responseJSON.errors) {
        $.each(xhr.responseJSON.errors, function(key, value) {
            var input = $('#' + key);
            input.addClass('is-invalid');
            input.parent().find('.valid-feedback').remove();
            input.parent().find('.invalid-feedback').remove();
            input.parent().append('<div class="invalid-feedback">' + value + '</div>');
        });
    } else {
        // Handle other errors, if needed
        console.error('Unexpected error occurred:', xhr.responseText);
        // You can display a generic error message here, or perform other actions
    }

    // Check specific fields for validation and mark them as valid if no error is returned
    $('input, select, textarea').each(function() {
        var input = $(this);
        var key = input.attr('name');
        // Check if the field has no error in the response JSON
        if (xhr.responseJSON && xhr.responseJSON.errors && !xhr.responseJSON.errors[key]) {
            // Check the input against specific validation rules
            if (key === 'voterscert') {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } 
             if (key === 'idv') {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            } 
             if (key === 'pic') {
                input.addClass('is-valid');
                input.removeClass('is-invalid');
                input.parent().find('.valid-feedback').remove();
                input.parent().find('.invalid-feedback').remove();
                input.parent().append('<div class="valid-feedback">Good.</div>');
            }
        }
    });
},
        complete: function() {
            // Re-enable the button
            $(this).prop('disabled', false);
        }
    });
});

});

function nextStep(step) {
    var currentStep = document.getElementById('step' + step);
    currentStep.style.display = 'block';

    var previousStep = document.getElementById('step' + (step - 1));
    previousStep.style.display = 'none';
}

function prevStep(step) {
    var currentStep = document.getElementById('step' + step);
    currentStep.style.display = 'block';

    var nextStep = document.getElementById('step' + (step + 1));
    nextStep.style.display = 'none';
}




</script>

</body>
</html>