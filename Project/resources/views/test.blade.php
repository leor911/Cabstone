<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display</title>
</head>
<body>
    <h1>Data Display</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $row->testid }}</td>
                <td>{{ $row->testname }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>