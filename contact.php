<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HOSTEL WEBSITE-CONTACT</title>
<?php require('links.php');?>

  <!-- Swiper v11 CSS (match with JS version) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="bg-light">
 
<?php require('header.php');?>
 
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR CONTACT</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias dolor fugit architecto commodi tempore enim modi neque laboriosam id ipsum!
    </p>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-mg-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 ">
                <h5>Address</h5>
                <a href="https://maps.app.goo.gl/BPnLoUy7cGtTDJLE8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i>FET Agra college,Agra,Uttar Pradesh</a>
                    <h5 class="mt-4">Call us</h5> 
                    <a href="tel: +91xxxxxxxxxx" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-telephone-fill"></i> +91xxxxxxxxxx
                    </a> <br>    
                      <a href="tel: +91xxxxxxxxxx" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-telephone-fill"></i> +91xxxxxxxxxx
                    </a> 
                    <h5 class="mt-4">Email</h5> 
                    <a href="mailto: example@gmail.com" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-envelope-fill"></i> example@gmail.com
                    </a>    
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-facebook"></i> 
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                      <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                      <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                      <i class="bi bi-github"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                      <i class="bi bi-instagram"></i> 
                    </a>
            </div>
        </div>
        <div class="col-lg-6 col-mg-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <form >
                    <h5>Send a message</h5>
                    <div>
                        <label for="name" class="form-label" >Name</label>
                        <input type="text" id="name" name="name" class="form-control shadow-none"  >
                    </div>
                       <div>
                        <label for="email" class="form-label" >Email</label>
                        <input type="email" id="email" name="email" class="form-control shadow-none"  >
                    </div>
                       <div>
                        <label for="sub" class="form-label" >Subject</label>
                        <input type="text" id="sub" name="sub" class="form-control shadow-none"  >
                    </div>
                       <div>
                        <label for="mes" class="form-label" >Message</label>
                        <textarea class="form-control shadow-none" rows="3"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark shadow-none">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require('footer.php');?>

   
</body>

</html> 