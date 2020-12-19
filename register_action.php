<?php
include('config.php');
$sql = "INSERT INTO doctor(phone,uname,password,age,degree)
    values('$_POST[pno]','$_POST[uname]','$_POST[pswd]','$_POST[age]', '$_POST[deg]') ";

if (mysqli_query($conn, $sql)) {

   header('location:login.php');
} else {

   echo "insert failed:" . mysqli_error($conn);
}

mysqli_close($conn);
