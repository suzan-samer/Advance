<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Horror Movies</title>
    <link rel="stylesheet"href="css/all.min.css">
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <link rel="stylesheet"href="css/bootstrap.min.css">

    <link rel="stylesheet"href="css/style2.css">


    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: black;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: #fe4c50;
            color: black;

        }


        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;

            font-family: "Segoe Print";

        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.2%;
            padding-left: 25px;
            margin-left: 0px;

        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

    </style>



</head>
<body>
<div id="preloder" style="display: none;">
    <div class="loader" style="display: none;"></div>
</div>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">

                    <a href="ll.php" class="site-logo">
                        <img src="7.png" height="40px"width="40px" alt=" MovieStore">
                    </a>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="far fa-user"></i>


                                <span>1</span>
                            </div>
                            <a href="personal.php">My Account</a> <i class="fas fa-heart"style="color: darkred"></i><a href="Wishlist.php"> Fav</a><i class="fas fa-sign-out-alt"style="color: black"></i><a href="f.php"> LogOut</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar"style="background-color: darkred">
        <div class="container"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                    <li><a href="f.php" role="menuitem" >Home</a></li>
                    <li><a href="Action.php" role="menuitem" >Action Movie</a></li>
                    <li><a href="Romance.php" role="menuitem" >Romance Movie</a></li>
                    <li><a href="Horror.php" role="menuitem" >Horror Movie
                            <span class="new">New</span>
                        </a></li>
                    <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="#" tabindex="-1">Kids Movie</a>
                            <span class="slicknav_arrow"><i class="flaticon-right-arrow"></i></span></a><ul class="sub-menu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                            <li><a href="kids.php" role="menuitem" >SpONGbOB</a></li>
                            <li><a href="kids.php" role="menuitem" >Gambol</a></li>
                            <li><a href="des.php" role="menuitem" >Desni</a></li>
                            <li><a href="kids.php" role="menuitem" ></a></li>
                            <li><a href="kids.php" role="menuitem" ></a></li>
                        </ul>
                    </li>

                </ul></div>

            <ul class="main-menu" style="background-color: darkred;c">
                <li><a href="f.php">Home</a></li>
                <li><a href="Action.php">Action Movie</a></li>
                <li><a href="Romance.php">Romance Movie</a></li>
                <li><a href="Horror.php">Horror Movie
                        <span class="new">New</span>
                    </a></li>
                <li><a href="kids.php">Kids Movie</a>
                    <ul class="sub-menu">
                        <li><a href="kids.php">All Movies</a></li>
                        <li><a href="kids.php">Animation</a></li>
                        <li><a href="kids.php">SpongBob</a></li>
                        <li><a href="kids.php">Gambol</a></li>
                        <li><a href="des.php">Desni</a></li>

                    </ul>
                </li>
                <li><a href="Drama.php">Drama Movie</a>
                    <ul class="sub-menu">
                        <li><a href="Drama.php">Tv Show</a></li>
                        <li><a href="Drama.php">Movies</a></li>

                    </ul>
                </li>

                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
</header>
<br>
<br>
<br>

<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th class="shoping__product" style="font-family: cursive;font-size: xxx-large;color: darkred">Welcome To My Wishlist !</th>


                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- start  cart  -->
                        <?php
                        // echo '<pre>';
                        // print_r($_SESSION['cart']);
                        // echo '</pre>';
                        foreach( $_SESSION['cart'] as $id=>$prod){

                            ?>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="image/<?=$prod['image']?>" height="140px"width="100px" alt="">
                                    <h5><?=$prod['name']?></h5>
                                </td>



                                <td class="shoping__cart__item__close">
                                    <a href="include/deleteFromWishlist.php?id=<?=$id?>" class="fas fa-trash-alt fa-1x" style="color: #fe4c50;text-decoration: none"> Remove</a>
                                </td>
                            </tr>
                        <?php } ?>
                        <!-- end cart -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>









<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="main.js"></script>


</body>
</html>

