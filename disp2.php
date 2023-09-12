<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Information</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background: #1e6dc163;
    }

    .container {
      padding: 20px;
      background: white;
    }
  </style>
</head>

<body>
  <?php 
  session_start();

  include 'dbcon.php';

    $un= $_SESSION['username'];
      // echo $un;
      $emailquery = "select * from registration where name = '$un'";
      // echo $emailquery;
      $query = mysqli_query($con, $emailquery);
      while($db_row=mysqli_fetch_array($query))
      {
        $em = $db_row["email"];
        $gn = $db_row["gender"];
        $dob = $db_row["dob"];
        $mob = $db_row["mobile"];
      }

      $query = mysqli_query($con, "select * from comp_reg where email = '$em'");

      while($db_row=mysqli_fetch_array($query))
      {
        $cr = $db_row["course"];
        $cllg = $db_row["college"];
        $dpt = $db_row["department"];
        $guide = $db_row["guide"];
        $proj = $db_row["project"];
      }

  $emailcount = mysqli_num_rows($query);
  if(!$emailcount) {?>
    <script>
          alert("you have to register full information before displaying information");
          window.location.href = "./comp_reg.php";
        </script>
    <?php
    }

  ?>
  <div class="container">
    <h2>User Information</h2>
    <form id="userForm">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" value="<?php echo $em ?>" readonly>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control"  value="<?php echo $un ?>" id="name" readonly>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" disabled>
          <option value="Male" <?php if($gn == "Male"){ echo "selected";} ?> >Male</option>
          <option value="Female" <?php if($gn == "Female"){ echo "selected";} ?> >Female</option>
          <option value="other" <?php if($gn != "Female" and $gn != "Male"){ echo "selected";} ?> >Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" value="<?php echo $dob ?>" class="form-control" id="dob" readonly>
      </div>
      <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="tel" value="<?php echo $mob ?>" class="form-control" id="contact" readonly>
      </div>
      <div class="form-group">
        <label for="course">Course:</label>
        <input type="text" class="form-control" value="<?php echo $cr ?>" id="course" readonly>
      </div>
      <div class="form-group">
        <label for="college">College:</label>
        <input type="text" class="form-control" value="<?php echo $cllg ?>" id="college" readonly>
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" class="form-control" value="<?php echo $dpt ?>" id="department" readonly>
      </div>
      <div class="form-group">
        <label for="guide">Guide Name:</label>
        <input type="text" value="<?php echo $guide ?>" class="form-control" id="guide" readonly>
      </div>
      <div class="form-group">
        <label for="projectTitle">Project Title:</label>
        <input type="text" value="<?php echo $proj ?>" class="form-control" id="projectTitle" readonly>
      </div>
      <a href="./disp.php"><button type="button" class="btn btn-primary" id="editButton">Edit</button></a>
      <a href="./home.php"><button type="button" class="btn btn-secondary" id="backButton">Back</button></a>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
</body>

</html>