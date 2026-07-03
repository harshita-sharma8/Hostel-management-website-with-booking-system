<?php
   require('essentials.php');
   require('db_config.php');

    session_start();
    
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
      redirect('dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>
    <?php require('links1.php');?>
    <style>
        div.login-form{
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:400px;
        }
    </style>
</head>
<body class="bg-light">
  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="POST">
        <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
        <div class="p-4">
            <div class="mb-3">
             
              <input type="text" id="admin_name" name="admin_name" class="form-control shadow-none text-center" placeholder="Admin name" autocomplete="email"
                required />
            </div>

            <div class="mb-3">
              
              <input type="password" id="admin_pass" name="admin_pass" class="form-control shadow-none text-center" placeholder="Password"
                autocomplete="current-password" required />
            </div>
            <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
        </div>
    </form>
  </div>

  <?php
    if(isset($_POST['login'])){
        $frm_data = filteration($_POST);
        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

        $res = select($query,$values,"ss");
        if($res->num_rows==1){
          $row = mysqli_fetch_assoc($res);
          $_SESSION['adminLogin'] = true;
          $_SESSION['adminId'] = $row['sr_no'];
          redirect('dashboard.php');
        }
        else{
          alert('error','login failed - Invalid Credentials!');
        }
    }
  ?>
    

 <?php require('scripts.php');?>
</body>
</html>