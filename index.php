<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HOSTEL WEBSITE-HOME</title>
<?php require('links.php');?>

  <!-- Swiper v11 CSS (match with JS version) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link rel="stylesheet" href="common.css">
  <style>
 

    .avail-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width:575px) {
      .avail-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }

    .mainSwiper .swiper-slide{
       width: 100%;
       height: 70vh;
       display: flex;
       justify-content: center;
       align-items: center;
       overflow: hidden;
       background: #fff;
    }

    /* Swiper images fit container */
    .swiper-slide img {
 
      max-width: 100%;
      max-height: 100%;
           object-fit: contain;

     }
     
  </style>
</head>

<body class="bg-light">
 
<?php require('header.php');?>
  <!-- carausal -->

  <!-- Swiper Section -->
  <div class="container-fluid mt-4">
    <div class="swiper mainSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide ">
          <img src="hostel image/college LOGO.png">
        </div>
        <div class="swiper-slide">
          <img src="hostel image/gate.jpeg">
        </div>
        <div class="swiper-slide">
          <img src="hostel image/building3.jpeg">
        </div>
         <div class="swiper-slide">
          <img src="hostel image/building4.jpeg">
        </div>
         <div class="swiper-slide">
          <img src="hostel image/k d hostel gate.jpeg">
        </div>
         <div class="swiper-slide">
          <img src="hostel image/kd hostel inner building.jpeg">
        </div>
      </div>
    </div>

    <!-- check availability form -->

    <div class="container avail-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class="mb-4">Check Booking Availability</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-in</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Student</label>
                <select class="form-select" aria-label="Default select example">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                </select>
              </div>
              <div class="col-lg-3 mb-2">
                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-mg-6">
          <div class="card border-0 shadow" style="max-width:350px ; margin: auto;">
            <img src="room4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5>Boys room</h5>
              <h6 class="mb-4">... per year</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  2 beds
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  1 bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  1 balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  2 table and chair
                </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  Room heater
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="boysbooking.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-mg-6">
          <div class="card border-0 shadow" style="max-width:350px ; margin: auto;">
            <img src="room3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5>Girls room</h5>
              <h6 class="mb-4">... per year</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  2 beds
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  1 bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  1 balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  2 table and chair
                </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                  Room heater
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="girlsbooking.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="room.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More rooms</a>
        </div>
      </div>
    </div>

    <!-- facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="water-heater.svg" width=80px>
          <h5 class="mt-3">Water-header</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="ac.png" width=120px>
          <h5 class="mt-3">Air Conditioner</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="wifi.svg" width=80px>
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="ro.png" width=80px>
          <h5 class="mt-3">RO</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="laptop.webp" width=80px>
          <h5 class="mt-3">Laptop</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
        </div>
      </div>
    </div>

    <!-- testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
    <div class="container">
      <div class="swiper testimonialSwiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
            
              <h6 class="m-0 ms-2">User1</h6>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed modi asperiores ducimus placeat aliquid
              vitae vero, error autem itaque</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <!-- <img  src="star-fill.svg" width="30px"> -->
              <h6 class="m-0 ms-2">User2</h6>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed modi asperiores ducimus placeat aliquid
              vitae vero, error autem itaque</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <!-- <img  src="star-fill.svg" width="30px"> -->
              <h6 class="m-0 ms-2">User3</h6>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed modi asperiores ducimus placeat aliquid
              vitae vero, error autem itaque</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>


        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

 <?php require("footer.php");?>

   
   
    <!-- Swiper v11 JS (matches CSS version) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Swiper Init -->
    <script>
      var swiper = new Swiper('.mainSwiper', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });

   var testimonialSwiper = new Swiper(".testimonialSwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 3,   // only once
  loop: true,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
 });


      
        
        

      // Simple client-side password match check (optional)
      // const pwd = document.getElementById('password');
      // const cpwd = document.getElementById('confirm_password');
      // if (pwd && cpwd) {
      //   const registerForm = cpwd.closest('form');
      //   registerForm.addEventListener('submit', function (e) {
      //     if (pwd.value !== cpwd.value) {
      //       e.preventDefault();
      //       cpwd.setCustomValidity('Passwords do not match');
      //       cpwd.reportValidity();
      //     } else {
      //       cpwd.setCustomValidity('');
      //     }
      //   });
      //   cpwd.addEventListener('input', function () {
      //     cpwd.setCustomValidity('');
      //   });
      // }
    </script>
</body>

</html>