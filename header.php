 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.html">HOSTEL WEBSITE</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active me-2" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link me-2" href="room.php">Rooms</a></li>
          <li class="nav-item"><a class="nav-link me-2" href="facilities.php">Facilities</a></li>
          <li class="nav-item"><a class="nav-link me-2" href="contact.php">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        </ul>

        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="loginLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form  action="ajax/login.php" method="POST" novalidate>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center" id="loginLabel">
              <i class="bi bi-person-circle fs-3 me-2"></i> User Login
            </h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email</label>
              <input type="email" id="loginEmail" name="email" class="form-control shadow-none" autocomplete="email"
                required />
            </div>

            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <input type="password" id="loginPassword" name="password" class="form-control shadow-none"
                autocomplete="current-password" required />
            </div>

            <div class="text-center my-2">
              <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="registerLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div  class="modal-content" >
        <form  action="ajax/login_register.php" method="POST" id="register-form" enctype="multipart/form-data" novalidate>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center" id="registerLabel">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
            </h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
              Note: Your details must match your ID (Aadhaar card, passport, etc.) required during check-in.
            </span>

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" id="name" name="name" class="form-control shadow-none" autocomplete="name"
                    required />
                </div>

                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" id="email" name="email" class="form-control shadow-none" autocomplete="email"
                    required />
                </div>

                <div class="col-md-6 mb-3">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="tel" id="phonenum" name="phonenum" class="form-control shadow-none" pattern="[0-9]{10}"
                    inputmode="numeric" autocomplete="tel" required />
                </div>

                <div class="col-md-6 mb-3">
                  <label for="picture" class="form-label">Picture</label>
                  <input type="file" id="profile" name="profile" class="form-control shadow-none" accept=".jpg, .jpeg, .png, .webp"
                    required />
                </div>

                <div class="col-md-12 mb-3">
                  <label for="address" class="form-label">Address</label>
                  <textarea id="address" name="address" class="form-control shadow-none" rows="2" required></textarea>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="pincode" class="form-label">Pincode</label>
                  <input type="text" id="pincode" name="pincode" class="form-control shadow-none" pattern="[0-9]{6}"
                    inputmode="numeric" required />
                </div>

                <div class="col-md-6 mb-3">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input type="date" id="dob" name="dob" class="form-control shadow-none" required />
                </div>

                <div class="col-md-6 mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" id="pass" name="pass" class="form-control shadow-none"
                    autocomplete="new-password" minlength="6" required />
                </div>

                <div class="col-md-6 mb-3">
                  <label for="confirm_password" class="form-label">Confirm Password</label>
                  <input type="password" id="cpass" name="cpass" class="form-control shadow-none"
                    autocomplete="new-password" minlength="6" required />
                </div>
              </div>

              <div class="text-center my-2">
                <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  