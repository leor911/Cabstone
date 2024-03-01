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
    <script>
        // // Function to validate price
        // function validatePrice(priceInput, errorSpan) {
        //     // Reset error message
        //     errorSpan.textContent = '';

        //      // Validate price without decimals
        //      var enteredPrice = priceInput.value;
        //     if (!/^\d+$/.test(enteredPrice)) {
        //         errorSpan.textContent = 'Price must be a whole number';
        //     }
        // }
        // Function to validate listing type
        function validateListingType(listingTypeSelect, errorSpan) {
            // Reset error message
            errorSpan.textContent = '';

            // Validate listing type
            if (listingTypeSelect.value === '') {
                errorSpan.textContent = 'Please select a listing type';
            }
        }

        // Validate price and listing type, and prevent form submission on errors
        var priceInput = document.getElementById('price');
        var priceErrorSpan = document.getElementById('priceError');
        var listingTypeSelect = document.getElementById('listingType');
        var listingTypeErrorSpan = document.getElementById('listingTypeError');

        priceInput.addEventListener('blur', function() {
            validatePrice(priceInput, priceErrorSpan);
        });

        listingTypeSelect.addEventListener('change', function() {
            validateListingType(listingTypeSelect, listingTypeErrorSpan);
        });

        document.getElementById('priceForm').addEventListener('submit', function(event) {
            validatePrice(priceInput, priceErrorSpan);
            validateListingType(listingTypeSelect, listingTypeErrorSpan);

            // Check if there are any errors
            if (priceErrorSpan.textContent !== '' || listingTypeErrorSpan.textContent !== '') {
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>
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
                                            <input type="number" class="form-control" name="realtorID" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for="">realtorID*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="price" id="price" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for=""><span style="color: red">*</span>Price</label>
                                            <span id="priceError" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="listingType" id="" placeholder=""required>
                                                <option selected disabled value=""><span style="color: red">*</span>Listing Type</option>
                                                <option value="Sale">For Sale</option>
                                                <option value="Rent">For Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="" name="description" id="message"></textarea>
                                            <label for="message">Brief Description of the Lising</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="coordinateLatitude" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');">
                                            <label for="">Latitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="coordinateLongitude" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');">
                                            <label for="">Longitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="otherDesc" id="" placeholder="">
                                            <label for="">Other Listing Information</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-5">
                                    <h3 class="mb-3">Property Information</h3>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="houseID" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for="">*HouseID</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="prknSpacesNo" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');">
                                            <label for="">Number of Parking Spaces</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="garageSpacesNo" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');">
                                            <label for="">Number of Garage Spaces</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="prknSize" id="" placeholder="">
                                            <label for="">Parking Area Size</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="acreSize" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');">
                                            <label for="">Acre Size</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="squareFeet" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for="">*Total Square Feet*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="otherDesc" id="" placeholder="">
                                            <label for="">Other Property Information</label>
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
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="homeType" id="" placeholder=""required>
                                                <option selected disabled value=""><span style="color: red">*</span>Home Type</option>
                                                <option value="Single Family Residence">Single Family Residence</option>
                                                <option value="Townhouse">Townhouse</option>
                                                <option value="Multi Family Residence">Multi Family Residence</option>
                                                <option value="Mixed">Mixed</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="archType" id="" placeholder="">
                                                <option selected disabled value="">Architecture Type</option>
                                                <option value="Ranch">Ranch</option>
                                                <option value="Colonial">Colonial</option>
                                                <option value="Cape Cod">Cape Cod</option>
                                                <option value="Contemporary">Contemporary</option>
                                                <option value="Craftsman">Craftsman</option>
                                                <option value="Victorian">Victorian</option>
                                                <option value="Mediterranean">Mediterranean</option>
                                                <option value="Mixed">Mixed</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="constMaterials" id="" placeholder=""required>
                                                <option selected disabled value=""><span style="color: red">*</span>House Construction Materials</option>
                                                <option value="Concrete">Concrete</option>
                                                <option value="Brick">Brick</option>
                                                <option value="Stone">Stone</option>
                                                <option value="Wood">Wood</option>
                                                <option value="Cinder Block">Cinder Block</option>
                                                <option value="Stucco">Stucco</option>
                                                <option value="Stone Veneer">Stone Veneer</option>
                                                <option value="Fiber Cement">Fiber Cement</option>
                                                <option value="Metal">Metal</option>
                                                <option value="Mixed">Mixed</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="roof" id="" placeholder=""required>
                                                <option selected disabled value=""><span style="color: red">*</span>Roof Materials</option>
                                                <option value="Asphalt Shingles">Asphalt Shingles</option>
                                                <option value="Metal">Metal</option>
                                                <option value="Wood Shingles">Wood Shingles</option>
                                                <option value="Tile">Tile</option>
                                                <option value="Slate">Slate</option>
                                                <option value="Concrete Tiles">Concrete Tiles</option>
                                                <option value="Flat Roof">Flat Roof</option>
                                                <option value="Mixed">Mixed</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        {{-- <div class="form-floating">
                                            <input type="number" class="form-control" name="builtYear" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for="">*Year Built</label>
                                        </div> --}}
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="year" id="year" placeholder="" required>
                                                <option selected disabled value=""><span style="color: red">*</span>Year Built</option>
                                                <script>
                                                for (let year = 2024; year >= 1600; year--) {
                                                    document.write(`<option value="${year}">${year}</option>\n`);
                                                }
                                                </script>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="otherDesc" id="" placeholder="">
                                            <label for="">Other Construction Information</label>
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
                                            <label for="">Country*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="state" id="state" placeholder="" required>
                                                <option selected disabled value=""><span style="color: red">*</span>State</option>
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
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="county" id="" placeholder=""required>
                                            <label for="">County*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="city" id="" placeholder=""required>
                                            <label for="">City*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="zip" id="" placeholder=""required>
                                            <label for="">Zip Code*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="region" id="" placeholder="">
                                            <label for="">Region</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="street" id="" placeholder=""required>
                                            <label for="">Street*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="apptNo" id="" placeholder="">
                                            <label for="">Appartment Number</label>
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
                                            <input type="number" class="form-control" name="bedroomNo" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for="">Number of Bedrooms*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="bathNo" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for="">Number of Bathrooms*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="kitchenNo" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for="">Number of Kitchens*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="heatingDesc" id="heatingDesc" placeholder="" required>
                                                <option selected disabled value=""><span style="color: red">*</span>Heating Type</option>
                                                <option value="Furnace">Furnace</option>
                                                <option value="Heat Pump">Heat Pump</option>
                                                <option value="Radiators">Radiators</option>
                                                <option value="Underfloor Heating">Underfloor Heating</option>
                                                <option value="Electric Heater">Electric Heater</option>
                                                <option value="Gas Space Heater">Gas Space Heater</option>
                                                <option value="Boiler System">Boiler System</option>
                                                <option value="Geothermal Heat Pump">Geothermal Heat Pump</option>
                                                <option value="Solar Heating System">Solar Heating System</option>
                                                <option value="Wood Stove">Wood Stove</option>
                                                <option value="Pellet Stove">Pellet Stove</option>
                                                <option value="Mixed">Mixed</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="basementDesc" id="basementDesc" placeholder="" required>
                                                <option selected disabled value=""><span style="color: red">*</span>Basement Type</option>
                                                <option value="Full Basement">Full Basement</option>
                                                <option value="Partial Basement">Partial Basement</option>
                                                <option value="Walkout Basement">Walkout Basement</option>
                                                <option value="Daylight Basement">Daylight Basement</option>
                                                <option value="Finished Basement">Finished Basement</option>
                                                <option value="Unfinished Basement">Unfinished Basement</option>
                                                <option value="Basement Apartment">Basement Apartment</option>
                                                <option value="Basement Workshop">Basement Workshop</option>
                                                <option value="Basement Storage">Basement Storage</option>
                                                <option value="Crawlspace">Crawlspace</option>
                                                <option value="Cellar">Cellar</option>
                                                <option value="Mixed">Mixed</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="applianceDesc" id="" placeholder=""required>
                                            <label for="">*Appliance Type</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="floorsNo" id="" placeholder="" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" required>
                                            <label for="">Number of Floors*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="floorType" id="floorType" placeholder="" required>
                                                <option selected disabled value=""><span style="color: red">*</span>Floor Material</option>
                                                <option value="Hardwood">Hardwood</option>
                                                <option value="Tile">Tile</option>
                                                <option value="Carpet">Carpet</option>
                                                <option value="Laminate">Laminate</option>
                                                <option value="Vinyl Flooring">Vinyl Flooring</option>
                                                <option value="Stone">Stone</option>
                                                <option value="Ceramic">Ceramic</option>
                                                <option value="Mixed">Mixed</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" style="background-color: #fff; padding-top: 10px" name="coolingDesc" id="coolingDesc" placeholder="" required>
                                                <option selected disabled value=""><span style="color: red">*</span>Cooling Type</option>
                                                <option value="Central Air Conditioning">Central Air Conditioning</option>
                                                <option value="Split System Air Conditioner">Split System Air Conditioner</option>
                                                <option value="Window Air Conditioner">Window Air Conditioner</option>
                                                <option value="Ductless Mini-Split">Ductless Mini-Split</option>
                                                <option value="Portable Air Conditioner">Portable Air Conditioner</option>
                                                <option value="Geothermal Cooling">Geothermal Cooling</option>
                                                <option value="Evaporative Cooler">Evaporative Cooler</option>
                                                <option value="Mixed">Mixed</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="otherDesc" id="" placeholder="">
                                            <label for="">Other Interior Information</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </form>                
                        </div>
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