<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HOSTEL WEBSITE-FACILITIES</title>
<?php require('links.php');?>

  <!-- Swiper v11 CSS (match with JS version) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .pop:hover{
        border-top-color:#2ec1ac  !important;
        transform:scale(1.03);
        transition:all 0.3s;
    }
  </style>
</head>

<body class="bg-light">
 
<?php require('header.php');?>
 
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias dolor fugit architecto commodi tempore enim modi neque laboriosam id ipsum!
    </p>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-mg-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="water-heater.svg" width="40px">
                    <h5 class="">Water-header</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium illo aliquid voluptate tempore consectetur eaque!</p>
            </div>
        </div>
         <div class="col-lg-4 col-mg-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="ac.png" width="40px">
                    <h5 class="">Air Conditioner</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium illo aliquid voluptate tempore consectetur eaque!</p>
            </div>
        </div>
         <div class="col-lg-4 col-mg-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="wifi.svg" width="40px">
                    <h5 class="">Wifi</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium illo aliquid voluptate tempore consectetur eaque!</p>
            </div>
        </div>
          <div class="col-lg-4 col-mg-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="ro.png" width="40px">
                    <h5 class="">RO</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium illo aliquid voluptate tempore consectetur eaque!</p>
            </div>
        </div>
          <div class="col-lg-4 col-mg-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="laptop.webp" width="40px">
                    <h5 class="">Laptop</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium illo aliquid voluptate tempore consectetur eaque!</p>
            </div>
        </div>
          <div class="col-lg-4 col-mg-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="security.webp" width="70px">
                    <h5 class="">24/7 security</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium illo aliquid voluptate tempore consectetur eaque!</p>
            </div>
        </div>
    </div>
</div>
 <?php require("footer.php");?>

   
</body>

</html> 