<!DOCTYPE html>
<html>
<head>
    <title>Invoice Email</title>
</head>
<body>
    <p>Dear {{ $invoice->customer_name }},</p>
    <p>Thank you for your purchase. Please find your invoice attached.</p>
    <p>If you have any questions, feel free to contact us.</p>
    <p>Best Regards,<br>CodeSavvy Nest</p>
</body>
</html>
