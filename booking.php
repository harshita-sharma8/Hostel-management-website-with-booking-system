<?php
    session_start();

    // ✅ Database connection
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "hostel website";  // your DB name

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // ✅ Only run when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name           = trim($_POST['name']);
        $email          = trim($_POST['email']);
        $phone          = trim($_POST['phone']);
        $room_type      = trim($_POST['room_type']);
        $duration       = trim($_POST['duration']);
        $guardian       = trim($_POST['guardian']);
        $guardian_phone = trim($_POST['guardian_phone']);

        // ✅ Insert booking into database
        $sql = "INSERT INTO bookings (name, email, phone, room_type, duration, guardian, guardian_phone)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssiss", $name, $email, $phone, $room_type, $duration, $guardian, $guardian_phone);

        if ($stmt->execute()) {
            // ✅ Redirect to success page
               echo "<script>window.location.href='../payment.php';</script>";
            exit;
        } else {
            echo "<script>alert('Booking failed. Try again.'); window.location.href='../booking.php';</script>";
            exit;
        }
    }

    $conn->close();
?>