<!DOCTYPE html>
<?php
session_start();

// Check if user is logged in
if (isset($_SESSION["user_id"])) {
    // User is logged in, send username to JavaScript
    $username = $_SESSION["username"];
    echo "<script>console.log('Welcome, $username!');</script>";
} else {
    // User is not logged in, send login link to JavaScript
    echo "<script>console.log('<a href=\"Login.php\">Login</a>');</script>";
}
?>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digistore</title>
    <link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
</head>

<body>
    <button  type="button" class="collapsible">Menu</button>
    <div class="head">
        <header>
            <img id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png" alt="Digistore-logos">
            <a href="Index.php">Home</a>
            <a href="VRs.php">VR</a>
            <a href="VR-Accessory.php">VR-Accessory</a>
            <a href="Cameras.php">Camera</a>
            <a href="Camera-Accessory.php">Camera-Accessory</a>
            <a href="Hardware&Software.php">Hardware/Software</a>
            <a id="CA" href="Cart.php"><img src="Bilder/Cart-white.png" alt="cart" id="cart"><p>Cart</p></a>
        </header>
    </div>
    <button id="dark" onclick="dark()">Dark</button>
    <button id="Login"><a href="Login.php">Login</a></button>
    <br>
    <div class="VR-Tilbehør">
        <div id="Strap">
            <ul class="VRs">
                <img src="Bilder/Produkter/VR-Strap.png" alt="Meta Quest 2 Elite-reim 799,-">
                <p>Meta Quest 2 Elite-reim <br>
                    799,-<br> <button id="reim">Add To Cart</button> </p>
            </ul>
        </div>
        <div id="utstyr">
            <br>
            <ul class="VRs">
                <img src="Bilder/Produkter/VR-utstyr.png" alt="HWireless Adapter Full Pack with clip 4 499,-(sort/blå)">
                <p> Wireless Adapter Full Pack with clip <br>
                    4 499,- <br><button id="Pack">Add To Cart</button> </p>
            </ul>
        </div>

        <div id="bateri">
            <ul class="VRs">
                <img src="Bilder/Produkter/VR-extra-bateri.png" alt="HTC VIVE Base Station 2.0 2 490,-">
                <p>HTC VIVE Base Station 2.0 <br>
                    2 490,- <br><button id="VIVE">Add To Cart</button> </p>
            </ul>
        </div>

        <div id="Case">
            <ul class="VRs">
                <img src="Bilder/Produkter/VR-case.png" alt="HTC VIVE Focus 3 Charging Carry Case 2 039,-">
                <p>HTC VIVE Focus 3 Charging Carry Case <br>
                    2 039,- <br><button id="Case">Add To Cart</button></p>
            </ul>
        </div>

        <div id="Sense">
            <ul class="VRs">
                <img src="Bilder/Produkter/Sense.png" alt="PlayStation VR2 Sense charging station 529,-">
                <p>PlayStation VR2 Sense charging station <br>
                    529,- <br><button id="Sense">Add To Cart</button></p>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
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
                        The Portfolio to the owner <a href="My_work.php">Addy's Portfolio</a> 
                </div>
            </td>
            <td>
                <div id="KON">
                    <h3>Info</h3>
                    <p>Email: <a href="mailTo: adam.a.v@outlook.com">adam.a.v@outlook.com</a><br>
                        Number: 458 57 340 <br>
                        <a href="https://www.google.com/maps?q=Kabelgata+10-12,+0580+Oslo&z=15" target="_blank"
                            arria-label="Kabelgata 10-12, 0580 Oslo - Open link"> <span>Kabelgata 10-12, 0580
                                Oslo</span></a> <br> <a
                                href="FAQ.php">FAQ</a> </p>
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
                            Linedin</a>
                    </p>
                </div>
            </td>
        </table>
    </div>


    <script src="script.js"></script>
    <script src="Faq.js"></script>

</body>

</html>