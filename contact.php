<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title>Hostellooo-CONTACT</title>
  <style>
    .h-line{
          width: 150px;
          margin: 0 auto;
          height: 2px;
        }
  </style>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Temporibus incidunt odio quos <br> dolore commodi repudiandae 
      tenetur consequuntur et similique asperiores.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">

        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115132.86107261963!2d85.07300207866918!3d25.608175570214517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1677068447827!5m2!1sen!2sin" loading="lazy"></iframe>

          <h5>Address</h5>
          <a href="https://goo.gl/maps/XoK78HFxkLLD67aJ7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i>Amity University Patna
          </a>

          <h5 class="mt-4">Call us</h5>
          <a href="tel: +917992264586" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91 7992264586
          </a>
          <br>
          <a href="tel: +917992264586" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91 7992264586
          </a>
          <br>
        


          <h5 class="mt-4">Email</h5>
          <a href="mailto: ask.vikashkumar@gmail.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> vikashkumar@gmail.com
          </a>

          <h5 class="mt-4">Follow us</h5>
          

          <a href="https://www.twitter.com/" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
          </a>
          <a href="https://www.facebook.com/" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="https://www.instagram.com/" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i>
          </a>
          
        </div>
      </div>


      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form method="POST">
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type = "text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white btn-danger btn-outline-success mt-3">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>

</body>
</html>