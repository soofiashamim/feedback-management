<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(-45deg, #1e6ec1 50%, transparent 50%);
      color: black;
    }
    .container {
      margin-top: 50px;
    }
    .form-group textarea.form-control {
      resize: vertical;
      min-height: 200px;
    }
  </style>
</head>
<body>
  <div class="container">
    
    <div class="row">
      <div class="col-lg-6">
        <div class="container">
        <h1 class="display-2 fw-bold">TATA PRASHIKSHAN</h1>
        <p>Tata Steel is a leading steel manufacturing company.
          Tata Prashikshan is an educational institute under Tata Steel,
           offering vocational and training programs.</p>
        </div>
        
      </div>
      <div class="col-lg-6">
        <div class="container">
        <h4>Contact Form</h4>
    <form id="contactForm" method="post" action="send_email.php">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" required></textarea>
      </div>
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
        </div>
      </div>

    </div>
    <hr>
    
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
