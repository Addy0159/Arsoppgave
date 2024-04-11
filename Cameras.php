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
    <div class="Kamera">
        <br>
        <div id="GOPRO">
            <ul class="Ca">
                <img src="Bilder/Produkter/GOPro.png" alt="GoPro HERO10 Black">
                <p>GoPro HERO10 Black
                    <br>5 990,-
                    <br><button id="GOPRO">Add To Cart</button>
                </p>
            </ul>
        </div>
        <br>
        <br>
        <div id="Sony">
            <ul class="Ca">
                <img src="Bilder/Produkter/Kamera2.png" alt="Sony CyberShot RX100 Mark III compact camera">
                <p>Sony CyberShot RX100
                    <br> Mark III Compact Camera
                    <br> 7 195,-
                    <br><button id="Sony">Add To Cart</button>
                </p>
            </ul>
        </div>
        <br>
        <div id="Camon">
            <ul class="Ca">
                <img src="Bilder/Produkter/Kamera3.png" alt="Canon EOS 2000D digital SLR camera + 18-55 DC3">
                <p >Canon EOS 2000D Digital
                    <br> SLR Camera + 18-55 DC3
                    <br> 5 595,-
                    <br><button id="Camon">Add To Cart</button>
                </p>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div id="Fujifilm">
            <ul class="Ca">
                <img src="Bilder/Produkter/Kamera4.png" alt="Fujifilm Instax Mini 11 compact camera (hvit) 999,-">
                <p>Fujifilm Instax Mini 11
                    <br> Compact Camera (hvit)
                    <br> 999,-
                    <br><button id="Fuji">Add To Cart</button>
                </p>
            </ul>
        </div>
        <br>
        <br>
        <div id="ZV">
            <ul class="Ca">
                <img src="Bilder/Produkter/Kamera5.png" alt="Sony ZV-1F digital camera for vlogging 7495,-">
                <p>Sony ZV-1F Digital
                    <br> Camera For Vlogging
                    <br> 7 495,-"
                    <br> <button id="ZV">Add To Cart</button>
                </p>
            </ul>
        </div>
        <br>
        <br>
        <br>
    </div>
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