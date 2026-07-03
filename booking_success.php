<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Successful</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #ffffff, #ffffeeff); /* Deep blue gradient */
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }
    .success-card {
      border-radius: 20px;
      padding: 50px 40px;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      animation: fadeInUp 1s ease-out;
      text-align: center;
      color: black;
    }
    .success-icon {
      font-size: 90px;
      color: #4CAF50;
      margin-bottom: 20px;
      animation: bounceIn 1s ease-out;
    }
    h2 {
      font-weight: 700;
      animation: slideIn 1.2s ease-out;
    }
    p {
      font-size: 16px;
      margin-top: 10px;
      animation: fadeIn 1.5s ease-out;
    }
    .btn-custom {
      margin-top: 25px;
      background: linear-gradient(135deg, #4CAF50, #2e7d32);
      border: none;
      border-radius: 30px;
      padding: 12px 30px;
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
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideIn {
      from { opacity: 0; transform: translateX(-30px); }
      to   { opacity: 1; transform: translateX(0); }
    }

    /* Confetti */
    .confetti {
      position: fixed;
      width: 10px;
      height: 10px;
      top: -10px;
      animation: fall 3s linear infinite;
    }
    @keyframes fall {
      to { transform: translateY(100vh) rotate(360deg); }
    }
  </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="success-card">
    <div class="success-icon">✔</div>
    <h2>Booking Confirmed!</h2>
    <p>Your room has been successfully booked.<br>Our team will contact you soon with further details.</p>
    <a href="index.php" class="btn btn-custom text-white">Go to Home</a>
  </div>
</div>

<!-- Confetti Script -->
<script>
function createConfetti() {
  for (let i = 0; i < 30; i++) {
    let confetti = document.createElement("div");
    confetti.className = "confetti";
    confetti.style.left = Math.random() * window.innerWidth + "px";
    confetti.style.backgroundColor = ["#ff6f61","#4CAF50","#FFD700","#00BFFF"][Math.floor(Math.random()*4)];
    confetti.style.animationDuration = (Math.random() * 3 + 2) + "s";
    document.body.appendChild(confetti);
    setTimeout(() => confetti.remove(), 5000);
  }
}
createConfetti();
</script>

</body>
</html>