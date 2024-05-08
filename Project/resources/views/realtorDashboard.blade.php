<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phillow - Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        p,ul,li {
            font-family: Forum,cursive;
        }
        h1,a{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        #map {
            height: 100%;
            width: 100%;
        }
        #pac-input {
    position: absolute;
    margin-top: 1%; /* Adjust top position as needed */
    margin-left: 12%; /* Adjust left position as needed */
    z-index: 1000; /* Ensure search bar is above other elements */
}
    </style>
    <head>
        <meta charset="utf-8">
        <title>{{ ucfirst($realtor->firstName) }} {{ ucfirst($realtor->lastName) }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
            img{
                border-radius: 25%;
                max-height: 300px;
            }
            p, ul, li {
                font-family: Forum, cursive;
                margin: 10px 0; /* Add margin for spacing between paragraphs and list items */
            }
            h1, a {
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
            .center-form {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 50vh;
            }
            .login-form-container {
                max-width: 400px;
                width: 100%;
                padding: 20px;
                border-radius: 10px;
                background-color: #ffffff;
            }
            .login-form-container form > div {
                margin-bottom: 15px; /* Add margin between form elements */
            }
            .realtor-info{
                width: inherit;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 10px;
                gap: 5px;
            }
            button{
                font-size: 25pt;
            }
            </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


<!-- header start -->
@include('header')
<!-- header end -->

    {{-- If you're logged in, this is what you will see. --}}
    <div class = "realtor-info">
        @if($realtor)
        @if (!is_null($realtor->profile_image))
            <img src="/{{ $realtor->profile_image }}" alt="{{ ucfirst($realtor->firstName)}} {{ ucfirst($realtor->lastName)}}'s image">
        @endif

        <h2>{{ ucfirst($realtor->firstName) }} {{ ucfirst($realtor->lastName) }}</h2>
        <h2>City: {{ $realtor->city }}</h2>
        <h2>Specialty: {{ $realtor->specialty }}</h2>
        <h2>Available Days: {{ $realtor->available_days }}</h2>
        <h2>Available Hours: {{ $realtor->available_hours }}</h2>
        <h2>Contact Agent: {{ $realtor->contact_agent }}</h2>
        
        @if(Auth::check() == true && Auth::user()->email == $realtor->email)
        <button><a href="/edit">Edit Profile</a></button>
        @endif

        @else
        <p>Realtor not found.</p>
        @endif
    </div>

    <!-- footer start -->
    @include('footer')
    <!-- footer end -->
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC92z665c3Q4ymF4mB8MmXRsSJ9uIrDOIA&callback=initAutocomplete&libraries=places&v=weekly" defer></script>

</script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>