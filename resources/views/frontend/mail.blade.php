<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>{{ $subject }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $data['name'] }}</p>
                <p><strong>Email:</strong> {{ $data['email'] }}</p>
                <p><strong>Phone Number:</strong> {{ $data['phone_number'] }}</p>
                <p><strong>Service:</strong> {{ $data['service'] }}</p>
                <p><strong>Message:</strong> {{ $data['massage'] }}</p>
            </div>
            <div class="card-footer text-muted">
                <p>&copy; 2024 CodeSavvyNest. All rights reserved.</p>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
