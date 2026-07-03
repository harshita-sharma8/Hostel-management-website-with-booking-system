<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('links.php');?>

  <!-- Swiper v11 CSS (match with JS version) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link rel="stylesheet" href="common.css">
</head>
<body>
    <?php require('header.php');?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Boys Hostel Room Booking</h4>
                </div>

                <div class="card-body">
                    <form action="ajax/booking.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Room Type</label>
                            <select name="room_type" class="form-select shadow-none" required>
                                <option value="" disabled selected>Select Room Type</option>
                                <option value="Single Bed">Single Bed</option>
                                <option value="Double Sharing">Double Sharing</option>
                            
                                <option value="AC Room">AC Room</option>
                                <option value="Non-AC Room">Non-AC Room</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Duration (Months)</label>
                            <input type="number" name="duration" class="form-control shadow-none" min="1" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Guardian Name</label>
                            <input type="text" name="guardian" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Guardian Phone</label>
                            <input type="text" name="guardian_phone" class="form-control shadow-none" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-dark px-4 shadow-none">Book Room</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 
     <?php require("footer.php");?>
</body>
</html>