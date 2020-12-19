<?php
session_start();
if (isset($_SESSION['uname'])) {
   if ($_SESSION['uname'] != null) {
      header('Location:dashboard.php');
   }
}

?>

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
   <title>Login</title>

</head>

<body>
   <div class="container-fluid-lg">
      <div class="row justify-content-center">
         <div class="col-12 col-sm-6 col-md-3">
            <div class="form-container">
               <h2>Login</h2>
               <form action="loginserver.php" method="post">
                  <div class="form-group">
                     <label class="form-text-sm" for="uname">User Name:</label>
                     <input class="form-control form-control-sm" type="text" placeholder="User Name" name="uname" required>
                  </div>

                  <div class="form-group">
                     <label for="pwd">Password:</label>
                     <input class="form-control form-control-sm" type="password" placeholder="Enter password" name="pswd" required>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block form-control form-control-sm" name="btn">Login</button>

                  <a class="backpage" href="index.php">back to homepage</a>
                  <a class="backpage" href="register.php">don't have an account </a>

                  <?php
                  if (isset($_GET['error'])) {
                  ?>
                     <div class="alert alert-danger text-center" role="alert">
                        <?php echo $_GET['error']; ?>
                     </div>
                  <?php } ?>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

</html>