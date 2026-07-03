<?php
  require('essentials.php');
  adminLogin(); 
  session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Settings</title>
    <?php require('links1.php');?>
</head>
<body class="bg-light">

<?php
  require('header.php');
?>

 <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
         <h3 class="mb-4">SETTINGS</h3>

         <!-- general settings -->

         <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="card-title m-0">General Settings</h5>
                <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                  <i class="bi bi-pencil-square"></i>Edit
                </button>
              </div>
              <h6 class="card-subtitle mb-1 fw-bold">Site title</h6>
              <p class="card-text" id="site_title"></p>
              <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
              <p class="card-text" id="site_about"></p>
            </div>
         </div>
         
         <!-- general settings modal -->


          <!-- Modal -->
         <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form>

                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5">General setting</h1>
                  </div>
                  <div class="modal-body">
                     <div class=" mb-3">
                        <label  class="form-label">Site Title</label>
                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" >
                     </div>
                     <div class=" mb-3">
                        <label  class="form-label">About us</label>
                        <textarea  name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
                     </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn custom-bg text-white shadow-none">Submit</button>
                  </div>
                </div>

              </form>
            </div>
         </div>


         <!-- content d3tails -->
         <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="card-title m-0">Contact Settings</h5>
                <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contact-s">
                  <i class="bi bi-pencil-square"></i>Edit
                </button>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-4">
                      
                      <h6 class="card-subtitle mb-1 fw-bold">address</h6>
                      <p class="card-text" id="address"></p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
              <p class="card-text" id="site_about"></p>
            </div>
         </div>


      </div>
    </div>
 </div>

  <?php require('scripts.php');?>
  <script>
    let general_data;

    function get_general(){
      let site_title = document.getElementById('site_title');
      let site_about = document.getElementById('site_about');

      let site_title_inp = document.getElementById('site_title_inp');
      let site_about_inp = document.getElementById('site_about_inp');
      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
      xhr.onload = function(){
        general_data = JSON.parse(this.responseText);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;

        
      }

      xhr.send('get_general');
    }

    window.onload = function(){
      get_general();
    }
  </script>
</body>
</html>