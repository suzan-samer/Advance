<?php
session_start();

$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_POST['image'];

$data=[
    'name'=>$name,
    'price'=>$price,
    'image'=>$image
];



if(isset($_SESSION['cart'])){
    $_SESSION['cart'][$id]=$data;
}
else{
    $_SESSION['cart'][$id]=$data;
}
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
header("location: $_SERVER[HTTP_REFERER]");
