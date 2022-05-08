<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="p.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">


</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    html,
    lolo {

        height: 100%;
        width: 100%;
        /* for touch screen laptop */
        touch-action:auto;

    }

    lolo {

        padding-top: 200px;
        overflow: hidden;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background: #111;
        -webkit-perspective: 1000px;
        perspective: 1000px;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    #drag-container, #spin-container {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin: auto;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: rotateX(-10deg);
        transform: rotateX(-10deg);
    }

    #drag-container img, #drag-container video {
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        line-height: 200px;
        font-size: 50px;
        text-align: center;
        -webkit-box-shadow: 0 0 8px #fff;
        box-shadow: 0 0 8px #fff;
    }

    #drag-container img:hover, #drag-container video:hover {
        -webkit-box-shadow: 0 0 15px #fffd;
        box-shadow: 0 0 15px #fffd;
    }

    #drag-container p {
        font-family: Serif;
        position: absolute;
        top: 100%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%) rotateX(90deg);
        transform: translate(-50%,-50%) rotateX(90deg);
        color: #fff;
    }

    #ground {
        width: 900px;
        height: 900px;
        position: absolute;
        top: 100%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%) rotateX(90deg);
        transform: translate(-50%,-50%) rotateX(90deg);
    }

    #music-container {
        position: absolute;
        top: 0;
        left: 0;
    }

    @-webkit-keyframes spin {
        from{
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
        } to{
              -webkit-transform: rotateY(360deg);
              transform: rotateY(360deg);
          }
    }

    @keyframes spin {
        from{
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
        } to{
              -webkit-transform: rotateY(360deg);
              transform: rotateY(360deg);
          }
    }
    @-webkit-keyframes spinRevert {
        from{
            -webkit-transform: rotateY(360deg);
            transform: rotateY(360deg);
        } to{
              -webkit-transform: rotateY(0deg);
              transform: rotateY(0deg);
          }
    }
    @keyframes spinRevert {
        from{
            -webkit-transform: rotateY(360deg);
            transform: rotateY(360deg);
        } to{
              -webkit-transform: rotateY(0deg);
              transform: rotateY(0deg);
          }
    }
</style>



<body>

<div class="full-page">
    <div class='headernav'>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="f.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="f.php">All Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Action.php">categories</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                        </li>

                        <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>


                    </ul>
                </div>
            </div>
        </nav>

        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()'class='toggle-btn'style="width: 80px;margin-left: 5px">Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'style="width: 80px;margin-left: 5px">Register</button>
                </div>
                <form id='login' class='input-group-login' action='loginProcess.php' method='post'>
                    <input type="text"name='email' class='input-field'placeholder='Email Id' required >
                    <input type="password"name='password' class='input-field'placeholder='Enter Password' required>
                    <input type='checkbox'class='check-box'><a  style="font-size: 10px;color: white;text-decoration: none" href="forgetpass.php">Forget Password</a>
                    <button type="submit"name='submit' class='submit-btn'>Log in</button>
                </form>
                <form id='register' class='input-group-register'action='registerprocess.php' method='post'>
                    <input type='text'class='input-field' placeholder='First Name' required>
                    <input type='text'class='input-field'placeholder='Last Name ' required>
                    <input type="email"class='input-field'name='email' placeholder='Email Id' required>
                    <input type="password"class='input-field' name='password' placeholder='Enter Password' required>
                    <input type='password'class='input-field'placeholder='Confirm Password'  required>
                    <button type='submit'name='submit' class='submit-btn'>Register</button>
                </form>
            </div>
        </div>

    </div>

    <script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event)
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
</div>
<div class="sub-page">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!--   <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
           </div> -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/88.jpg" class="d-block img-fluid">
            </div>
            <div class="carousel-item">
                <img src="image/de1.jpg" class="d-block img-fluid">
            </div>
            <div class="carousel-item">
                <img src="image/us.jpg" class="d-block img-fluid">
            </div>
            <div class="carousel-item">
                <img src="image/ph.jpg" class="d-block img-fluid">
            </div>
            <div class="carousel-item">
                <img src="image/abc-3.png" class="d-block img-fluid">
            </div>
            <div class="carousel-item">
                <img src="image/dd.jpg" class="d-block img-fluid">
            </div>
            <div class="carousel-item">
                <img src="image/abc-5.png" class="d-block img-fluid">
            </div>
            <div class="carousel-item">
                <img src="image/sha.jpg" class="d-block img-fluid">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<br>
<br>
<br>
<br>
>

<section class='latest'>
    <h4 style="margin-top: 70px; margin-bottom:40px; padding-left: 10px ;font-family: 'Segoe Print';font-size: 50px">Popular Movie</h4>
    <div class="row">
        <div class="col-1" style="margin-right: 15px; margin-bottom: 30px;">
            <a href="index.html"><img src="image/k2.jpg"></a>
        </div>
        <div class="col-1"style="margin-right: 15px;">
            <a href="#"><img src="image/sh2.jpg"></a>
        </div>
        <div class="col-1"style="margin-right: 15px;">
            <a href="#"><img src="image/u2.jpg"></a>
        </div>
        <div class="col-1"style="margin-right: 15px;">
            <a href="#"><img src="image/p2.jpg"></a>
        </div>
        <br>
        <br>
        <div class="col-1" style="margin-right: 15px;" >
            <a href="#"><img src="image/d2.jpg"></a>
        </div>

        <div class="col-1"style="margin-right: 15px;">
            <a href="#"><img src="image/de.jpg"></a>
        </div>


        <div class="col-1"style="margin-right: 15px;" style="margin-top: 40px;">
            <a href="#"><img src="image/r2.jpg"></a>
        </div>
        <br>
        <br>
        <div class="col-1" style="margin-right: 15px;" >
            <a href="#"><img src="image/r1.jpg"></a>

        </div>
        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img src="image/abc-10.png"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img src="image/m.jpg"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img src="image/e.jpg"></a>

        </div>
    </div>
</section>


<section class='shows'>
    <h4 style="margin-top: 70px; margin-bottom:40px; padding-left: 10px ;font-family: 'Segoe Print';font-size: 50px"> All Movies</h4>

    <div class="row">
        <div class="col-1" style="margin-right: 15px; margin-bottom: 30px;">
            <a href="index.html"><img style="height: 141px;width: 245px" src="image/yy.png"></a>
        </div>
        <div class="col-1"style="margin-right: 15px;">
            <a href="#"><img src="image/abc-15.png"></a>
        </div>
        <div class="col-1"style="margin-right: 15px;">
            <a href="#"><img  style="height: 141px;width: 245px" src="image/tt.jpg"></a>
        </div>
        <div class="col-1"style="margin-right: 15px;">
            <a href="#"><img style="height: 141px;width: 245px"  src="image/mmm.jpg"></a>
        </div>
        <br>
        <br>
        <div class="col-1" style="margin-right: 15px;" >
            <a href="#"><img src="image/abc-18.png"></a>
        </div>

        <div class="col-1"style="margin-right: 15px;">
            <a href="#"><img src="image/de.jpg"></a>
        </div>


        <div class="col-1"style="margin-right: 15px;" style="margin-top: 40px;">
            <a href="#"><img src="image/r2.jpg"></a>
        </div>
        <br>
        <br>
        <div class="col-1" style="margin-right: 15px;" >
            <a href="#"><img src="image/r1.jpg"></a>

        </div>
        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img src="image/abc-10.png"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img src="image/m.jpg"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img src="image/e.jpg"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img src="image/abc-10.png"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img style="height: 141px;width: 245px"  src="image/uu.jpg"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img style="height: 141px;width: 245px"  src="image/ii.jpg"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img style="height: 141px;width: 245px"src="image/mm.jpg"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img  style="height: 141px;width: 245px" src="image/ll.jpg"></a>

        </div>

        <div class="col-1" style="margin-right: 15px; margin-top: 15px;"  >
            <a href="#"><img style="height: 141px;width: 245px" src="image/kk.jpg"></a>

        </div>
        <div style="padding-left: 350px;">
            <p class="primary-btn cta-btn" style="width: 100%; padding-left:350px " href="">  View More Movie..
            </p>
        </div>

    </div>

    </div>
</section>


<section class='showws'>
    <h4 style="margin-top: 20px; margin-bottom:2px; padding-left: 400px ;font-family: 'Segoe Print';font-size: 50px"> Movie Night</h4>
    <div class="row">
        <div id="hot-deal" class="section">


            <div class="contaiiner">


                <div class="roow">
                    <div class="col-md-12">
                        <div class="hot-deal">
                            <ul class="hot-deal-countdown">
                                <li>
                                    <div>
                                        <h3>02</h3>
                                        <span>Days</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span id="sanCounter" style="font-size: x-large">18</span>
                                        <span>Hours</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span id="spanCounter" style="font-size: x-large">1</span>
                                        <span>Mins</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span id="spnCounter" style="font-size: x-large">60</span>
                                        <script>
                                            let scount =60;
                                            let mcount =1;
                                            let hcount=18;

                                            function myf(){
                                                scount--;
                                                if(scount==0){
                                                    scount=60;
                                                    mcount--

                                                }
                                                else if(mcount==0){
                                                    mcount=59;
                                                    hcount --
                                                }
                                                document.getElementById("spnCounter").innerText=scount;
                                                document.getElementById("spanCounter").innerText=mcount;
                                                document.getElementById("sanCounter").innerText=hcount;

                                            }
                                            window.onload=()=>{
                                                setInterval("myf();",500);
                                            }

                                        </script>
                                        <span> Secs</span>
                                    </div>


                                </li>
                            </ul>
                            <h2 class="text-uppercase">The most famous movie ever.. </h2>
                            <p>Coming soon .....</p>
                            <a class="primary-btn cta-btn" style="background-color: rgb(156, 10, 10)" href="https://www.youtube.com/watch?v=NAJuQVZ8MSk"> Watch the ad
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <script>
                $(function() {
                    function getCounterData(obj) {
                        var days = parseInt($('.e-m-days', obj).text());
                        var hours = parseInt($('.e-m-hours', obj).text());
                        var minutes = parseInt($('.e-m-minutes', obj).text());
                        var seconds = parseInt($('.e-m-seconds', obj).text());
                        return seconds + (minutes * 60) + (hours * 3600) + (days * 3600 * 24);
                    }

                    function setCounterData(s, obj) {
                        var days = Math.floor(s / (3600 * 24));
                        var hours = Math.floor((s % (60 * 60 * 24)) / (3600));
                        var minutes = Math.floor((s % (60 * 60)) / 60);
                        var seconds = Math.floor(s % 60);

                        console.log(days, hours, minutes, seconds);

                        $('.e-m-days', obj).html(days);
                        $('.e-m-hours', obj).html(hours);
                        $('.e-m-minutes', obj).html(minutes);
                        $('.e-m-seconds', obj).html(seconds);
                    }

                    var count = getCounterData($(".counter"));

                    var timer = setInterval(function() {
                        count--;
                        if (count == 0) {
                            clearInterval(timer);
                            return;
                        }
                        setCounterData(count, $(".counter"));
                    }, 1000);
                });
            </script>

        </div>
    </div>
</section>
<br>
<br>
<br>
<br>

<section class='sh' >

    <br>
    <br>
    <br>
    <br>
    <br>


    <div class ='lolo' style="padding-left: 470px ; width: 100%;height: 100%; background-size: 100%">
        <div id="drag-container">
            <div id="spin-container">

                <img src="image/g.png" alt="">
                <img src="image/okk.jpg" alt="">
                <img src="image/okkk.jpg" alt="">
                <img src="image/pp.jpg" alt="">
                <img src="image/uu.jpg" alt="">
                <img src="image/okkkk.jpg" alt="">
                <img src="image/ok.png" alt="">


                <br>
                <br>
                <br>
                <br>
                <br>


                <p>Categories</p>
            </div>
            <div id="ground"></div>
        </div>
        <script src="script.js"></script>

    </div>

</section>






</body>
</html>


