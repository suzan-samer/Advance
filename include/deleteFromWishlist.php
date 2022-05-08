<?php
session_start();
echo $id=$_GET['id'];

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

unset($_SESSION['cart'][$id]);

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

header("location: $_SERVER[HTTP_REFERER]");
