<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Agent Details</title>
</head>
<body>
    <h1>Agent Details</h1>

    @if (!empty($agentData))
        <h2>Profile Information</h2>
        <ul>
            @foreach ($agentData['professionalInformation'] as $info)
                <li><strong>{{ $info['term'] }}:</strong> {{ $info['description'] }}</li>
            @endforeach
        </ul>

        <h2>Contact Information</h2>
        <ul>
            @if (!empty($agentData['profileDisplay']['contactCard']['firstName']))
                <li><strong>Name:</strong> {{ $agentData['profileDisplay']['contactCard']['firstName'] }} {{ $agentData['profileDisplay']['name'] }}</li>
            @endif
            @if (!empty($agentData['profileDisplay']['contactCard']['profilePhotoSrc']))
                <li><strong>Profile Photo:</strong> <img src="{{ $agentData['profileDisplay']['contactCard']['profilePhotoSrc'] }}" alt="Profile Photo"></li>
            @endif
        </ul>
    @else
        <p>No agent details found.</p>
    @endif
</body>
</html>
