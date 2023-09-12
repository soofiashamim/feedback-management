<?php
session_start();
if (!isset($_SESSION['name'])) {
?>
  <script>
    alert("you are logged out");
    window.location.href = "admin_login.php";
  </script>
<?php
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="style.css" rel="stylesheet">
  <title>admin</title>

</head>

<body class="bg-right">

  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-10 col-11 mx-auto">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="http://localhost/internship/">User</a></li>
            <li class="breadcrumb-item"><a href="./home.php">Admin</a></li>
            <li class="breadcrumb-item" aria-current="page">Home</li>
          </ol>
        </nav>

        <div class="row">
          <!-- right side navbar -->
          <div class="col-lg-3 col-md-4 d-md-block">
            <div class="card bg-common card-left">
              <div class="card-body">
                <ul class="nav d-md-block d-none ">
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#home" class="nav-link active" href="#home"><i class="fa-solid fa-home mr-1"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#profile" class="nav-link" href="#profile"><i class="fa-solid fa-user mr-1"></i> Profile</a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#course" class="nav-link" href="#course"><i class="fa-solid fa-book"></i> Course </a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#department" class="nav-link" href="#department"><i class="fa-solid fa-building"></i> Department </a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#guide" class="nav-link" href="#guide"><i class="fa-solid fa-chalkboard-user"></i> Guide </a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#feedback" class="nav-link " href="#feedback"><i class="fa-solid fa-comment"></i> Feedback </a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#trainee" class="nav-link " href="#trainee"><i class="fa-solid fa-users"></i> Trainee </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="./logout.php"><i class="fa-solid fa-circle-xmark"></i> Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- right side div starts -->
          <div class="col-lg-8 col-md-9">
            <div class="card">
              <div class="card-header border-bottom mb-3 d-md-none">
                <ul class="nav nav-tabs card-header-tabs nav-fill">
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#home" class="nav-link active" aria-current="page" href="#home"><i class="fa-solid fa-home mr-1"></i></a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#profile" class="nav-link " aria-current="page" href="#profile"><i class="fa-solid fa-user mr-1"></i></a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#course" class="nav-link" href="#course"><i class="fa-solid fa-book"></i></a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#department" class="nav-link" href="#department"><i class="fa-solid fa-building"></i></a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#guide" class="nav-link" href="#guide"><i class="fa-solid fa-chalkboard-user"></i></a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#feedback" class="nav-link" href="#feedback"><i class="fa-solid fa-comment"></i></a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#trainee" class="nav-link" href="#trainee"><i class="fa-solid fa-users"></i></a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="logout" class="nav-link" href="./logout.php"><i class="fa-solid fa-circle-xmark"></i></a>
                  </li>
                </ul>
              </div>


              <!-- user profile starts -->
              <div class="card-body tab-content border-0">

                <!-- //actual home data -->
                <div class="tab-pane active" id="home">
                  <h1 class="text-center">WELCOME TO ADMIN DASHBOARD</h1>
                  <hr>
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="http://localhost/internship/assests/RR_BlogImage_Sliders-1.jpg" class="d-block w-100 h-50" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="http://localhost/internship/assests/850-X-400-copy-5.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="http://localhost/internship/assests/850X400.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <!-- //actual profile data -->
                <?php
                include 'dbcon.php';
                $n = $_SESSION['name'];
                // echo $un;
                $emailquery = "select * from a_login where name = '$n'";
                // echo $emailquery;
                $query = mysqli_query($con, $emailquery);
                while ($db_row = mysqli_fetch_array($query)) {
                  $nm = $db_row["name"];
                  $em = $db_row["email"];
                  $mob = $db_row["mobile"];
                  $dob = $db_row["dob"];
                  $gn = $db_row["gender"];
                  $pass = $db_row["password"];
                }

                if (isset($_POST['update'])) {
                  $name1 = mysqli_real_escape_string($con, $_POST['update_name']);
                  $email1 = mysqli_real_escape_string($con, $_POST['update_email']);
                  $mobile1 = mysqli_real_escape_string($con, $_POST['update_mobile']);
                  $dob1 = mysqli_real_escape_string($con, $_POST['update_dob']);
                  $gender1 = mysqli_real_escape_string($con, $_POST['update_gender']);
                  $pass2 = mysqli_real_escape_string($con, $_POST['update_password']);

                  $updatequery = "UPDATE `a_login` SET `name`=`$name1`,`email`=`$email1`,`mobile`=`$mobile1`,`dob`=`$dob1`,`gender`=`$gender1`,`password`=`$pass2` WHERE `name`=`$n`";
                  $uquery = mysqli_query($con, $updatequery);


                  //  add validation if query is updated or not using script tag
                }
                ?>
                <div class="tab-pane" id="profile">
                  <h1>YOUR PROFILE INFORMATION</h1>
                  <hr>
                  <div class="container mt-5">
                    <form id="editForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                      <input type="text" name="update_name" class="form-control mb-3" value="<?php echo $nm ?>" placeholder="Name" disabled>
                      <input type="email" name="update_email" class="form-control mb-3" value="<?php echo $em ?>" placeholder="Email" disabled>
                      <input type="tel" name="update_mobile" class="form-control mb-3" value="<?php echo $mob ?>" placeholder="Mobile" disabled>
                      <input type="date" name="update_dob" class="form-control mb-3" value="<?php echo $dob ?>" placeholder="Date of Birth" disabled>

                      <div class="mb-3">
                        <label for="form-check-input">Gender:&nbsp; &nbsp;</label>
                        <div class="form-check form-check-inline">

                          <input class="form-check-input" type="radio" name="update_gender" value="male" <?php if ($gn == "male") {
                                                                                                            echo "checked";
                                                                                                          } ?> disabled>
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="update_gender" value="female" <?php if ($gn == "female") {
                                                                                                              echo "checked";
                                                                                                            } ?> disabled>
                          <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="update_gender" value="others" <?php if ($gn != "female" and $gn != "male") {
                                                                                                              echo "checked";
                                                                                                            } ?> disabled>
                          <label class="form-check-label">Others</label>
                        </div>
                      </div>

                      <input type="password" class="form-control mb-3" name="update_password" value="<?php echo $pass ?>" placeholder="Password" disabled>

                      <button type="button" id="editButton" class="btn btn-primary">Edit</button>
                      <button type="submit" name="update" id="submitButton" class="btn btn-success" disabled>Update</button>
                      <button type="button" id="openModalButton" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal">Add New Admin</button>
                    </form>
                  </div>

                  <!-- Bootstrap Modal -->
                  <?php
                  if (isset($_POST['New_submit'])) {
                    $name = mysqli_real_escape_string($con, $_POST['New_name']);
                    $email = mysqli_real_escape_string($con, $_POST['New_email']);
                    $mobile = mysqli_real_escape_string($con, $_POST['New_mobile']);
                    $dob = mysqli_real_escape_string($con, $_POST['New_dob']);
                    $gender = mysqli_real_escape_string($con, $_POST['New_gender']);
                    $pass1 = mysqli_real_escape_string($con, $_POST['New_password']);

                    //encrypting mobile so as to make it password
                    // $pass1 = password_hash($password, PASSWORD_BCRYPT);
                    // validating email if it is already registered or not
                    $emailquery = " select * from a_login where email = '$email'";
                    $query = mysqli_query($con, $emailquery);
                    $emailcount = mysqli_num_rows($query);
                    if ($emailcount > 0) {
                  ?>

                      <script>
                        alert("email already exists");
                      </script>
                      <?php
                    } else {
                      $insertquery = "insert into a_login(name, email, mobile, dob, gender, password) values('$name','$email', '$mobile', '$dob', '$gender', '$pass1')";
                      $iquery = mysqli_query($con, $insertquery);

                      if ($iquery) {
                      ?>

                        <script>
                          alert("regiistration successful!");
                        </script>
                      <?php
                      } else {
                      ?>
                        <script>
                          alert("didnt register");
                        </script>
                  <?php

                      }
                    }
                  }
                  ?>
                  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">New Admin</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <div class="container mt-2">
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                              <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="New_name" id="New_name" placeholder="Enter your name">
                              </div>
                              <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="New_email" id="New_email" placeholder="Enter your email">
                              </div>
                              <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="tel" class="form-control" name="New_mobile" id="New_mobile" placeholder="Enter your mobile number">
                              </div>
                              <div class="mb-3">
                                <label for="dob" class="form-label">Date of
                                  Birth</label>
                                <input type="date" class="form-control" name="New_dob" id="New_dob">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="New_gender" id="male" value="male">
                                  <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="New_gender" id="female" value="female">
                                  <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="New_gender" id="others" value="others">
                                  <label class="form-check-label" for="others">Others</label>
                                </div>
                              </div>
                              <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="New_password" id="New_password" placeholder="Enter your password">
                              </div>
                              <button type="submit" name="New_submit" id="New_submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>

                        </div>
                        <div class="modal-footer mb-3">
                        </div>
                      </div>
                    </div>
                  </div>

                  <script>
                    document.getElementById("editButton").addEventListener("click", function() {
                      enableFields();
                    });

                    function enableFields() {
                      var fields = document.querySelectorAll(".form-control");
                      fields.forEach(function(field) {
                        field.removeAttribute("disabled");
                      });

                      var genderRadios = document.querySelectorAll(".form-check-input");
                      genderRadios.forEach(function(radio) {
                        radio.removeAttribute("disabled");
                      });

                      document.getElementById("submitButton").removeAttribute("disabled");
                    }
                  </script>

                </div>






                <!-- //actual course data -->
                <div class="tab-pane" id="course">
                  <!-- codeeeeeee -->
                  <h1>COURSES</h1>
                  <hr>
                  <?php
                  $result_course = mysqli_query($con, "SELECT * FROM `course_tbl`");
                  $i = 0;

                  while ($data = mysqli_fetch_array($result_course)) {
                    if ($i == 0) {
                  ?>
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              <?php echo $data['course']; ?>
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <!-- descriptyih -->
                              <?php echo $data['topics']; ?>
                            </div>
                          </div>
                        </div>
                      <?php } else {
                      ?>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading<?php echo $data['id'];  ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $data['id']; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $data['id']; ?>">
                              <?php echo $data['course']; ?>
                            </button>
                          </h2>
                          <div id="flush-collapse<?php echo $data['id']; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $data['id']; ?>" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <?php echo $data['topics']; ?>
                            </div>
                          </div>
                        </div>
                    <?php }
                    $i++;
                  } ?>


                    <!-- button trigger model -->
                    <div class="mt-4">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add New Course
                      </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <!-- model content here -->
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                              <div class="container mt-2">
                                <label for="fruitInput" class="form-label">Select
                                  Course:</label>
                                <input type="text" id="fruitInput" name="courses" class="form-control" list="fruitsList" placeholder="Type or select Course">
                                <datalist id="fruitsList">
                                  <option value="Software">
                                  <option value="Mechanical">
                                </datalist>
                              </div>

                              <div class="container mt-1">
                                <label for="fruitInput" class="form-label">Select
                                  Topic:</label>
                                <input type="text" id="fruitInput" name="topics" class="form-control" placeholder="Type the topic">
                              </div>

                              <div class="container mt-2">
                                <button type="submit" name="submit_new_course" id="submitButton" class="btn btn-primary">Submit</button>
                              </div>

                            </form>
                            <!-- model content end here -->
                          </div>
                          <div class="modal-footer mb-3">
                            <hr>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php
                    if (isset($_POST['submit_new_course'])) {
                      $courses = mysqli_real_escape_string($con, $_POST['courses']);
                      $topic = mysqli_real_escape_string($con, $_POST['topics']);

                      $insertCourseQuery = "insert into course_tbl(course, topics) values('$courses','$topic')";
                      $inquery = mysqli_query($con, $insertCourseQuery);

                      if ($inquery) {
                    ?>

                        <script>
                          alert("new course added successful!");
                        </script>
                      <?php
                      } else {
                      ?>
                        <script>
                          alert("could not add new course");
                        </script>
                    <?php

                      }
                    }
                    ?>
                    <!-- model end -->

                      </div>
                      <!-- codeeeeeee -->
                </div>

                <!-- //actual department data -->
                <div class="tab-pane" id="department">
                  <!-- codeeeeeeeeeeee -->

                  <h1>DEPARTMENTS</h1>
                  <hr>
                  <?php
                  $result_course2 = mysqli_query($con, "SELECT * FROM `department_tbl`");
                  $i2 = 0;

                  while ($data2 = mysqli_fetch_array($result_course2)) {
                    if ($i2 == 0) {
                  ?>
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              <?php echo $data2['dept']; ?>
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <?php echo $data2['descp']; ?>
                            </div>
                          </div>
                        </div>
                      <?php } else {
                      ?>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading<?php echo $data2['id'];  ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $data2['id'];  ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $data2['id'];  ?>">
                              <?php echo $data2['dept']; ?>
                            </button>
                          </h2>
                          <div id="flush-collapse<?php echo $data2['id'];  ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $data2['id'];  ?>" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <?php echo $data2['descp']; ?>
                            </div>
                          </div>
                        </div>
                    <?php }
                    $i2++;
                  } ?>

                    <!-- model code starts -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      Add New Department
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add New Department</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>


                          <div class="modal-body">
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                              <input class="form-control" type="text" name="dpt" placeholder="Department" aria-label="default input example">
                              <div class="form-floating mt-2 mb-2">
                                <textarea class="form-control" placeholder="Leave a comment here" name="dpt_des" id="floatingTextarea">
                                </textarea>
                              </div>
                              <button type="submit" name="dept_submit" id="submitButton" class="btn btn-primary">Submit</button>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <hr>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!-- model code ends -->
                    <?php
                    if (isset($_POST['dept_submit'])) {
                      $department = mysqli_real_escape_string($con, $_POST['dpt']);
                      $description = mysqli_real_escape_string($con, $_POST['dpt_des']);

                      $insertDeptQuery = "insert into department_tbl(`dept`, `descp`) values('$department','$description')";
                      $inDepquery = mysqli_query($con, $insertDeptQuery);

                      if ($inDepquery) {
                    ?>

                        <script>
                          alert("new department added successful!");
                        </script>
                      <?php
                      } else {
                      ?>
                        <script>
                          alert("could not add new departemnt");
                        </script>
                    <?php

                      }
                    }
                    ?>
                      </div>

                      <!-- codeeeeeeeeeeee -->
                </div>

                <!-- //actual guide data -->
                <div class="tab-pane" id="guide">
                  <!-- codeeeeeeeeeeee -->


                  <h1>GUIDES</h1>
                  <hr>

                  <?php
                  $sql = "SELECT * FROM `guide_tbl`";
                  $result_guide = mysqli_query($con, $sql);
                  $rowcount_guide = mysqli_num_rows($result_guide); ?>

                  <ul class="list-group list-group-flush">
                    <?php
                    while ($guide_names = mysqli_fetch_array($result_guide)) {
                    ?>
                      <li class="list-group-item"><?php echo $guide_names["guide"]; ?></li>
                    <?php
                    }
                    ?>
                  </ul>



                  <!-- add new Guide starts -->
                  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="input-group mb-3 mt-3">
                      <input type="text" class="form-control" name="guide_nm" placeholder="Add new Guide's Name" aria-label="Enter Guide Name" aria-describedby="button-addon2">
                      <button class="btn btn-outline-primary" name="guide_submit" type="submit" id="button-addon2">Submit</button>
                    </div>
                  </form>

                  <?php
                    if (isset($_POST['guide_submit'])) {
                      $guide = mysqli_real_escape_string($con, $_POST['guide_nm']);

                      $insertGuideQuery = "INSERT INTO `guide_tbl`(`guide`) VALUES ('$guide')";
                      $inGudquery = mysqli_query($con, $insertGuideQuery);

                      if ($inGudquery) {
                    ?>

                        <script>
                          alert("new guide added successful!");
                        </script>
                      <?php
                      } else {
                      ?>
                        <script>
                          alert("could not add new guide");
                        </script>
                    <?php
                      }
                    }
                    ?>

                  <!-- add new guide ends -->



                  <!-- codeeeeeeeeeeee -->
                </div>

                <!-- //actual feedback data -->
                <div class="tab-pane" id="feedback">
                  <h1>FEEDBACK REPORT</h1>
                  <hr>
                  <!-- feedback accordians started -->
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Department Wise
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Guide Wise
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Trainee Wise
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- feedback accordiands ended -->
                </div>

                <!-- //actual trainee data -->
                <div class="tab-pane" id="trainee">
                  <div class="container">
                    <div class="row">
                      <div class="col-7">
                        <h1>TRAINEE</h1>
                      </div>
                      <!-- <div class="col-5">
                        <div class="input-group">
                          <div class="form-outline">
                            <input type="search" id="form1" placeholder="Search" class="form-control" />
                          </div>
                          <button type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <hr>
                  <!-- carousal starts-->
                  <?php
                  $trainee_result = mysqli_query($con, "SELECT * FROM `registration`");
                  $rowcount_trainee = mysqli_num_rows($trainee_result); ?>

                  <ul class="list-group list-group-flush">
                    <?php
                    while ($trainee_names = mysqli_fetch_array($trainee_result)) {
                    ?>
                      <li class="list-group-item"><?php echo $trainee_names["name"]; ?></li>
                    <?php
                    }
                    ?>
                  </ul>
                  <!-- carousal ends -->

                  <!-- manage trainee button startssss -->
                  <div class="mt-3">
                    <a href="http://localhost/internship/admin/manage_trainee.php" class="btn btn-primary active" role="button" aria-pressed="true">Manage Trainee</a>
                  </div>
                  <!-- manage trainee endsssssssssssss -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>