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
            max-width: 150px; 
            height: auto;
            margin: auto; /* Center the image horizontally */
            display: block; 
            padding-top: 5px;
        }
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            max-width: 780px;
            margin-top: 25px;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center content vertically */
        }
        .card-title {
            text-align: center;
        }
        .card-text {
            text-align: center;
        }
        /* .pagination {
            justify-content: center;
            margin-top: 20px;
        } */
        .page-link {
            color: #007bff;
            background-color: transparent;
            border: 1px solid #007bff;
            border-radius: 5px;
            margin: 0 5px; /* Add margin to separate the links */
        }
        .page-link:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Header start -->
    @include('header')
    <!-- Header end -->
    <!-- Realtor Account Information -->
    <div class="container-xxl py-5">
        <div class="">
            <h1 class="mt-4 d-flex justify-content-center">Our Agents</h1>
            @if ($agents->count() > 0)
                <div class="row realtors">
                    @foreach ($agents as $agent)
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ $agent->profile_photo_src }}" class="card-img-top" alt="Agent Photo">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $agent->full_name }}</h5>
                                    <p class="card-text">Business Name: {{ $agent->business_name }}</p>
                                    <p class="card-text">Phone Number: {{ $agent->phone_number }}</p>
                                    <p class="card-text">Profile Link: <a href="{{ $agent->profile_link }}">{{ $agent->profile_link }}</a></p>
                                    @if ($agent->is_top_agent)
                                        <p class="card-text">This agent is a top agent.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-4 d-flex justify-content-center"> <!-- Added margin-top -->
                    @include('pagnation_template', ['paginator' => $agents])
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
