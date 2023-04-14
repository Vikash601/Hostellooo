<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostellooo-About</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/> <!-- swiper js slider k liye -->

    <?php require('inc/links.php'); ?>

    <style>
      :root{
        --teal:#dc3545;
        --teal_hover:#279e8c;
      }
      .box{
        border-top-color:var(--teal) !important;
      }
      .h-line{
        width: 150px;
        margin: 0 auto;
        height: 2px;
      }
    </style>

    
</head>
<body class = "bg-light">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class = "fw-bold h-font text-center">About Us</h2>
  <div class="h-line bg-dark"></div>
  <p class = "text-center mt-3">The <strong>Founder</strong> of Hostellooo is <strong> Vikash Kumar </strong> <br> and the <strong>co-founder</strong> is <strong>Alok Ranjan</strong>.
  </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class = "mb-3">Lorem ipsum dolor sit.</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Inventore repellendus at perspiciatis voluptatem odit incidunt vero.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Inventore repellendus at perspiciatis voluptatem odit incidunt vero.
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about/vk.png" class = "w-100" alt="">
    </div>
  </div>
</div>


<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/hotel.svg" alt="" width="70px">
        <h4 class = "mt-3">100+ Rooms</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/customers.svg" alt="" width="70px">
        <h4 class = "mt-3">200+ CUSTOMERS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/rating.svg" alt="" width="70px">
        <h4 class = "mt-3">150+ Reviews</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/staff.svg" alt="" width="70px">
        <h4 class = "mt-3">100+ Staffs</h4>
      </div>
    </div>

  </div>
</div>

<h3 class = "my-5 fw-bold h-font text-center">Management Team</h3>


<div class="container px-4">
  <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/vk.png" alt="" width="w-100" height="500px">
          <h5 class = "mt-2">Vikash Kumar</h5>
        </div>
        
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/vk.png" alt="" width="w-100" height="500px">
          <h5 class = "mt-2">Alok Ranjan</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/vk.png" alt="" width="w-100" height="500px">
          <h5 class = "mt-2">Vikash Kumar</h5>

      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>

<?php require('inc/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 40,
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
          slidesPerView:3,
        },
        1024:{
          slidesPerView:3
        },
      }
  });
</script>



</body>
</html>
