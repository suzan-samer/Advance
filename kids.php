<?php
require_once("include/connect.php");
require_once("include/getKids.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kids Movies</title>
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

<!-- Container for the image gallery -->
<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="image/gg.jpg" style="width:100%;height:450px">
    </div>


    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Image text -->
    <div class="caption-container">
        <p id="caption"></p>
    </div>


    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>



    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="Action.php">Action Movie</a></li>
                            <li><a href="Romance.php">Romance Movie</a></li>
                            <li><a href="Horror.php">Horror Movie</a></li>
                            <li><a href="kids.php">Kids Movie</a></li>
                            <li><a href="Drama.php">Drama Movie</a></li>
                        </ul>
                    </div>




                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">

                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting" style="display: none;">

                                    </select><div class="nice-select sorting" tabindex="0"><ul class="list"></ul></div>
                                    <select class="p-show" style="display: none;">

                                    </select><div class="nice-select p-show" tabindex="0"><ul class="list"></ul></div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <?php
                            while($product=mysqli_fetch_assoc($productResult)){
                                // print_r($product);
                                ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="image/<?=$product['product_image1']?>" onmouseover="this.src=`image/<?=$product['product_image2']?>`;" onmouseout="this.src=`image/<?=$product['product_image1']?>`;" alt="">
                                            <div class="sale pp-sale"><?=$product['product_sale']?> Star</div>
                                            <div class="icon">
                                                <form action="include/addToWishlist.php" method="post">
                                                    <input type="hidden" name="id" value="<?=$product['product_id']?>">
                                                    <input type="hidden" name="name" value="<?=$product['product_name']?>">
                                                    <input type="hidden" name="price" value="<?=$product['product_price']?>">
                                                    <input type="hidden" name="image" value="<?=$product['product_image1']?>">

                                                    <li  style="list-style: none" class="w-iconn active" >
                                                        <button onclick="showw()" style="background-color: white;border:none;height: 30px;width: 30px;padding-bottom: 1px; border-radius: 20px ;border: #ff0000 3px"><i style="list-style: none;" class="fas fa-heart" ></i></button>

                                                        <script>
                                                            function showw(){
                                                                alert("Added To Wishlist Sucssesfully !");
                                                            };
                                                        </script>
                                                    </li>
                                                </form>
                                            </div>


                                            <ul>

                                                <li class="quick-view"><a href="KiDe.php?id=<?=$product['product_id']?>">+ Quick View</a></li>
                                            </ul>

                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name"><?=$product['cat_name']?></div>
                                            <a href="#">
                                                <h5 class="suz"><?=$product['product_name']?></h5>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

    </section>

    <section>



        <!-- Footer Start -->
        <!-- <div class="footer">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-3 col-md-6">
                         <div class="footer-widget">
                             <h2>Get in Touch</h2>
                             <div class="contact-info">
                                 <p><i class="fa fa-envelope"></i>suzansamer772@gmail.com</p>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-3 col-md-6">
                         <div class="footer-widget">
                             <h2>Follow Us</h2>
                             <div class="contact-info">
                                 <div class="social">
                                     <a href=""><i class="fab fa-twitter"></i></a>
                                     <a href=""><i class="fab fa-facebook-f"></i></a>
                                     <a href=""><i class="fab fa-linkedin-in"></i></a>
                                     <a href=""><i class="fab fa-instagram"></i></a>
                                     <a href=""><i class="fab fa-youtube"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-3 col-md-6">
                         <div class="footer-widget">
                             <h2>Company Info</h2>
                             <ul>
                                 <li><a href="about.html">About Us</a></li>

                             </ul>
                         </div>
                     </div>


                 </div>

             </div>
         </div>-->


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="main.js"></script>
    </section>
</body>
</html>
