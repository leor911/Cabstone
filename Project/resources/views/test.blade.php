<!-- resources/views/agent-details.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Details</title>
</head>
<body>
    <h1>Agent Details</h1>

    @if (count($agents) > 0)
        <ul>
            @foreach ($agents as $agent)
                <li>
                    <h2>{{ $agent['data']['displayUser']['name'] }}</h2>
                    <p>Business Name: {{ $agent['data']['displayUser']['businessName'] }}</p>
                    <p>Email: {{ $agent['data']['profileDisplay']['contactCard']['flag']['reporterEmail'] }}</p>
                    <!-- Add more details here as needed -->
                </li>
            @endforeach
        </ul>
    @else
        <p>No agent details available.</p>
    @endif
</body>
</html>
