<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phillow - Register</title>
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
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .error {
            color: red;
        }

        .form-floating {
            position: relative;
            width: 90%;
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

    <!-- Register Form Start -->

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-3">Register New Phillow Account</h1>
                    <p>Enter all the <span class="error">* required</span> information below</p>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row g-3 mb-5">
                            <h3 class="mb-3">User Information</h3>
                            <!-- First Name -->
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <x-text-input id="firstName" class="form-control" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="firstName" />
                                    <label for="">First Name</label>
                                    <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <!-- Last Name -->
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <x-text-input id="lastName" class="form-control" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="lastName" />
                                    <label for="">Last Name</label>
                                    <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <!-- Email Address -->
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" />
                                    <label for="">Email</label>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <!-- Phone Number -->
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <x-text-input id="phoneNo" class="form-control" type="int" name="phoneNo" :value="old('phoneNo')" />
                                    <label for="">Phone Number</label>
                                    <x-input-error :messages="$errors->get('phoneNo')" class="mt-2" />
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <!-- Pick a Role -->
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select id="role_name" name="role_name" class="form-control" required autocomplete="role">
                                        <option value="pickSomething">Select a Role:</option>
                                        <option value="customer">Customer</option>
                                        <option value="realtor">Realtor</option>
                                   </select>
                                   <label for="">Role</label>
                                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <x-text-input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                    <label for="">Password</label>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                            <!-- Confirm Password -->
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <x-text-input id="password_confirmation" class="form-control"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />
                                    <label for="">Confirm Password</label>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    <div class="requiredAstrik">*</div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>

                    </form>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <!-- Register Form End -->


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
