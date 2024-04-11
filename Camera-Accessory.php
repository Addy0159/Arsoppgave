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
    <div class="Kamera-Tilbehør">
        <br>
        <div id="Chesty">
            <ul class="Ass">
                <img src="Bilder/Produkter/GOpro-strap.png" alt="GoPro Chesty 399,-">
                <p>GoPro Chesty
                    <br>399,-
                    <br><button id="strap">Add To Cart</button>
                </p>
            </ul>
        </div>

        <div id="case">
            <ul class="Ass">
                <img src="Bilder/Produkter/GOpro-case.png" alt="GoPro Protective Housing Hero9/10648,-">
                <p>GoPro Protective
                    <br>Housing Hero9/10
                    <br>648,-
                    <br><button id="GOpro-case">Add To Cart</button>
                </p>
            </ul>
        </div>

        <div id="bag">
            <ul class="Ass">
                <img src="Bilder/Produkter/Kamera.til3.png" alt="Sandstrøm DSLR camera bag 379,-">
                <p>Sandstrøm DSLR Camera bag
                    <br>379,-
                    <br><button id="bag">Add To Cart</button>
                </p>
            </ul>
        </div>

        <div id="lens">
            <ul class="Ass">
                <img src="Bilder/Produkter/Kamera.til2.png" alt="Samyang AF 14mm F2.8 lens (Sony E-mount) 7795,-">
                <p>Samyang AF 14mm
                    <br>F2.8 lens (Sony E-mount)
                    <br>7 795,-
                    <br><button id="Samyang">Add To Cart</button>
                </p>
            </ul>
        </div>
        <br>
        <div id="Shotgun">
            <ul class="Ass">
                <img src="Bilder/Produkter/Accessories.png" alt="Vlogger Shotgun Microphone - ECM-G1 1615,-">
                <p>Vlogger Shotgun Microphone
                    <br>ECM-G1
                    <br>1 615,-
                    <br><button id="Shotgun">Add To Cart</button>
                </p>
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