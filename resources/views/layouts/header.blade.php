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
   

   @yield("contentAdmin")
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="../lib/wow/wow.min.js"></script>
                    <script src="../lib/easing/easing.min.js"></script>
                    <script src="../lib/waypoints/waypoints.min.js"></script>
                    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
                    <script src="../lib/lightbox/js/lightbox.min.js"></script>
                 
             


                    <!-- Template Javascript -->
                    <script src="../js/main.js"></script>

<script>
$(document).ready(function(){
    $(document).on('click', '.btn-forum', function () {
        var name = "Barangay 781 Zone 85 (Admin)";
        var topic = $('#topic').val();
        var description = $('#description').val();
        var formData = new FormData();
        formData.append('addforum', 'addforum');
        formData.append('name', name);
        formData.append('topic', topic);
        formData.append('description', description);

        // Get the CSRF token from the meta tag
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{ route('Admin.forumpost') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: formData,
            contentType: false,
            processData: false,
            success: function(result) {
                console.log('AJAX request successful:', result);
                fetchForumData();
                // Handle success response here
            },
            error: function(xhr, status, errorThrown) {
                console.error('AJAX request failed:', xhr, status, errorThrown);
                // Handle error response here
            }
        });
    });

// Add event listener for modal trigger
$('.forum-view').click(function() {
    var forumId = $(this).data('id');
    fetchForumData(forumId); // Corrected function name
});

// Function to fetch forum details
function fetchForumData(forumId) {
    $.ajax({
        url: "{{ route('admin.forum.data') }}",
        type: "GET",
        data: { id: forumId },
        success: function(response) {
            if (response.hasOwnProperty('topic') && response.hasOwnProperty('name')) {
                $('#forumTopic').html('<h1 class="text-capitalize">' + response.topic + '</h1>');
                $('#forumDescription').html('<p class="text-capitalize">' + response.description + '</p>');
                $('#labelname').html('<p class="text-capitalize">' + response.name + '</p>');
                $('#forumModal').modal('show'); // Show the modal
            } else if (response.hasOwnProperty('forums')) {
                displayForumData(response.forums); // Display forum data
            }
        },
        error: function(xhr, status, errorThrown) {
            console.error('Error fetching forum data:', xhr, status, errorThrown);
        }
    });
    
}




    // Function to display forum data in the HTML
    function displayForumData(forums) {
        var forumHTML = "";
        forums.forEach(function(forum) {
            var createdDate = new Date(forum.created_at);
            var currentTime = new Date();
            var timeDifference = currentTime - createdDate;
            var timeAgo = "";

            if (timeDifference < 60000) {
                timeAgo = "just now";
            } else if (timeDifference < 3600000) {
                var minutes = Math.floor(timeDifference / 60000);
                timeAgo = minutes + " minute" + (minutes === 1 ? "" : "s") + " ago";
            } else if (timeDifference < 86400000) {
                var hours = Math.floor(timeDifference / 3600000);
                timeAgo = hours + " hour" + (hours === 1 ? "" : "s") + " ago";
            } else if (timeDifference < 604800000) {
                var days = Math.floor(timeDifference / 86400000);
                timeAgo = days + " day" + (days === 1 ? "" : "s") + " ago";
            } else {
                timeAgo = createdDate.toLocaleDateString();
            }
            forumHTML += '<div class="card">';
        forumHTML += '<div class="row card-body">';
        forumHTML += '<div class="col-lg-10"><h1 class="card-title">' + forum.topic + '</h1>';
        forumHTML += '<p class="card-text">' + forum.description + '</p></div>';
        forumHTML += '<div class="col-lg-2 " style="margin-top: .5rem;margin-right:-5rem;">';
        forumHTML += '<button type="button" class="btn btn-warning btn-lg forum-view" data-id="' + forum.id + '" data-bs-toggle="modal" data-bs-target="#forumModal"><i class="bi bi-eye-fill"></i></button>';
        forumHTML += '<button type="button" class="btn btn-danger btn-lg"><i class="bi bi-trash-fill"></i></button>';
        forumHTML += '<p class="card-text" style="margin-top:.5rem;"><small class="text-muted">' + timeAgo + '</small></p></div>';
        forumHTML += '</div>';
        forumHTML += '</div>';
        });

         // Display the generated HTML inside the #displayform element
    $("#displayform").html(forumHTML);

    // Add event listener for modal trigger
    $('.forum-view').click(function() {
        var forumId = $(this).data('id');
        fetchForumData(forumId);
    });
    }

    // Call fetchForumData when the page loads
    fetchForumData();


    $(document).on('click', '.btn-comment', function () {
    var comment = $('#comment').val();
    var forumId = $(this).data('forum-id');

    $.ajax({
        url: '/admin/forum/' + forumId ,
        type: 'POST',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'content': comment
        },
        success: function(response) {
            console.log('Comment posted successfully:', response);
            fetchForumData(); // Update forum data after posting comment
        },
        error: function(xhr, status, errorThrown) {
            console.error('Error posting comment:', errorThrown);
        }
    });
});


});

</script>
</body>
</html>