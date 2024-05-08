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
                    <form method="POST" action="{{ url('/createProperty') }}">
                        @csrf
                        <div class="row g-3 mb-5">
                            <h3 class="mb-3">Basic Information</h3>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="price" maxlength="20" step="0.01" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                    <label for="">Price</label>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" style="background-color: #fff; padding-top: 10px" name="country_currency" id="" placeholder=""required>
                                        <option selected disabled value="">Currency</option>
                                        <option value="$">USD ($)</option>
                                        <option value="€">Euro (€)</option>
                                        <option value="£">GBP (£)</option>
                                        <option value="¥">JPY (¥)</option>
                                        <option value="₹">INR (₹)</option>
                                        <option value="C$">CAD (C$)</option>
                                        <option value="A$">AUD (A$)</option>
                                        <option value="CHF">CHF (CHF)</option>
                                        <option value="¥">CNY (¥)</option>
                                        <option value="₽">RUB (₽)</option>
                                        <option value="R$">BRL (R$)</option>
                                        <option value="Other">Other</option>
                                        <option value="None">None</option>
                                    </select>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="baths" maxlength="2" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                    <label for="">Number of Bathrooms</label>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="beds" maxlength="2" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                    <label for="">Number of Bedrooms</label>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="area" maxlength="6" id="" placeholder=""onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');">
                                    <label for="">Total Home Square Feet</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" style="background-color: #fff; padding-top: 10px" name="property_type" id="" placeholder=""required>
                                        <option selected disabled value="">Type of Property</option>
                                        <option value="Single Family Residence">Single Family Residence</option>
                                        <option value="Townhouse">Townhouse</option>
                                        <option value="Multi Family Residence">Multi Family Residence</option>
                                        <option value="Mixed">Mixed</option>
                                        <option value="Other">Other</option>
                                        <option value="None">None</option>
                                    </select>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="" name="text" id=""></textarea>
                                    <label for="message">Brief Listing Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 mb-5">
                            <h3 class="mb-3">Location Information</h3>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="address_street" id="" placeholder="" required>
                                    <label for="">Address</label>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="address_zipcode" maxlength="5" id="" placeholder=""required>
                                    <label for="">Zipcode</label>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="address_city" id="" placeholder=""required>
                                    <label for="">City</label>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" style="background-color: #fff; padding-top: 10px" name="address_state" id="" placeholder="" required>
                                        <option selected disabled value="">State</option>
                                        <option value="AL">AL</option>
                                        <option value="AK">AK</option>
                                        <option value="AZ">AZ</option>
                                        <option value="AR">AR</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DE">DE</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IN">IN</option>
                                        <option value="IA">IA</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="LA">LA</option>
                                        <option value="ME">ME</option>
                                        <option value="MD">MD</option>
                                        <option value="MA">MA</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MS">MS</option>
                                        <option value="MO">MO</option>
                                        <option value="MT">MT</option>
                                        <option value="NE">NE</option>
                                        <option value="NV">NV</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NY">NY</option>
                                        <option value="NC">NC</option>
                                        <option value="ND">ND</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TN">TN</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VT">VT</option>
                                        <option value="VA">VA</option>
                                        <option value="WA">WA</option>
                                        <option value="WV">WV</option>
                                        <option value="WI">WI</option>
                                        <option value="WY">WY</option>
                                    </select>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>                  
                        </div>
                        <div class="row g-3 mb-5">
                            <h3 class="mb-3">Other Information</h3>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" style="background-color: #fff; padding-top: 10px" name="marketing_status_simplified_cd" id="" placeholder="" required>
                                        <option selected disabled value="">Marketing Status</option>
                                        <option value="Coming Soon">Coming Soon</option>
                                        <option value="On Hold">On Hold</option>
                                        <option value="For Sale">For Sale</option>
                                        <option value="Under Contract">Under Contract</option>
                                        <option value="Sold">Sold</option>
                                        <option value="Withdrawn">Withdrawn</option>
                                        <option value="Expired">Expired</option>
                                        <option value="Archived">Archived</option>
                                        <option value="Off Market">Off Market</option>
                                        <option value="Other">Other</option>
                                        <option value="None">None</option>
                                    </select>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="img_src" id="" placeholder="">
                                    <label for="">Image SRC</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" style="background-color: #fff; padding-top: 10px" name="status_type" id="" placeholder=""required>
                                        <option selected disabled value="">Type of Listing</option>
                                        <option value="FOR_SALE">For Rent</option>
                                        <option value="FOR_RENT">For Sale</option>
                                        <option value="Other">Other</option>
                                        <option value="None">None</option>
                                    </select>
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- Create Property Form End -->


<!-- footer start -->
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