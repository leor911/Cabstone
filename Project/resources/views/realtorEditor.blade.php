<!DOCTYPE html>
<html lang="en">
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
                height: inherit;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 10px;
                gap: 5px;
            }

            </style>
</head>

<body>
    @if(Auth::user()->firstName == $realtor->firstName && Auth::user()->lastName == $realtor->lastName)
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    
    @endif
    <!-- header start -->
    @include('header')
    <!-- header end -->

    {{-- If you're logged in, this is what you will see. --}}

    @if(Auth::user()->role_name == "realtor" && Auth::user()->firstName == $realtor->firstName && Auth::user()->lastName == $realtor->lastName || Auth::user()->role_name == "admin")
    <div class = "realtor-info">

        <h2>{{ ucfirst($realtor->firstName) }} {{ ucfirst($realtor->lastName) }}</h2>
        <div>
            <form action="{{ route("edit.confirm") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="updateCity">City:</label>
                <input type="text" id="updateCity" name="updateCity" value="{{ $realtor->city }}">
                <label for="updateSpecialty">Specialty:</label>
                <input type="text" id="updateSpecialty" name="updateSpecialty" value="{{ $realtor->specialty }}">
                <label for="updateDays">Available Days:</label>
                <input type="text" id="updateDays" name="updateDays" value="{{ $realtor->available_days }}">
                <label for="updateHours">Available Hours:</label>
                <input type="text" id="updateHours" name="updateHours" value="{{ $realtor->available_hours }}">
                
                <label for="updateAgent">Contact Agent:</label>
                <select name="updateAgent" id="updateAgent" value="{{ $realtor->contact_agent }}">
                    <option value="Leo Rivera">Leo Rivera</option>
                    <option value="Connor Hamilton">Connor Hamilton</option>
                    <option value="Jack Korosec">Jack Korosec</option>
                    <option value="Cooper Honert">Cooper Honert</option>
                </select>
                
                <label for="">Upload Profile Image:</label>
                <input type="file" name="image" accept="image/png, image/jpeg, image/jpg">
                <button style="background-color: lightgray">Submit</button>
            </form>
        </div>
    @else
        <h2>Credentials invalid.</h2>
    </div>
    @endif
    
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
    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>