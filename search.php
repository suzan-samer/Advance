<?php
session_start();
include('include/connect.php');

if(isset($_POST['submit'])){
    $name=$_GET['product_name'];
    $sql = "SELECT * FROM shop WHERE name like '%$name%'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_all($result);


}




?>

