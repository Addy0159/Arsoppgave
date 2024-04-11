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
    <div class="ware">
        <br>
        <div id="Hovedkort">
            <ul>
                <img src="Bilder/Produkter/Hovedkort.png" alt="ASUS TUF Gaming B650-PLUS WIFI Hovedkor 2 490,-">
                <p>ASUS TUF Gaming B650-PLUS
                    <br>WIFI Motherboard
                    <br>2 490,-
                    <br><button id="Motherboard">Add To Cart</button>
                </p>
            </ul>
        </div>

        <div id="ram">
            <ul>
                <img src="Bilder/Produkter/RAM-16g.png" alt="Kingston FURY Beast RGB DDR4 3200MHz 16GB 899,-">
                <p>Kingston FURY Beast RGB
                    <br> DDR4 3200MHz 16GB
                    <br>899,-
                    <br><button id="RAM16">Add To Cart</button>
                </p>
            </ul>
        </div>

        <div id="Windos10">
            <ul>
                <img src="Bilder/Produkter/Windos10.png" alt="Microsoft Office Home Student 2021 Norwegian 1 690,-">
                <p>Microsoft Office Home
                    <br> Student 2021 Norwegian
                    <br>1 690,-
                    <br><button id="Soft">Add To Cart</button>
                </p>
            </ul>
        </div>

        <div id="Adobe">
            <ul>
                <img src="Bilder/Produkter/adobe.png"
                    alt="Adobe Creative Cloud 1-YEAR SUBSCRIPTION - PC Windows 6999,-">
                <p>Adobe Creative Cloud
                    <br> 1-YEAR SUBSCRIPTION
                    <br>6 999,-
                    <br><button id="Adobe">Add To Cart</button>
                </p>
            </ul>
        </div>

        <div id="Samsung">
            <ul>
                <img src="Bilder/Produkter/Samsung.png" alt="Samsung 870 QVO 2.5'' SSD 8TB 6 095,-">
                <p>
                    <br>Samsung 870 QVO 2.5''
                    <br>SSD 8TB 6 095,-
                    <br><button id="Samsung">Add To Cart</button>
                </p>
            </ul>
        </div>
    </div>

    <br><br><br><br><br><br>

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