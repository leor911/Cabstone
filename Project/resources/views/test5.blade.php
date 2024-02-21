<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listings</title>
</head>
<body>
    <h1>Listings</h1>
    <ul>
        @foreach ($properties as $property)
            <li>
                <strong>ID:</strong> {{ $property['id'] }}<br>
                <strong>Title:</strong> {{ $property['title'] }}<br>
                <!-- Add more details as needed -->
            </li>
        @endforeach
    </ul>
</body>
</html>
