<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phillow - Find a Realtor</title>
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
        p,ul,li {
            font-family: Forum,cursive;
        }
        h1,a{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        #map{
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- header start -->
        @include('header')
        <!-- header end -->

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Bookmark a Realtor</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <p>Send an email to the address below under the subject: "Bookmark"</p>
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-primary"></i>
                                        </div>
                                        <span>PhillowPhillow1@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <p>Text "Bookmark" followed by another text regarding your preffered date and time</p>
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                        <span>+012 345 6789</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">
                                    <p>If both an email and text message are sent from the same IP address, only the first one we recieve will be read. If an email and text are sent at the same time the email will be viewed first, and taken as your primary request.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">Enter your location to find nearby realtors</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="state">
                                            <label for="state">State</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="city">
                                            <label for="city">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="zipcode">
                                            <label for="zipcode">Zip Code</label>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="datetime-local" class="form-control" id="">
                                            <label for="timeframe">Start Time</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="datetime-local" class="form-control" id="">
                                            <label for="timeframe">End Time</label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <button class="btn btn-primary w-100 py-3" type="submit" href="#">Find Realtor</button>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="bg-light rounded p-3" style="text-align: center; margin-top: 10px">
                                        {{-- <script>
                                            Math.floor(Math.random() * 10) + 1;
                                            function getRndInteger(min, max) {
                                                return Math.floor(Math.random() * (max - min + 1) ) + min;
                                            }
                                        </script> --}}
                                        <p>There are 4 realtors available right now.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>
                        <h1>Realtor Account Information</h1>
                    </div>
                    <div>
                        <div class="row g-4">
                            <!--I couldn't come up with any names. I'll probably add those later if anything comes to mind.-->
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Firstname Lastname</h5>
                                        <p><h5>City:</h5>Pittsburg</p>
                                        <p><h5>Specialty:</h5>Townhouses and Tiny Homes</p>
                                        <p><h5>Availabile Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Availabile Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Cooper Honert</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Firstname Lastname</h5>
                                        <p><h5>City:</h5>Philadelphia</p>
                                        <p><h5>Specialty:</h5>Appartments</p>
                                        <p><h5>Availabile Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Availabile Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Jack Korosec</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Firstname Lastname</h5>
                                        <p><h5>City:</h5>Harrisburg</p>
                                        <p><h5>Specialty:</h5>Affordable Housing</p>
                                        <p><h5>Available Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Available Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Leo Rivera</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Firstname Lastname</h5>
                                        <p><h5>City:</h5>Lancaster</p>
                                        <p><h5>Specialty:</h5>Large Family Homes</p>
                                        <p><h5>Availabile Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Availabile Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Connor Hamilton</p>
                                    </div>
                                </div>
                            </div>

                            @foreach ($realtors as $realtor)
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">{{ $realtor->firstName }} {{ $realtor->lastName }}</h5>
                                        <p><h5>Email:</h5>{{ $realtor->email }}</p>
                                        <p><h5>Phone Number:</h5>{{ $realtor->phoneNo }}</p>
                                        <p><h5>Availabile Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Availabile Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Connor Hamilton</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--These are just in case we want more people listed. You will have to add your own images and names.-->
                    {{-- <div>
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Firstname Lastname</h5>
                                        <p><h5>City:</h5>Pittsburg</p>
                                        <p><h5>Specialty:</h5>Townhouses and Tiny Homes</p>
                                        <p><h5>Availabile Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Availabile Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Cooper Honert</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Firstname Lastname</h5>
                                        <p><h5>City:</h5>Philadelphia</p>
                                        <p><h5>Specialty:</h5>Appartments</p>
                                        <p><h5>Availabile Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Availabile Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Jack Korosec</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Firstname Lastname</h5>
                                        <p><h5>City:</h5>Harrisburg</p>
                                        <p><h5>Specialty:</h5>Affordable Housing</p>
                                        <p><h5>Availabile Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Availabile Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Leo Rivera</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="" alt="">
                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Firstname Lastname</h5>
                                        <p><h5>City:</h5>Lancaster</p>
                                        <p><h5>Specialty:</h5>Large Family Homes</p>
                                        <p><h5>Availabile Days:</h5>Tuesday-Sunday</p>
                                        <p><h5>Availabile Hours:</h5>7:00AM-5:30PM</p>
                                        <p><h5>Contact Agent:</h5>Connor Hamilton</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>Experience the expertise you deserve. Our seasoned agents provide personalized guidance and unparalleled service, ensuring your journey is smooth from start to finish.</p>
                                </div>
                                <a href="#" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="#" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;" id="propertyAgents">
                    <h1 class="mb-3" >Property Agents</h1>
                    <p>At our core, we're more than just agents – we're a dedicated team united in achieving your property dreams. With seamless collaboration and unwavering support, we ensure your journey is not just successful, but truly exceptional.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/cooper2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Cooper Honert</h5>
                                <small>Townhouses and Tiny Homes</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/jack2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Jack Korosec</h5>
                                <small>Apparments</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/IMG_1169.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Leo Rivera</h5>
                                <small>Affordable Housing</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/connor2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Connor Hamilton</h5>
                                <small>Large Family Homes</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

<!-- footer start -->
@include('footer')
<!-- footer end -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script>
        let debounce;
        $('#search').on('keyup', function() {
            clearTimeout(debounce);
            debounce = setTimeout(() => {
                // AJAX request here
            }, 300);
        });
        if (data.length === 0) {
            $('#results-list').html('<li>No Results Found</li>');
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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