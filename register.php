<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>Registration</title>
</head>
<body>
<div class="container-fluid-lg">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-md-3">
<div class="form-container">
  <h2>Registration</h2>
  <form  action="register_action.php" method="POST">
    <div class="form-group">
      <label class="form-text-sm" for="uname">User Name:</label>
      <input type="text" class="form-control form-control-sm" placeholder="User Name" name="uname" required>
	</div>
	<div class="form-group">
    <label for="phone">Phone no:</label>
    <input type="text" class="form-control form-control-sm" placeholder="Enter phone no" name="pno" required>
  </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password"  class="form-control form-control-sm" placeholder="Enter password" name="pswd" required>
	</div>
	<div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control form-control-sm"  placeholder="Enter age" name="age" required>
	</div>
	<div class="form-group">
      <label for="degree">Degree:</label>
      <input type="text" class="form-control form-control-sm" placeholder="Ex: MBBS,FCPS...." name="deg" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block form-control form-control-sm">Submit</button>

            <a class="backpage" href="login.php">already have an account</a>
  </form>
  </div>
  </div>
</div>
</div>
</body>
</html>