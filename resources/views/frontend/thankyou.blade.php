<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h2>Thank You, {{ $data['name'] }}!</h2>
            </div>
            <div class="card-body">
                <p>We have received your message regarding <strong>{{ $data['service'] }}</strong>. Our team will get back to you shortly.</p>
                <p>If you have any further questions, feel free to reply to this email.</p>
            </div>
            <div class="card-footer text-muted">
                <p>&copy; 2024 CodeSavvyNest. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
