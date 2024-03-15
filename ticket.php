<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!-<![endif]-->
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
    <button type="button" class="collapsible">Menu</button>
    <div class="head">
        <header>
            <img style="height: 10%;" id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png"
                alt="Digistore-logos">
            <a href="Index.html">Home</a>
            <a href="VRs.html">VR</a>
            <a href="VR-Accessory.html">VR-Accessory</a>
            <a href="Cameras.html">Camera</a>
            <a href="Camera-Accessory.html">Camera-Accessory</a>
            <a href="Hardware&Software.html">Hardware/Software</a>
            <a id="CA" href="Cart.html"><img style="height: 10%;" src="Bilder/Cart-white.png" alt="cart" id="cart">
                <p>Cart</p>
            </a>
        </header>
    </div>

    <button id="dark" onclick="dark()">Dark</button>

    <button id="Login"><a href="Login.php">Login</a></button>
    <div class="Ticket">
        <form action="ticket.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="lastname" placeholder="Your last name..">
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
                    <textarea name="Problem" placeholder="Write the problem"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <br>
    <br>
    <br>
    <br>

    <div id="banner">
        <table>
            <td>
                <div id="OM">
                    <h3>About us</h3>
                    <p>Digistore is an online store that <br> sells tech products with cheap prices <br>
                        The Portfolio to the owner <a href="My_work.html">Addy's Portfolio</a> <br><a
                            href="FAQ.html">More</a> </p>
                </div>
            </td>
            <td>
                <div id="KON">
                    <h3>Contact</h3>
                    <p>Email: <a href="mailTo: adam.a.v@outlook.com">adam.a.v@outlook.com</a><br>
                        Number: 458 57 340 <br>
                        <a href="https://www.google.com/maps?q=Kabelgata+10-12,+0580+Oslo&z=15" target="_blank"
                            arria-label="Kabelgata 10-12, 0580 Oslo - Open link"> <span>Kabelgata 10-12, 0580
                                Oslo</span></a>
                    </p>
                </div>
            </td>
            <td>
                <div id="SOS">
                    <h3>Sosial media</h3>
                    <p>
                        Instagram: <a href="https://www.instagram.com/adamahmed05/" target="_blank">Addy's Insta</a><br>
                        Twitter: <a href="https://twitter.com/005_addy" target="_blank">Addy's Twitter</a><br>
                        Linkdin: <a href="https://www.linkedin.com/in/adam-virk-579bb01aa/" target="_blank">Addy's
                            Linkedin</a>
                    </p>
                </div>
            </td>
        </table>
    </div>
    <script src="script.js" async defer></script>
</body>

<?php
$server = "localhost";
$user = "root";
$pw = "Admin";
$db = "ticket";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["FName"];
    $lastname = $_POST["LName"];
    $email = $_POST["Email"];
    $problem = $_POST["Problem"];
}
$conn = mysqli_connect($server, $user, $pw, $db) or die('noe gikk galt');

$sql = "INSERT INTO form (id, FName, LName, Email, Problem) VALUES (id, '$firstname', '$lastname', '$email', '$problem' )";

$result = mysqli_query($conn, $sql) or die('Noe gikk galt');

mysqli_close($conn);
?>

</html>