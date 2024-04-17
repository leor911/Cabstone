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
        p, ul, li {
            font-family: Forum,cursive;
        }
        h1, a {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        #map {
            width: 100%;
            height: 100vh;
        }
        .card-img-top {
            max-width: 200px; /* Adjust the maximum width of the image */
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Header start -->
        @include('header')
        <!-- Header end -->

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <!-- Contact form and map content here -->
            </div>
        </div>
        <!-- Contact End -->

        <!-- Realtor Account Information -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1>Agent Details</h1>
                
                <form action="{{ route('search') }}" method="GET" id="searchForm">
                    @csrf
                    <label for="search_name">Search by name:</label>
                    <input type="text" id="search_name" name="search_name">
                    <label for="search_location">Search by location:</label>
                    <input type="text" id="search_location" name="search_location">
                    <button type="submit">Search</button>
                </form>

                @if (!empty($agents))
                    <h2>Search Results</h2>
                    <div class="row realtors">
                        @foreach ($agents as $agent)
                            <div class="col-md-6 mb-4 realtor">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="{{ $agent['profilePhotoSrc'] }}" class="card-img-top" alt="{{ $agent['name'] }} Photo">
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="card-title">{{ $agent['name'] }}</h5>
                                                <p class="card-text">
                                                    <strong>Business Name:</strong> {{ $agent['businessName'] ?? 'N/A' }}
                                                </p>
                                                <p class="card-text">
                                                    <strong>Location:</strong> {{ $agent['location'] ?? 'N/A' }}
                                                </p>
                                                <p class="card-text">
                                                    <strong>Phone Number:</strong> {{ $agent['phoneNumber'] ?? 'N/A' }}
                                                </p>
                                                <p class="card-text">
                                                    <strong>Reviews:</strong> {{ $agent['reviews'] ?? 'N/A' }}
                                                </p>
                                                <p class="card-text">
                                                    <strong>Rating:</strong> {{ $agent['reviewStarsRating'] ?? 'N/A' }}
                                                </p>
                                                @if (isset($agent['profileLink']))
                                                    <p class="card-text">
                                                        <strong>Profile Link:</strong> <a href="https://www.zillow.com{{ $agent['profileLink'] }}" target="_blank">{{ $agent['name'] }}</a>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No agent details found for the provided name.</p>
                @endif
            </div>
        </div>

        <!-- Footer -->
        @include('footer')

        <!-- Back to Top Button -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Your JavaScript code here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       </script>
</body>
</html>
