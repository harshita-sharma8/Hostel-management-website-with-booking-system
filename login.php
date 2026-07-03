<?php
    ob_start();
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

            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            // ✅ Fetch user by email
            $sql = "SELECT * FROM user_cred WHERE email = ? LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();

            $result = $stmt->get_result();

            // ✅ Check if email exists
            if ($result->num_rows == 0) {
                echo "<script>alert('Email not found'); window.location.href='../index.php';</script>";
                exit;
            }

            $user = $result->fetch_assoc();

            // ✅ Verify password
            if (!password_verify($password, $user['password'])) {
                echo "<script>alert('Incorrect password'); window.location.href='../index.php';</script>";
                exit;
            }

            // ✅ Login successful → store session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];

            // ✅ Redirect to success page
            header("Location: ../login_success.php");
            exit;
         

        }

    $conn->close();
?>