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

    <!--Javascript Link-->
    <script src="js/base.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        
        (function () {
            'use strict'
        
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
        
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
        
                form.classList.add('was-validated')
                }, false)
            })
        })()
  </script>
      <style>
        p,ul,li {
            font-family: Forum,cursive;
        }
        h1,a{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .result-container {
            margin-top: 20px;
        }
        .requiredAstrik {
            color: red;
            position: absolute;
            top: 20%;
            transform: translateY(-100%);
            transform: translateX(-150%);
            left: 0;
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


    
       <!-- Mortgage Start -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1>Mortgage Calculator</h1>
                <p>Enter all the required information below</p>
                <p><span style="color: red">*</span> Identifies Required Inputs</p>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.5s">
               <!-- Form for mortgage input -->
<form method="post" action="{{ route('mortgage.calculate') }}">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="principal"><span style="color: red">*</span>Principal Amount:</label>
                <input type="number" id="principal" name="principal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="interest_rate"><span style="color: red">*</span>Interest Rate (%):</label>
                <input type="number" step=".01" id="interest_rate" name="interest_rate" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="term"><span style="color: red">*</span>Term (years):</label>
                <input type="number" step=".01" name="term" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="hoa">HOA Fee:</label>
                <input type="number" step=".01" name="hoa" class="form-control">
            </div>
            <div class="mb-3">
                <label for="home_insurance">Home Owners Insurance:</label>
                <input type="number" step=".01" name="home_insurance" class="form-control">
            </div>
            <div class="text-center"> <!-- Centering the button -->
                <button type="submit" class="btn btn-primary w-50 py-3 d-lg-flex">Calculate</button>
            </div>
        </div>
    </div>
</form>


                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="text-center">
                                <br>
                                <br>
                                <!-- Display calculation results -->
                                @isset($data['monthly_payment'])
                                <h1>Mortgage Calculation Result</h1>
                                <h2>Monthly Payment</h2>
                                <p>Total: ${{ $data['monthly_payment']['total'] }}</p>
                                <p>Mortgage: ${{ $data['monthly_payment']['mortgage'] }}</p>
                                <p>Property Tax: ${{ $data['monthly_payment']['property_tax'] }}</p>
                                <p>HOA Fee: ${{ $data['monthly_payment']['hoa'] }}</p>
                                @if(isset($data['monthly_payment']['home_insurance']))
    <p>Home Owners Insurance: ${{ $data['monthly_payment']['home_insurance'] }}</p>
@endif
                                @endisset

                                @isset($data['annual_payment'])
                                <h2>Annual Payment</h2>
                                <p>Total: ${{ $data['annual_payment']['total'] }}</p>
                                <p>Mortgage: ${{ $data['annual_payment']['mortgage'] }}</p>
                                <p>Property Tax: ${{ $data['annual_payment']['property_tax'] }}</p>
                                <p>HOA: ${{ $data['annual_payment']['hoa'] }}</p>
                                <p>Home Insurance: ${{ $data['annual_payment']['home_insurance'] }}</p>
                                @endisset

                                @isset($data['total_interest_paid'])
                                <h2>Total Interest Paid</h2>
                                <p>${{ $data['total_interest_paid'] }}</p>
                                @endisset
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    
    <!--Required form-->
    <script src="js/base.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>