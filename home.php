<?php
session_start();

if(!isset($_SESSION['username'])){
  
    echo "you are logged out";
    header('location:login.php');
}


?>
<!DOCTYPE html>
<html lang="em">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <title>Feedback system</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

  <style>
    .btn {
      margin: 0px;
    }
  </style>
</head>
<body>

<?php
include 'dbcon.php';
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom: 2px;">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#" style="margin-left: 2px;">
          <h4 style="font-size: 35px; margin-bottom: 0px; margin-top: 0px; padding-top: 0px; padding-bottom: 0px;">SNTI</h4>
        </a>
        <!-- Left links -->
        
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
            <a class="nav-link" href="./contactUs.php">Contact</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Admin</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

   <!-- Hero Image/ banner -->
   <div class="d-flex shadow" style="height:550px; background: linear-gradient(-45deg, #1e6ec1 50%, transparent 50%);">
    <div class="container-fluid my-auto">
      <div class="row">
        <div class="col-lg-6 my-auto">
          <h5 class="display-3 fw-bold">Welcome, <?php echo $_SESSION['username']; ?> !</h5>
          <h6><i>Your valuable feedback matters...</i></h6>
          <p>
            Before we proceed with the feedack, we would like you to complete your registration.
          </p>
          
          <a href="comp_reg.php" class="btn btn-lg btn-primary">Full Registration</a>
          <a href="feedback.php" class="btn btn-lg btn-primary">Feedback</a>
          <a href="disp2.php" class="btn btn-lg btn-primary">Display Information</a>
        </div>
        <!-- <div class="col-lg-6">
          <div class="col-lg-8 mx-auto card shadow-lg">
            <div class="card-body">
              <h3>Register Here</h3>
              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">


                <div class="form-outline">
                  <input type="text" required name="name" id="formControlLg" class="form-control form-control" style="margin-bottom: 20px;" />
                  <label class="form-label" for="formControlDefault">Your Name</label>
                </div>

                <div class="form-outline">
                  <input type="email" required name="email" id="email" class="form-control" style="margin-bottom: 20px;" />
                  <label class="form-label" for="email">Your Email</label>
                </div>

                <div class="form-outline">
                  <input type="text" required name="mobile" id="mobile" class="form-control form-control" style="margin-bottom: 20px;" />
                  <label class="form-label" for="mobile">Your Mobile</label>
                </div>

                <div class="form-outline">
                  <input type="date" required name="dob" id="date of birth" class="form-control form-control" style="margin-bottom: 20px;" />
                  <label class="form-label" for="date of birth">Date of Birth</label>
                </div>

                <div class="form-outline form-control form-control" name="gender" id="gender" style="margin-bottom: 20px;" >
                  <label class="form-label" for="gender">Gender : </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" checked type="radio" name="gender" id="male" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                  </div>
                </div>

                <button type="submit" name="submit" class="btn btn-dark btn-block">Submit Form</button>
              </form>
            </div>
          </div>
        </div> -->

      </div>
      
     
    </div>
  </div>
<!-- hero imge close -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>



</body>

</html>