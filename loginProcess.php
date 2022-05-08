<?php
session_start();
include('include/connect.php');

if(isset($_POST['submit'])){
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = $_POST['password'];

     $sql = "SELECT * FROM users WHERE email='$email' ";
     echo "$email";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
 $dbStoredPASSWORD = $row['password'];

if (password_verify ($password, $dbStoredPASSWORD)) {
     $_SESSION['customer'] = $email;
     $_SESSION['customerid'] = $row['id'];
     header('location:firstpage.php');
  } else {
    header('location:f.php?message=1');

//    $message =  'incorrect Credentials';
  }
}


?>