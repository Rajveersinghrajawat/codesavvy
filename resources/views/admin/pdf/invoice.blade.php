<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice-box {
            width: 100%;
            padding: 20px;
            border: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="invoice-box">

        <div style="margin: auto;">
            <img src="{{ public_path('uploads/1735741012.png') }}" alt="Image" style="width: 150px; height: auto; text-align:center;">
        </div>


        <h2>Invoice # {{ $invoice->id }}</h2>
        <p><strong>Date:</strong> {{ $invoice->created_at ? $invoice->created_at->format('d-m-Y') : 'N/A' }}</p>

        <div class="company-details">
            <h2><strong>Comapany Details</strong></h2>
            <p><strong>Company Name: Codesavvy Nest</strong></p>
            <p><strong>Email:</strong>codesavvynestinfo@gmail.com</p>
            <p><strong>Phone:</strong> +91 7726044133 / 9079023171 </p>
            <p><strong>Address:</strong> Tirupati Nagar, Nandri, Jodhpur, Rajasthan 342027</p>
        </div>

        <div class="customer-details">
            <h2><strong>Customer Details</strong></h2>
            <p><strong>Customer Name:</strong> {{ $invoice->customer_name }}</p>
            <p><strong>Email:</strong> {{ $invoice->customer_email }}</p>
            <p><strong>Phone:</strong> {{ $invoice->customer_number }}</p>
            <p><strong>Address:</strong> {{ $invoice->customer_address }}</p>
        </div>


        <table>
            <tr>
                <th>Service</th>
                <th>Amount</th>
                <th>GST</th>
                <th>Payment Status</th>
            </tr>

            <tr>
                <td>{{ $invoice->services_name }}</td>
                <td>Rs {{ number_format($invoice->payment_amount, 2) }}</td>
                @php
                $gstAmount = ($invoice->payment_amount * $invoice->gst_tax) / 100;
                $totalAmount = $invoice->payment_amount + $gstAmount;
                @endphp
                <td>Rs {{ number_format($gstAmount, 2) }}</td>
                <td>{{ ucfirst($invoice->payment_status) }}</td>
            </tr>
        </table>

        <h3>Total: Rs {{ number_format($totalAmount, 2) }}</h3>
    </div>
</body>

</html>