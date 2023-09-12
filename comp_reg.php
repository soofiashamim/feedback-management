<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>compelete registration</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      
    }

    .parent_div {
      width: 100vw;
      height: 100vh;
      /* max-height: fit-content; */
      position: relative;

      /* another way making the div in center through flexbox */
      /* display: flex;
      justify-content: center;
      align-items: center; */
      
      /* 3rd way  of centerin a div */
      /* display: grid;
      place-items: center; */
    }

    .parent_div{      
      background: linear-gradient(-45deg, #1e6ec1 50%, transparent 50%);
    }

    .child_div {
      background-color: #ebeff3;
      width: 50vw;
      /* height: 60vh; */
      /* height: fit-content; */
      text-align: center;
      border-radius: 10px;
      box-shadow: 1px 1px 5px;
      padding: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .reg_form{
      text-align: left;
      height: fit-content;
    }
   
    button{
      width:100%;
      margin-top: 15px;
      justify-content: center;
      text-align: center;
    }
    
  </style>
</head>

<body>
  <?php 
  include 'dbcon.php';
$un= $_SESSION['username'];
$emailquery = "select email from registration where name = '$un'";
$query = mysqli_query($con, $emailquery);
while($db_row=mysqli_fetch_array($query))
{
  $em = $db_row["email"];
}

$query = mysqli_query($con, "select * from comp_reg where email = '$em'");
  $emailcount = mysqli_num_rows($query);
  if($emailcount)
  {?>
  <script>
        alert("you have already registered");
        window.location.href = "./home.php";
      </script>
  <?php
  }

if(isset($_POST['submit'])){
$course = mysqli_real_escape_string($con,$_POST['course']);
$college = mysqli_real_escape_string($con,$_POST['college']);
$dept = mysqli_real_escape_string($con,$_POST['dept']);
$guide = mysqli_real_escape_string($con,$_POST['guide']);
$proj = mysqli_real_escape_string($con,$_POST['proj']);

// echo $em;
// echo $course;
// echo $college;
// echo $dept;
// echo $guide;
// echo $proj;


    // insert record  
    $insertquery = "insert into comp_reg (email, course, college, department, guide, project) values('$em', '$course', '$college', '$dept', '$guide', '$proj')";
    $iquery = mysqli_query($con, $insertquery);

    if($iquery){
      header('location:home.php');
      echo "query inserted";
      
    }
    else{
      echo "error inserting";
    }
  

}

?>

  <div class="parent_div" id="p">
    <div class="child_div">
      <h2>Registration form</h2>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
          <div class="reg_form">
          <div class=" mb-3 input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Email</span>
            <input type="email" name="email" class="form-control" value="<?php echo $em?>" disabled aria-label="Username" aria-describedby="addon-wrapping">
          </div>

          <?php
          $country_res = mysqli_query($con, "SELECT * FROM `course_tbl`");
          $row_count_course = mysqli_num_rows($country_res);
          ?>

          <div class="mb-3">
            <select class="form-select" name="course" aria-label="course example">
              <option selected>Select your Course</option>
              <?php for($i=1; $i<=$row_count_course; $i++){
                $country_row = mysqli_fetch_array($country_res);
               ?>
              <option value="<?php echo $country_row["course"]; ?>"><?php echo $country_row["course"]; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <input type="text" name="college" class="form-control" placeholder="College" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
                        <select class="form-select" name="dept" aria-label="dept example">
              <option selected>Select Department</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="mb-3">
          
            <select class="form-select" name="guide" aria-label="guide example">
              <option selected>Select Guide</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="mb-3">
            <input type="text" name="proj" class="form-control" placeholder="Project Title" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
          <div>
            <button type="submit" name="submit" class="btn btn-dark btn-block mx-1">Submit Form</button>
          </div>
          
        </form>
      
         
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</body>

</html>