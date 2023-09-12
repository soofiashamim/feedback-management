<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "please login to give your valuable feedback";
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <style>
td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:10px;
  text-align: center;
  height: 10%;
  width: 10%;
}

th{
  text-align: center;
  padding: 10px;
}

h1, h5{
  color: #3B71CA;
  text-align: center;
  margin: 0px;
}

#sub{
  background-color: rgba(59, 135, 217);
  width: 250px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  border-radius: 8px;
  padding: 12px 28px;
  font-size: 15px;
  margin-top: 8px;
  margin-bottom: 8px;
  position: absolute;
  left: 38%;
}
.desp{
  background-color: rgba(59, 135, 217, 0.5);
  border: 1px solid black;
  margin-top: 10px;
  margin-bottom: 20px;
  text-align: center;
}
.desp-head{
  margin-bottom: 0px;
}

.quest{
  position: relative;
}
.main{
  height:80%;
  width:70%;
  margin: 15%;
  margin-top: 0%;
  margin-bottom: 0%;
  padding-bottom :5%;
}
</style>
</head>
<body>

<?php
    include 'dbcon.php';

    $un= $_SESSION['username'];
      // echo $un;
      $emailquery = "select email from registration where name = '$un'";
      // echo $emailquery;
      $query = mysqli_query($con, $emailquery);
      while($db_row=mysqli_fetch_array($query))
      {
        $em = $db_row["email"];
        echo $db_row["email"];
      }

      $query = mysqli_query($con, "select * from comp_reg where email = '$em'");
  $emailcount = mysqli_num_rows($query);
  if(!$emailcount) {?>
    <script>
          alert("you have to register full information before submitting feedback.");
          window.location.href = "./comp_reg.php";
        </script>
    <?php
    }

    if(isset($_POST['submit'])){

      
      echo $em;
      $feedback1 = mysqli_real_escape_string($con,$_POST['answer1']);
      echo $feedback1;
      $feedback2 = mysqli_real_escape_string($con,$_POST['answer2']);
      echo $feedback2;
      $feedback3 = mysqli_real_escape_string($con,$_POST['answer3']);
      echo $feedback3;
      $comments = mysqli_real_escape_string($con,$_POST['comments']);
      echo $comments;
      


  
  $query = mysqli_query($con, "select * from feedback where email = '$em'");
  $emailcount = mysqli_num_rows($query);
  if($emailcount)
  {
    // update record
    echo "you need to update";
  }
  else
  {
    // insert record  
    $insertquery = "insert into feedback (email, feedback1, feedback2, feedback3, comments) values('$em', '$feedback1', '$feedback2', '$feedback3', '$comments')";
    $iquery = mysqli_query($con, $insertquery);

    if($iquery){
      echo "query inserted";
    }
    else{
      echo "error inserting";
    }
  }
     }
?>

<div class="main">
  
    <h1>TATA PARIKSHAN</h1>
    <h5>moulding careers...</h5>

<div class="desp">
  <div class="desp-head">
    <h3>Welcome <?php echo $_SESSION['username']; ?>, to our feedback portal!</h3>
</div>
    <p style="margin-top: 0px">We value your feedback.<br> Please complete the following form and help us improve our customer experience.</p>
</div>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">


    <table>
  <tr>
    <th></th>
    <th>Very Satisfied </th>
    <th>Satisfied </th>
    <th>Neutral </th>
    <th>Unsatisfied </th>
    <th>Very Unsatisfied </th>
  </tr>
  <tr>
    <td style="text-decoration: solid; border: none">How satisfied are you with our product?</td>
    <td><input type="radio" name="answer1" value="Very Satisfied"></td>
    <td><input type="radio" name="answer1" value="Satisfied"></td>
    <td><input type="radio" name="answer1" value="Neutral"></td>
    <td><input type="radio" name="answer1" value="Unsatisfied"></td>
    <td><input type="radio" name="answer1" value="Very Unsatisfied"></td>
  </tr>

  <tr>
    <td style="text-decoration: solid; border: none">How satidsfied are you with our service?</td>
    <td><input type="radio" name="answer2" value="Very Satisfied"></td>
    <td><input type="radio" name="answer2" value="Satisfied"></td>
    <td><input type="radio" name="answer2" value="Neutral"></td>
    <td><input type="radio" name="answer2" value="Unsatisfied"></td>
    <td><input type="radio" name="answer2" value="Very Unsatisfied"></td>
  </tr>

  <tr>
    <td style="text-decoration: solid; border: none">How satisfied are you with our teams?</td>
    <td><input type="radio" name="answer3" value="Satisfied"></td>
    <td><input type="radio" name="answer3" value="Very Satisfied"></td>
    <td><input type="radio" name="answer3" value="Neutral"></td>
    <td><input type="radio" name="answer3" value="Unsatisfied"></td>
    <td><input type="radio" name="answer3" value="Very Unsatisfied"></td>
  </tr>
</table>


<div class="quest">
<p>Tell us how can we improve?</p>
</div>
<div class="cmt">
<textarea name="comments" rows="2" cols="116">
</textarea>
<br>
<button type="submit" name="submit" class="btn btn-dark btn-block mx-1">Submit Form</button>
</div>


</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>
</html>