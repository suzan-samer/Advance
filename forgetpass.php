<?php
session_start();
include('include/connect.php');

error_reporting(0);
$errors ='';
if(isset($_POST['forget']))
{
    $Pass=$_POST['email'];
    $User=$_POST['password'];
    $stmt=$conn->prepare
    ("update loginform set Pass=? where User=?");
    $stmt->bind_param("ss",$password,$email);
    if($stmt->execute())
    {
        echo '<script type="text/javascript">
             alert("your password was updated go back to login page");
              header("Location:f.php");
              </script>';
    }
    else
        echo '<script type="text/javascript">
             alert("Sorry, Your emails does not exists in our record database");
              </script>';

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet"href="css/all.min.css">
    <link  rel="stylesheet" href="style.css">

    <link rel="stylesheet"href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <style>


        html,
        body {
            height: 100%;
            font-family: 'Josefin Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }



        /* footer */

        .footer {
            position: relative;
            padding: 30px 0 0 0;
            background: #f54949;
            color: white;
        }


        .footer .footer-widget {
            position: relative;
            width: 100%;
            margin-bottom: 30px;
            color: white;
        }

        .footer .footer-widget h2 {
            font-size: 25px;
            white-space: nowrap;
            margin-bottom: 20px;
        }

        .footer .footer-widget ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .footer .footer-widget ul li {
            margin-bottom: 12px;
        }

        .footer .footer-widget ul li:last-child {
            margin-bottom: 0;
        }

        .footer .footer-widget ul li a {
            color: #353535;
            white-space: nowrap;
            display: block;
            line-height: 23px;
            transition: all .3s;
        }

        .footer .footer-widget ul li a::before {
            content: '\f105';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            padding-right: 5px;
        }

        .footer .footer-widget ul li a:hover {
            color: peachpuff;
        }

        .footer .footer-widget ul li a:hover::before {
            content: '\f101';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
        }

        .footer .contact-info p {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .footer .contact-info p i {
            margin-right: 5px;
            color: white;
        }
        .footer .contact-info p {
            color: white;
        }
        .footer-widget h2{
            color: white;
        }
        .col-md-6 h2{
            color: white;
        }

        .footer .social {
            position: relative;
            width: 100%;
        }

        .footer .social a {
            display: inline-block;
            margin: 10px 5px 0 0;
            width: 40px;
            height: 40px;
            padding: 6px 0;
            text-align: center;
            font-size: 18px;
            color: white;
            border: 3px solid white;
            border-radius: 4px;
            transition: all .5s;
        }

        .footer .social a:hover {
            color: antiquewhite;
            border-color:  antiquewhite;
            padding-top: 10px;
        }

        .footer .payment {
            padding-top: 25px;
            padding-bottom: 25px;
            border-top: 1px solid rgba(0,0,0,.1);
        }

        @media (min-width: 992px) {
            .footer .payment {
                max-width: 80%;
                margin: 0 auto;
            }
        }

        .footer .payment-method,
        .footer .payment-security {
            overflow: hidden;
        }

        .footer .payment-method {
            text-align: left;
        }

        .footer .payment-security {
            text-align: right;
        }

        @media (max-width: 768.98px) {
            .footer .payment-method {
                margin-bottom: 15px;
            }

            .footer .payment-method,
            .footer .payment-security {
                text-align: center;
            }
        }

        .footer .payment-method h2,
        .footer .payment-security h2 {
            display: inline-block;
            margin: 0 10px 0 0;
            font-size: 18px;
            font-weight: 400;
            line-height: 22px;
        }

        .footer .payment-method img,
        .footer .payment-security img {
            height: 25px;
        }










        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        form{
            width: 80%;
            margin-left: 90px;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity:1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
        .header-top {
            padding-top: 0px;
            padding-left: 5px;
            padding-bottom: 0px;
        }

        .site-logo {
            display: inline-block;
            padding-left: 5px;
        }

        .header-search-form {
            width: 100%;
            position: relative;
            padding-top:0px;
            padding-left: 40px;
        }

        .header-search-form input {
            width: 100%;
            height: 44px;
            font-size: 14px;
            border-radius: 50px;
            border: none;
            padding: 0 19px;
            background: #f0f0f0;

        }

        .header-search-form button {
            position: absolute;
            height: 100%;
            right: 30px;
            top: 0;
            font-size: 26px;
            color: #fe4c50;
            padding-top: 0px;
            border: none;
            cursor: pointer;
            background-color: transparent;
            padding-left: 520px;

        }

        .user-panel .up-item {
            display: inline-block;
            font-size: 14px;
            padding-top: 0px;
            margin-bottom: 10px;
            padding-left: 90px;
        }

        .user-panel .up-item i {
            font-size: 22px;
        }

        .user-panel .up-item a {
            font-size: 14px;
            color: #000;
        }

        .user-panel .up-item:first-child {
            margin-right: 20px;
        }

        .shopping-card {
            display: inline-block;
            position: relative;
        }

        .shopping-card span {
            position: absolute;
            top: -4px;
            left: 100%;
            height: 16px;
            min-width: 16px;
            color: #fff;
            font-size: 13px;
            background: #fe4c50;
            text-align: center;
            border-radius: 30px;
            padding: 0 2px;

        }




    </style>



</head>

<body onload="alert('Welcome to change pass page !')">
<nav class="navbar navbar-expand-lg navbar-dark  ">

    </div></nav>

<section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <form  id="toto" action="" method="post" style="" >
        <div class="container">
            <h1 style="font-family: 'Segoe Print';color: darkred;">Foget Your Password ?</h1>
            <br>
            <p style="font-family: 'Segoe Print'">Please Fill Your Email to Reset Your Password ..</p>
            <hr>



            <label for="email" style="font-family: 'Segoe Print';color:darkred;font-size: large"><b>Email</b></label>
            <input type="text" placeholder="Enter Your Email" name="email" required>
            <label for="password" style="font-family: 'Segoe Print';color:darkred;font-size: large"><b>password</b></label>
            <input type="text" placeholder="Enter Your  new password" name="password" required>

          <br>
            <br>

            <div class="clearfix">
                <button type="button" class="cancelbtn"  style="font-family: 'Segoe Print';font-size: large; background-color:darkred;font-weight: bolder">Cancel</button>
                <button  onclick="s()" type="submit"name="forget" class="signupbtn" style="font-family: 'Segoe Print';font-size: large;font-weight: bolder">Reset Your Pass !</button></div></div></form>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function s(){
            Swal.fire(
                'Update Successfully !',
                'reset password !',
                'success'
            );}
    </script>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>




</section>



<section>



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
