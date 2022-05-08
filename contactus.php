<!DOCTYPE html>
<html>
<title>Contact Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-top " style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <h4><b>Contact Us ...</b></h4>

    </div>
    <div class="w3-bar-block">

        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-grey"><i class="fa fa-user fa-fw w3-margin-right"></i> ABOUT </a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-black"><i class="fa fa-envelope fa-fw w3-margin-right"></i> CONTACT Us </a>
    </div>
    <div class="w3-panel w3-large">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">




    <!-- Contact Section -->
    <div class="w3-container w3-padding-large w3-white">
        <h4 id="contact"><b>Contact Us</b></h4>
        <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
            <div class="w3-third w3-black w3-hover-dark-grey">
                <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                <p>SuzanSamer772@gmail.com</p>
            </div>
            <div class="w3-third w3-grey  w3-hover-dark-grey">
                <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey "></i></p>
                <p>Nabluse , Palestine </p>
            </div>
            <div class="w3-third w3-black w3-hover-dark-grey">
                <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                <p>05698807563</p>
            </div>

        </div>

        <hr class="w3-opacity">
        <form action="cont.php" method="post" target="_blank">
            <div class="w3-section">
                <label>Name</label>
                <input class="w3-input w3-border" type="text" name="name" id=="name" required>
            </div>
            <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border" type="text" name="email" id="email" required>
            </div>
            <div class="w3-section">
                <label>Message</label>
                <input class="w3-input w3-border" type="text" name="body" id="body" required>
            </div>

            <button type="submit"onclick="send()" class="w3-button w3-grey w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right" onclick="sendEmail()"></i>Send Message</button>

            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>

                function send(){
                    Swal.fire(
                        'your message sent successuflly !',
                        'Good Job !!',
                        'success'
                    );

                };
            </script>
        </form>
    </div>


    <div class="w3-grey w3-center w3-padding-24"> <a>MovieStar</a></div>

    <!-- End page content -->
</div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var body = $("#body");

        if (isNotEmpty(name) && isNotEmpty(email)  && isNotEmpty(body)) {
            $.ajax({
                url: 'mailco.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    body: body.val()
                }, success: function (response) {
                    $('#myForm')[0].reset();
                    $('.sent-notification').text("Message Sent Successfully.");
                }
            });
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
        } else
            caller.css('border', '');

        return true;
    }
</script>
</body>
</html>
