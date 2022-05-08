<?php
$prodId=$_GET['id'];
// echo "id".$prodId;
$getProduct="SELECT `product`.`id` as 'product_id',`product`.`name` as 'product_name',`product`.`image1` as 'product_image1',`product`.`image2` as 'product_image2' , `product`.`price` as 'product_price', `product`.`review` as 'product_review', `product`.`available` as 'product_available' , `category`.`name` as 'cat_name'
FROM `product` JOIN `category` ON `product`.`cat_id`=`category`.`id` WHERE `category`.`id`='6' AND `product`.`id`='$prodId' ";
$productResult=mysqli_query($conn,$getProduct);
$productRes=mysqli_fetch_assoc($productResult);

// echo '<pre>';
// print_r($productRes);
// echo '</pre>';

