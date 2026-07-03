<!-- footer -->
 <div class="container-fluid bg-white mb-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">HOSTEL WEBSITE</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure rerum enim consectetur consequatur qui dicta cum? Adipisci sit reprehenderit est consequuntur dicta, asperiores et dignissimos, fugiat blanditiis quia cumque aperiam!</P>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="md-3">Links
      </h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook"></i> Facebook
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-twitter-x"></i> Twitter
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-linkedin"></i> Linkedin
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-github"></i> github
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-instagram"></i> Instagram
      </a><br>
    </div>
  </div>
 </div>

 <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Sakshi and Harshita</h6>

 <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>


   <script>



   let register_form = documeny.getElementById('register-form');

   register_form.addEventListener('submit' (e)=>{
     e.preventDefault();

     let data= new FormData();

     data.append('name',registration_form.elements['name'].value);
     data.append('email',registration_form.elements['email'].value);
     data.append('phonenum',registration_form.elements['phonenum'].value);
     data.append('address',registration_form.elements['address'].value);
     data.append('pincode',registration_form.elements['pincode'].value);
     data.append('dob',registration_form.elements['dob'].value);
     data.append('pass',registration_form.elements['pass'].value);
     data.append('cpass',registration_form.elements['cpass'].value);
     data.append('profile',registration_form.elements['profile'].files[0]);
     data.append('register','');

     var myModal = document.getElementById('registerModal');
     var modal = bootstrap.Modal.getinstance(myModal);
     modal.hide();

     let xhr = new XMLHttpRequest();
     xhr.open("POST","ajax/login_register.php",true);

     xhr.onload = function(){
     
     }
     
     xhr.send(data);
    })
   </script>   