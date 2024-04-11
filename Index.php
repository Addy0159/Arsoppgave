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
    <button type="button" class="collapsible">Menu</button>
    <div class="head">
        <header>
            <img id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png" alt="Digistore-logos">
            <a href="Index.php">Home</a>
            <a href="VRs.php">VR</a>
            <a href="VR-Accessory.php">VR-Accessory</a>
            <a href="Cameras.php">Camera</a>
            <a href="Camera-Accessory.php">Camera-Accessory</a>
            <a href="Hardware&Software.php">Hardware/Software</a>
            <a id="CA" href="Cart.php"><img src="Bilder/Cart-white.png" alt="cart" id="cart">
                <p>Cart</p>
            </a>
        </header>
    </div>

    <button id="dark" onclick="dark()">Dark</button>

    <button id="Login"><a href="Login.php">Login</a></button>


    <h2>New Products</h2>
    <div id="Nye-Produkter">
        <div id="RAM">
            <ul class="Produkt">
                <img src="Bilder/Produkter/RAM-16g.png" alt="RAM-16g">
                <p> Kingston FURY Beast RGB <br> DDR4 3200MHz 16GB <br>
                    899,-
                </p>
                <br> <button id="RAM16" onclick="addToCart('RAM16')">Add To Cart</button>
            </ul>
        </div>

        <div class="GOpro-case">
            <ul class="Produkt">
                <img src="Bilder/Produkter/GOpro-case.png" alt="GOpro-case">
                <p>GoPro Housing Hero9/10
                    <br> 648,-
                </p>
                <br> <button id="GOpro-case" onclick="addToCart('GOpro-case')">Add To Cart</button>
            </ul>
        </div>

        <div id="GOPRO">
            <ul class="Produkt">
                <img id="pro" src="Bilder/Produkter/GOpro.png" alt="GOpro">
                <p> GoPro HERO10 Black
                    <br> 5 990,-
                </p>
                <button id="GOPRO" style="margin-right: 15%;" onclick="addToCart('GOPRO')">Add To Cart</button>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <h2>Best-selling products</h2>
    <div id="Mest-Produkter">
        <div id="Play">
            <ul class="Produkt1"> <img src="Bilder/Produkter/VR4.png" alt="PlayStation VR2 6 690,-">
                <p> PlayStation VR2
                    <br> 6 690,-
                </p>
                <br> <button id="PSVR2" style="margin-right: 42%;" onclick="addToCart('PSVR2')">Add To Cart</button>
            </ul>
        </div>

        <div id="Ti">
            <ul class="Produkt1">
                <img src="Bilder/Produkter/Windos10.png" alt="Microsoft Office Home Student 2021 Norwegian 1 690,-">
                <p>Microsoft Office Home Student
                    <br> 2021 Norwegian
                    <br> 1 690,-
                </p>
                <button id="Soft" style="margin-right: 32%;" onclick="addToCart('Soft')">Add To Cart</button>
            </ul>
        </div>

        <div id="Kort">
            <ul class="Produkt1">
                <img src="Bilder/Produkter/Hovedkort.png" alt="ASUS TUF Gaming B650-PLUS WIFI Motherboard 2 490,-">
                <p>ASUS TUF Gaming B650-PLUS
                    <br> WIFI Motherboard
                    <br> 2 490,-
                </p>
                <button id="Motherboard" style="margin-right: 20%;" onclick="addToCart('Motherboard')">Add To
                    Cart</button>
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