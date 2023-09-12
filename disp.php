<!DOCTYPE html>
<html>
<head>
  <title>User Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background: #1e6dc163;
    }
    
    .container {
      margin-top: 50px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    .form-group input[type="text"],
    .form-group select {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
    .btn {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-group">
        <h1>User Information</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" value="John Doe">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" id="email" value="johndoe@example.com" >
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      <select id="gender" disabled>
        <option value="male" selected>Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="text" id="dob" value="1990-01-01" >
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" id="contact" value="1234567890" >
    </div>
    <div class="form-group">
      <label for="course">Course:</label>
      <input type="text" id="course" value="Computer Science" >
    </div>
    <div class="form-group">
      <label for="college">College:</label>
      <input type="text" id="college" value="ABC College" >
    </div>
    <div class="form-group">
      <label for="department">Department:</label>
      <input type="text" id="department" value="IT" >
    </div>
    <div class="form-group">
      <label for="guide">Guide Name:</label>
      <input type="text" id="guide" value="Dr. Smith" >
    </div>
    <div class="form-group">
      <label for="project">Project Title:</label>
      <input type="text" id="project" value="Web Development" >
    </div>
    <div class="text-center">
      <a href="./disp2.php" class="btn btn-primary">Back</a>
      <a href="./home.php" class="btn btn-success">Update</a>
    </div>
  </div>
</body>
</html>
