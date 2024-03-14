<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ticket</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
    </head>
    <body>
    <button  type="button" class="collapsible">Menu</button>
    <div class="head">
        <header>
            <img style="height: 10%;" id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png" alt="Digistore-logos">
            <a href="Index.html">Home</a>
            <a href="VRs.html">VR</a>
            <a href="VR-Accessory.html">VR-Accessory</a>
            <a href="Cameras.html">Camera</a>
            <a href="Camera-Accessory.html">Camera-Accessory</a>
            <a href="Hardware&Software.html">Hardware/Software</a>
            <a id="CA" href="Cart.html"><img style="height: 10%;" src="Bilder/Cart-white.png" alt="cart" id="cart"><p>Cart</p></a>
        </header>
    </div>

    <button id="dark" onclick="dark()">Dark</button>

    <button id="redirectButton" >Login inn</button>
    <div class="Ticket">
        <form method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text"  name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text"  name="lastname" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" name="Email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea  name="subject" placeholder="Write the problem"
                        style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
        <script src="script.js" async defer></script>
    </body>

    <?php 
    session_start();
    $server = "localhost";
    $user = "root";
    $pw = "Admin";
    $db = "ticket";
    
    $conn = mysqli_connect($server, $user, $pw, $db) or die('noe gikk galt');
    
    
    
    ?>
</html>