<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostellooo -home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/> <!-- swiper js slider k liye -->

    <?php require('inc/links.php'); ?>

    <style>
      
      /* isko use kiya hai poora container ko halka sa uper laane k liye */
      .availibility-form{
        margin-top:-50px;
        z-index: 2;
        position: relative;
      }
      @media screen and(max-width: 575px){
        .availibility-form{
        margin-top: 25px;
        padding: 0 35px;
      }
      }
      
  </style>
</head>
<body class = "bg-light">

<?php require('inc/header.php') ?>

<!-- Carousel -->
<div class="container-fluid px-lg-4 mt-4">
    <!-- Swiper -->
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/c1.jpg" class= "w-100 d-block" height="400px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/c3.jpg" class= "w-100 d-block" height="400px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/c4.jpg" class= "w-100 d-block" height="400px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/c1.jpg" class= "w-100 d-block" height="400px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/c3.jpg" class= "w-100 d-block" height="400px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/c4.jpg" class= "w-100 d-block" height="400px"/>
      </div>
    </div>
  </div>
</div>

<!-- Check availability form -->

<div class="container availibility-form">
  <div class="row">
    <div class="col-lg-12  bg-dark shadow p-4 rounded">
      <h5 class = "mb-4 text-white">Check Booking Availability</h5>
      <form class = "row align-items-end">
        <div class="col-lg-3 mb-3">
          <label class="form-label text-white" style="font-weight:500;">Enroll In Date</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <!--
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Check-out</label>
          <input type="date" class="form-control shadow-none">
        </div>
        -->
        <div class="col-lg-2 mb-3">
          <label class="form-label text-white" style="font-weight:500;">Adult</label>
          <select class="form-select shadow-none">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
        
        <!--
        <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight:500;">Children</label>
          <select class="form-select shadow-none">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
        -->

        <div class="col-lg-2 mb-3">
        <label class="form-label text-white">Country</label>
        <input type="text" class="form-control shadow-none">
        </div>

        <div class="col-lg-2 mb-3">
        <label class="form-label text-white">State</label>
        <input type="text" class="form-control shadow-none">
        </div>

        <div class="col-lg-2 mb-3">
        <label class="form-label text-white">City</label>
        <input type="text" class="form-control shadow-none">
        </div>

        <div class="col-lg-1 mb-lg-3 mt-2">
          <button type="submit" class ="btn text-white shadow-none btn-outline-danger text-white">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Our rooms -->

<h2 class = "mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Hostels</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-dark text-white">
          <h5>Simple Hostel Name</h5>
          <h6 class = "mb-4">₹1999 per month</h6>
          <div class="features mb-4">
            <h6 class = "mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 BathRoom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Telivision
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class = "mb-1">Rating</h6>
            <span class = "badge round-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white btn-outline-danger shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-dark text-white">
          <h5>Simple Hostel Nmae</h5>
          <h6 class = "mb-4">₹1999 per month</h6>
          <div class="features mb-4">
            <h6 class = "mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 BathRoom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Telivision
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class = "mb-1">Rating</h6>
            <span class = "badge round-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white btn-outline-danger shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-dark text-white">
          <h5>Simple Hostel Nmae</h5>
          <h6 class = "mb-4">₹1999 per month</h6>
          <div class="features mb-4">
            <h6 class = "mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 BathRoom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Telivision
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class = "mb-1">Rating</h6>
            <span class = "badge round-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white btn-outline-danger shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="rooms.php" class = "btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Hostels >>></a>
    </div>
  </div>
</div>

<!-- Our Facilities -->

<h2 class = "mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px" alt="">
      <h5 class = "mt-3">FOOD</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/star.svg" width="80px" alt="">
      <h5 class = "mt-3">WIFI</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/star.svg" width="80px" alt="">
      <h5 class = "mt-3">MEDICAL KIT</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/star.svg" width="80px" alt="">
      <h5 class = "mt-3">SILENCE AREA FOR STUDY</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/star.svg" width="80px" alt="">
      <h5 class = "mt-3">PURE WATER</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
    <a href="facilities.php" class = "btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>
  </div>
</div>

<!-- Testimonials -->
<h2 class = "mt-5 pt-4 mb-4 text-center fw-bold h-font">REVIEWS</h2>
<div class = "container mt-5">
  <!-- Swiper -->
  <div class="swiper swiper-testmonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-dark text-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px" alt="">
          <h6 class = "m-0 ms-2">User 1</h6>
        </div>
        <p>
          Fantastic Hostel
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-dark text-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px" alt="">
          <h6 class = "m-0 ms-2">User 2</h6>
        </div>
        <p>
          Hostel is very comfortable.
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-dark text-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px" alt="">
          <h6 class = "m-0 ms-2">User 3</h6>
        </div>
        <p>
          The Hostel of fabulaues.
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class = "btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know more >>></a>
  </div>
</div>

<!-- Reach Us -->
<h2 class = "mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-dark text-white rounded">
    <iframe class = "w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115132.86107261963!2d85.07300207866918!3d25.608175570214517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1677068447827!5m2!1sen!2sin"  loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-dark text-white p-4 rounded mb-4">
        <h5>Call Us</h5>
        <a href="tel: +917992264586" class = "d-inline-block mb-2 text-decoration-none text-white">
        <i class="bi bi-telephone-fill"></i>+917992264586</a>
        <br>
        <a href="tel: +917992264586" class = "d-inline-block text-decoration-none text-white">
        <i class="bi bi-telephone-fill"></i>+917992264586</a>
      </div>
      <div class="bg-dark text-white p-4 rounded mb-4">
        <h5>Follow Us</h5>
        <a href="https://www.twitter.com/" class = "d-inline-block mb-3">
        <span class = "badge bg-dark text-white fs-6 p-2"><i class="bi bi-twitter me-1"></i>Twitter</span>
        </a>
        <br>
        <a href="https://www.facebook.com/" class = "d-inline-block mb-3">
        <span class = "badge bg-dark text-white fs-6 p-2"><i class="bi bi-facebook me-1"></i>Facebook</span>
        </a>
        <br>
        <a href="https://www.instagram.com/" class = "d-inline-block">
        <span class = "badge bg-dark text-white text-dark fs-6 p-2"><i class="bi bi-instagram me-1"></i>Instagram</span>
        </a>
        
      </div>
    </div>
  </div>
</div>



<?php require('inc/footer.php') ?>














<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> <!-- swiper js slider k liye -->

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay:{
      delay:1500,
      disableOnInteraction:false,
    }
  });


  var swiper = new Swiper(".swiper-testmonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320: {
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:2,
        },
        1024:{
          slidesPerView:3
        },
      }
    });
</script>
</body>
</html>
