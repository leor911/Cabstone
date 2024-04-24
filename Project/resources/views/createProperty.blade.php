@auth
@if(Auth::user()->isRealtor())
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phillow - Create Property</title>
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

    <!--Our Javascript Functions Link-->
    <script src="app.js"></script>
      <style>
        p,ul,li {
            font-family: Forum,cursive;
        }
        h1,a{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        body textarea{
            resize: none
        }
        .error {
            color: red;
        }
        .form-floating {
            position: relative;
        }

        .requiredAstrik {
            color: red;
            position: absolute;
            top: 20%;
            transform: translateY(-100%);
            transform: translateX(-150%);
            left: 0;
        }

        .form-control {
            padding-left: 20px;
            padding-right: 10px; /* Add some padding to the right to separate from the asterisk */
            width: calc(100% - 30px); /* Adjust the width to accommodate for the asterisk */
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

        <!-- Create Property Form Start -->

        <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-3">Create Property</h1>
                    <p>Enter all the <span class="error">* required</span> information below</p>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <h1>Create Property</h1>
                    <form method="POST" action="{{ url('/createProperty') }}">
                        @csrf
                        <h2>variabledata</h2>
                        <h6>Text<h6>
                        <input type="text" name="property_type" placeholder="property_type"><br>
                        <h6>Text<h6>
                        <input type="text" name="text" placeholder="text"><br>
                        <h2>HdpData</h2>
                        <!-- HdpData Fields -->
                        <h6>Text<h6>
                        <input type="text" name="zpid" placeholder="ZPID"><br>
                        <h6>Text<h6>
                        <input type="text" name="address_street" placeholder="Street Address"><br>
                        <h6>Text<h6>
                        <input type="text" name="address_zipcode" placeholder="Zipcode"><br>
                        <h6>Text<h6>
                        <input type="text" name="address_city" placeholder="City"><br>
                        <h6>Text<h6>
                        <input type="text" name="address_state" placeholder="State"><br>
                        <h6>Number<h6>
                        <input type="number" min="0" max="200" name="latitude" placeholder="Latitude"><br>
                        <h6>Number<h6>
                        <input type="number" min="0" max="200" name="longitude" placeholder="Longitude"><br>
                        <h6>Number<h6>
                        <input type="number" min="0" max="20" name="price" placeholder="Price"><br>
                        <h6>Number<h6>
                        <input type="number" name="baths" placeholder="Bathrooms"><br>
                        <h6>Number<h6>
                        <input type="number" name="beds" placeholder="Bedrooms"><br>
                        <h2>Property</h2>
                        <!-- Property Fields -->
                        <h6>Text<h6>
                        <input type="text" name="raw_home_status_cd" placeholder="Raw Home Status CD"><br>
                        <h6>Text<h6>
                        <input type="text" name="marketing_status_simplified_cd" placeholder="Marketing Status Simplified CD"><br>
                        <h6>Text<h6>
                        <input type="text" name="img_src" placeholder="Image Source"><br>
                        <h6>Number 0,1<h6>
                        <input type="number" name="has_image" placeholder="Has Image"><br>
                        <h6>Text<h6>
                        <input type="text" name="detail_url" placeholder="Detail URL"><br>
                        <h6>Text<h6>
                        <input type="text" name="status_type" placeholder="Status Type"><br>
                        <h6>Text<h6>
                        <input type="text" name="status_text" placeholder="Status Text"><br>
                        <h6>Text<h6>
                        <input type="text" name="country_currency" placeholder="Country Currency"><br>
                        <h6>Number<h6>
                        <input type="number" name="unformatted_price" placeholder="Unformatted Price"><br>
                        <h6>Text<h6>
                        <input type="text" name="address" placeholder="Address"><br>
                        <h6>Number 0,1<h6>
                        <input type="number" name="is_undisclosed_address" placeholder="Is Undisclosed Address"><br>
                        <h6>Number<h6>
                        <input type="number" name="area" placeholder="Area"><br>
                        <h6>Number 0,1<h6>
                        <input type="number" name="is_zillow_owned" placeholder="Is Zillow Owned"><br>

                        <!-- Submit Button -->
                        <button type="submit">Submit</button>
                    </form>
            </div>
        </div>
    </div>
    <!-- Create Property Form End -->


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
    
    <!--Required form-->
    <script src="js/base.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
@endif
@endauth 