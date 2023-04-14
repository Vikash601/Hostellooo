<nav class="navbar navbar-expand-lg navbar-light bg-dark px-lg-3 py-lg-2 shadow-sm sticty-top"> <!-- px paddind py right padding , shadow sm matlab halki si shadow -->
  <div class="container-fluid">
  <a class="navbar-brand me-2 fw-bold fs-3 h-font" href="index.php"><img src="default.png" alt="" width="40px"></a>
    <a class="navbar-brand me-5 fw-bold fs-3 h-font text-white" href="index.php">Hostellooo</a> <!-- index.php taaki is par click karega toh apne home page par aa jayega-->
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2 text-white" aria-current="page" href="index.php">Home</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="rooms.php">Hostels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-danger shadow-none me-lg-3 me-2 text-white" data-bs-toggle="modal" data-bs-target="#LoginModal">
        Login
        </button>

        <button type="button" class="btn btn-outline-danger shadow-none text-white" data-bs-toggle="modal" data-bs-target="#RegisterModal">
        Register
        </button>
      </div>
    </div>
  </div>
</nav>
    
<!-- Ye login ka ander wala part hai  -->
<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form>
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-circle fs-3 me-2"></i>
                    User Login
                    
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none">
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">
                </div>
                <div class = "d-flex align-items:center justify-content-between">
                    <button type = "submit" class = "btn btn-outline-danger shadow-none">Login</button>
                    <a href="javascript: void(0)" class = "text-secondary text-decoration-none">Forgot Password</a>
                </div>
            </div>
            
        </form>
    </div>
  </div>
</div>

<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"> <!-- modal-lg mtlab ki lari modal ko use kar rahe hain -->
    <div class="modal-content">
        <form>
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                    User Registration
                    
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base">Note : Your details must match with your ID (Aadhar card, Passport, Driving liscence, etc.)
              that will we required during entering in the Hostel.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none">
                </div>

                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">picture</label>
                <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Pincode</label>
                <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control shadow-none">
                </div>

              </div>
            </div>

            <div class="text-center my-1">
            <button type="submit" class="btn btn-outline-danger shadow-none">Register</button>
            </div>
                <!-- <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none">
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">
                </div>
                <div class = "d-flex align-items:center justify-content-between">
                    <button type = "submit" class = "btn btn-dark shadow-none">Login</button>
                    <a href="javascript: void(0)" class = "text-secondary text-decoration-none">Forgot Password</a>
                </div> -->
            </div>
            
        </form>
    </div>
  </div>
</div>