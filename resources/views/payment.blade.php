<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0d121f;
            color: #ffffff;
        }
        .payment-container {
            max-width: 900px;
            margin: 50px auto;
            background: #ffffff;
            color: #000000;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .payment-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .payment-header img {
            height: 50px;
        }
        .order-summary {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
        }
        .order-summary h4 {
            margin-bottom: 15px;
        }
        .payment-method {
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #1470ad;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #125c96;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <div class="payment-header">
            <div>
                <h2>Boxify</h2>
                <p>Pay before: <strong>19 July 2022 05:20 PM</strong></p>
            </div>
            <img src="/images/logo.png" alt="Logo">
        </div>

        <div class="order-summary">
            <h4>Order Summary</h4>
            <p>Invoice #: boxify-a78db947fe724d24-917b1e0ff8211449</p>
            <p class="text-danger">Pay invoice within: <strong>24:00:00</strong></p>
            <p>Description: This is an example checkout page</p>
            <p>Subtotal: <strong>IDR 23,995,000</strong></p>
            <p>Admin Fee: <strong>IDR 2,500</strong></p>
            <p>Discount Fee: <strong>IDR 2,500</strong></p>
            <p>Total Fees: <strong>IDR 5,000</strong></p>
            <h4>Total Amount Due: <strong>IDR 24,000,000</strong></h4>
        </div>

        <div class="payment-method">
            <h4>Payment Method</h4>
            <form>
                <label for="bank-transfer">
                    <input type="radio" id="bank-transfer" name="payment-method" value="bank-transfer">
                    Bank Transfer
                </label><br>

                <label for="credit-card">
                    <input type="radio" id="credit-card" name="payment-method" value="credit-card">
                    Credit/Debit Card
                </label>
                <div class="credit-card-details" style="display:none;">
                    <input type="text" placeholder="Card Number" class="form-control">
                    <input type="text" placeholder="Valid Thru" class="form-control">
                    <input type="text" placeholder="CVV" class="form-control">
                </div>

                <button type="submit" class="btn-primary">Pay Now</button>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('input[name="payment-method"]').forEach(input => {
            input.addEventListener('change', function() {
                const ccDetails = document.querySelector('.credit-card-details');
                if (this.value === 'credit-card') {
                    ccDetails.style.display = 'block';
                } else {
                    ccDetails.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
