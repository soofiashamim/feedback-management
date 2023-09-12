<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login_form</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .btn {
      margin: 0px;
    }

    .main_div {
      width: 100%;
      height: 100%;
      position: relative;
    }

    .card {
      width: 400px;
      height: auto;
      top: 50%;
      left: 50%;
      position: absolute;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body>

  <?php
  include 'dbcon.php';

  if (isset($_SESSION['name'])) {
    header('location:home.php');
  }

  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from a_login where email= '$email'";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {
      $email_pass =  mysqli_fetch_assoc($query);

      $dbpass = $email_pass['password'];

      $_SESSION['name'] = $email_pass['name'];

      $pass_decode = 1;
      $pass_decode = strcmp($dbpass, $password);

      if ($pass_decode == 0) {
        echo "Login successfull";
        echo $email_pass['name'];
  ?><script>
          location.replace("home.php");
        </script>
  <?php
      } else {
        echo "password incorrect";
      }
    } else {
      echo "Invalid Email";
    }
  }
  ?>

  <div class="main_div col-lg-8 mx-auto card shadow-lg">
    <div class="card">
      <div class="card-header text-center">
        <h2>Admin Login</h2>
      </div>
      <div class="card-body">

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

          <div class="form-outline">
            <input type="email" id="email" name="email" class="form-control" style="margin-bottom: 20px;" />
            <label class="form-label" for="email">Username/Email</label>
          </div>

          <div class="form-outline">
            <input type="password" name="password" id="password" class="form-control form-control" style="margin-bottom: 20px;" />
            <label class="form-label" for="password">Password</label>
          </div>


          <button class="btn btn-primary btn-block" type="submit" name="submit">Login</button>
        </form>

      </div>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>