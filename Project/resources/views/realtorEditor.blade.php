<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Phillow - Profile Editing</title>
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
        <link href="img/favicon.ico" rel="icon">
    
        <style>
            p, ul, li {
                font-family: Forum,cursive;
            }
            h1, a {
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
            button{

            }
    
            #slideShow {
                display: flex;
                justify-content: center;
            }
            .top{
                padding-top: 50px;
            }
            .modal-dialog {
        margin: auto;
        top: 25%;
        transform: translateY(-50%);
        max-width: 50%; /* Adjust the maximum width of the modal as needed */
    }
    
    .modal-content {
        width: 100%;
    }
    
    .modal-body {
        max-height: calc(100vh - 200px); /* Adjust the maximum height of the modal body as needed */
        overflow-y: auto;
    }
    
    .realtor-container{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px;
    }
    
    .realtor-info{
        height: 600px;
        width: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }

    #input-buttons{
        width: 100px;
        border: 2px solid black;
        border-radius: 12px;
    }
    
        </style>
    </head>

<body>
    <div class="container-xxl bg-white p-0">
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
    <div>
        <div class="realtor-container">

            <h2 id="realtor_name">{{ ucfirst($realtor->firstName) }} {{ ucfirst($realtor->lastName) }}</h2>
            <form class = "realtor-info" action="{{ route("edit.confirm") }}" method="POST" enctype="multipart/form-data">
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
                <input class="file_input" type="file" name="image" accept="image/png, image/jpeg, image/jpg">
                <div style="display: flex; justify-content: center;">
                    <button class="btn btn-primary w-25 py-3">Submit</button>
                </div>
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
</div>
</body>
</html>