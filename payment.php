<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }
        .payment-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .method-box {
            border: 2px solid #ddd;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }
        .method-box:hover {
            border-color: #000;
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-5 payment-card">

            <h3 class="text-center mb-4">Complete Your Payment</h3>

            <p class="text-muted text-center">Choose a payment method</p>

            <div class="method-box mb-3">
                <strong>💳 Credit / Debit Card</strong>
            </div>

            <div class="method-box mb-3">
                <strong>📱 UPI (Google Pay / PhonePe / Paytm)</strong>
            </div>

            <div class="method-box mb-3">
                <strong>🏦 Net Banking</strong>
            </div>

            <button class="btn btn-dark w-100 mt-3" onclick="processPayment()">Pay Now</button>

        </div>
    </div>

    <script>
    function processPayment() {
        // Fake processing animation
        alert("Processing payment...");

        setTimeout(() => {
            window.location.href = "booking_success.php";
        }, 1500);
    }
    </script>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ffffff, #ffffeeff); /* Deep blue gradient */
            font-family: 'Poppins', sans-serif;
        }
        .payment-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            animation: fadeInUp 0.8s ease-out;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .method-box {
            border: 2px solid #ddd;
            padding: 15px;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
            background: #fafafa;
        }
        .method-box:hover {
            border-color: #2a5298;
            background: #e9f0ff;
            transform: scale(1.03);
        }
        .btn-custom {
            margin-top: 25px;
            background: linear-gradient(135deg, #4CAF50, #2e7d32);
            border: none;
            border-radius: 30px;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #2e7d32, #4CAF50);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        /* Loader */
        .loader {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #4CAF50;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
            display: none;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-5 payment-card text-center">

            <h3 class="mb-4 fw-bold">💳 Complete Your Payment</h3>
            <p class="text-muted">Choose a payment method</p>

            <div class="method-box mb-3">
                <strong>💳 Credit / Debit Card</strong>
            </div>

            <div class="method-box mb-3">
                <strong>📱 UPI (Google Pay / PhonePe / Paytm)</strong>
            </div>

            <div class="method-box mb-3">
                <strong>🏦 Net Banking</strong>
            </div>

            <button class="btn btn-custom w-100" onclick="processPayment()">Pay Now</button>

            <!-- Loader -->
            <div class="loader" id="loader"></div>
            <p id="processingText" class="mt-3 fw-bold text-success" style="display:none;">Processing Payment...</p>

        </div>
    </div>

    <script>
    function processPayment() {
        // Show loader + text
        document.getElementById("loader").style.display = "block";
        document.getElementById("processingText").style.display = "block";

        // Fake processing delay
        setTimeout(() => {
            window.location.href = "booking_success.php";
        }, 2500);
    }
    </script>

</body>
</html>