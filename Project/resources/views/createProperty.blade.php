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


    
        <!-- Contact Start -->

        <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-3">Create Property</h1>
                    <p>Enter all the required information below</p>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                <form id="" class="needs-validation" action="createProperty" method="POST" novalidate>
                                @csrf
                                <div class="row g-3 mb-5">
                                    <h3 class="mb-3">Basic Information</h3>
                                    {{-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="houseID" id="description" placeholder="Descroo">
                                            <label for="desc">houseID</label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="realtorID" id="" placeholder="" required>
                                            <label for="">realtorID*</label>
                                            <div class="valid-feedback">
                                                Looks good!
                                              </div>
                                            <div class="invalid-feedback">
                                                Please choose a realtorID.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="price" id="" placeholder="" required>
                                            <label for="">price*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="listingType" id="" placeholder=""required>
                                            <label for="">listingType*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="description" id="" placeholder="">
                                            <label for="">diesc</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="coordinateLatitude" id="" placeholder="">
                                            <label for="">coordinateLatitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="coordinateLongitude" id="" placeholder="">
                                            <label for="">coordinateLongitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="otherDesc" id="" placeholder="">
                                            <label for="">otherDesc</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-5">
                                    <h3 class="mb-3">Property Information</h3>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="houseID" id="" placeholder=""required>
                                            <label for="">HoseId</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="prknSpacesNo" id="" placeholder="">
                                            <label for="">Num Parking Spaces</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="garageSpacesNo" id="" placeholder="">
                                            <label for="">Num gar Spaces</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="prknSize" id="" placeholder="">
                                            <label for="">Parking size</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="acreSize" id="" placeholder="">
                                            <label for="">arce size</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="squareFeet" id="" placeholder=""required>
                                            <label for="">sqft*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="otherDesc" id="" placeholder="">
                                            <label for="">Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-5">
                                    <h3 class="mb-3">Construction Information</h3>
                                    {{-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="houseID" id="" placeholder=""required>
                                            <label for="">HoseId</label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="homeType" id="" placeholder=""required>
                                            <label for="">Home Type*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="archType" id="" placeholder="">
                                            <label for="">arch type</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="constMaterials" id="" placeholder=""required>
                                            <label for="">const materials*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="roof" id="" placeholder=""required>
                                            <label for="">roof*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="builtYear" id="" placeholder=""required>
                                            <label for="">year*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="otherDesc" id="" placeholder="">
                                            <label for="">other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-5">
                                    <h3 class="mb-3">Location Information</h3>
                                    {{-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="houseID" id="" placeholder=""required>
                                            <label for="">HoseId</label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="country" id="" placeholder=""required>
                                            <label for="">country*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="state" id="" placeholder=""required>
                                            <label for="">state*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="county" id="" placeholder=""required>
                                            <label for="">county*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="city" id="" placeholder=""required>
                                            <label for="">city*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="zip" id="" placeholder=""required>
                                            <label for="">zip*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="region" id="" placeholder="">
                                            <label for="">region</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="street" id="" placeholder=""required>
                                            <label for="">street*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="apptNo" id="" placeholder="">
                                            <label for="">apptNo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-5">
                                    <h3 class="mb-3">Interior Information</h3>
                                    {{-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="houseID" id="" placeholder=""required>
                                            <label for="">HoseId</label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="bedroomNo" id="" placeholder=""required>
                                            <label for="">bed*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="bathNo" id="" placeholder=""required>
                                            <label for="">bath*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="kitchenNo" id="" placeholder=""required>
                                            <label for="">kitchen*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="heatingDesc" id="" placeholder="">
                                            <label for="">heating</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="basementDesc" id="" placeholder="">
                                            <label for="">basement</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="applianceDesc" id="" placeholder="">
                                            <label for="">appliance</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="floorsNo" id="" placeholder=""required>
                                            <label for="">num foors*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="floorType" id="" placeholder="">
                                            <label for="">floor type</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="coolingDesc" id="" placeholder="">
                                            <label for="">cooling</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="otherDesc" id="" placeholder="">
                                            <label for="">other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </form>                </div>
            </div>
        </div>
    </div>
        <!-- Contact End -->


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