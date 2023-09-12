<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
    <title>Document</title>


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
    <div class="main_div col-lg-8 mx-auto card shadow-lg">
        <div class="card">
            <div class="card-header text-center">
                <h2>TRAINEE INFORMATION</h2>
            </div>
            <div class="card-body">
                <form id="editForm">
                    <!-- <input type="text" class="form-control mb-3" placeholder="Name" > -->

                    <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option selected>Choose trainee</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <button class="btn btn-outline-secondary" type="button">Search</button>
</div>
<div class="mb-3">
                        <label for="form-check-input">Gender:&nbsp; &nbsp;</label>
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="radio" name="gender" value="male" disabled>
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="female" disabled>
                            <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="others" disabled>
                            <label class="form-check-label">Others</label>
                        </div>
                    </div>
                    
                    <input type="email" class="form-control mb-3" placeholder="Email" disabled>
                    <input type="tel" class="form-control mb-3" placeholder="Mobile" disabled>
                    <input type="date" class="form-control mb-3" placeholder="Date of Birth" disabled>
                    <input type="text" class="form-control mb-3" placeholder="College" disabled>
                    <input type="text" class="form-control mb-3" placeholder="Course" disabled>
                    <input type="text" class="form-control mb-3" placeholder="Department">
                    <input type="text" class="form-control mb-3" placeholder="Guide">
                    <input type="text" class="form-control mb-3" placeholder="Project">

                    

                    <!-- <input type="password" class="form-control mb-3" placeholder="Password" disabled> -->

                    <!-- <button type="button" id="editButton" class="btn btn-primary">Edit</button> -->
                    <button type="submit" id="submitButton" class="btn btn-success">Update</button>
                    <a href="add_trainee.php"><button type="button" class="btn btn-success">Add</button></a>
                    <a href="./home.php"><button type="button" class="btn btn-primary" >Back</button></a>
                </form>

                

                

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
</body>

</html>