<?php
session_start();
include('config.php');

if (isset($_POST['btn'])) {

    $username = $_POST['uname'];
    $password = $_POST['pswd'];

    $sql = "SELECT * FROM doctor where uname = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    echo mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['pswd'] = $row['password'];
            header("location:index.php");
        }
    } else {
        header('Location:login.php?error=invalid username and password');
    }
}


mysqli_close($conn);
