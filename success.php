

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff, #ffffeeff); /* Deep blue gradient */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .success-box {
            background: rgba(255, 255, 255, 0.15);
            padding: 50px 40px;
            border-radius: 20px;
            text-align: center;
            backdrop-filter: blur(12px);
            animation: fadeInUp 1s ease-out;
            width: 420px;
            color: black;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .success-icon {
            font-size: 80px;
            color: #4CAF50;
            animation: bounceIn 1s ease-out;
        }

        h2 {
            font-weight: 700;
            margin-top: 20px;
            animation: slideIn 1s ease-out;
        }

        p {
            font-size: 16px;
            margin-top: 10px;
            animation: fadeIn 1.2s ease-out;
        }

        .btn-custom {
            margin-top: 25px;
            background: linear-gradient(135deg, #4CAF50, #2e7d32);
            border: none;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #2e7d32, #4CAF50);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        /* Animations */
        @keyframes bounceIn {
            0% { transform: scale(0); opacity: 0; }
            60% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(1); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>

<body>

<div class="success-box">
    <div class="success-icon">✅</div>
    <h2>Registration Successful!</h2>
    <p>Your account has been created successfully.</p>
    <a href="index.php" class="btn btn-custom text-white">Go to Home</a>
</div>

</body>
</html>