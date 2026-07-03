<?php
//   require('../admin/db_config.php');
 

//   if(isset($_POST['register'])){
//     $data = filteration($_POST);

//     // match password

//     if($data['pass'] != $data['cpass']){
//         echo'pass_mismatch';
//         exit;
//     }

//     // check user exist or not
//     $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? AND `phonenum` = ? LIMIT 1",[$data['email'],$data['phonenum']],"ss");
//     if(mysqli_num_rows($u_exist)!=0){
//       $u_exist_fetch = mysqli_fetch_assoc($u_exist);
//       echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
//       exit;
//     }

//     // upload user image to server


//   }

   
    // ✅ Correct database connection for XAMPP
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "hostel website";   // your actual database name

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name     = trim($_POST['name']);
        $email    = trim($_POST['email']);
        $address  = trim($_POST['address']);
        $phone    = trim($_POST['phonenum']);
        $pincode  = trim($_POST['pincode']);
        $dob      = trim($_POST['dob']);
        $pass     = $_POST['pass'];
        $cpass    = $_POST['cpass'];

        // ✅ Check password match
        if ($pass !== $cpass) {
            die("Passwords do not match");
        }

        // ✅ Hash password
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        // ✅ Handle image upload
        $img_name = $_FILES['profile']['name'];
        $img_tmp  = $_FILES['profile']['tmp_name'];
        $img_ext  = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'webp'];

        if (!in_array($img_ext, $allowed_ext)) {
            die("Invalid image format");
        }

        $new_img_name = "IMG_" . uniqid() . "." . $img_ext;
        $upload_path = "../images/users/" . $new_img_name;

        if (!move_uploaded_file($img_tmp, $upload_path)) {
            die("Image upload failed");
        }

        // ✅ Insert into user_cred table
        $sql = "INSERT INTO user_cred (name, email, address, phonenum, pincode, dob, profile, password)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", 
            $name, 
            $email, 
            $address, 
            $phone, 
            $pincode, 
            $dob, 
            $new_img_name, 
            $hashed_pass
        );

        if ($stmt->execute()) {
            header("Location: ../success.php");
            exit;

        } else {
            echo "❌ Database Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();


?>