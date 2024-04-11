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
    <div class="VR">
        <br>
        <div id="play">
            <ul>
                <img src="Bilder/Produkter/VR4.png" alt="playstation vr 2 6 690,-">
                <p>PlayStation VR2
                    <br> 6 690,-
                    <br><button id="PSVR2">Add To Cart</button>
                </p>
                <div class="popup" onclick="Pro1()"> Info about product!
                    <span class="popuptext" id="myPopup1">
                        Groundbreaking performance
                        <br> 4K HDR graphics
                        <br> 110-degree field of view
                        <br>Advanced graphics rendering
                        <br>Setup with a cable
                        <br> A new generation of genre-defining VR games
                        <br> PlayStation VR2 Sense technology</span>
                </div>
            </ul>
        </div>

        <div id="htc">
            <ul>
                <img src="Bilder/Produkter/VR1.png" alt="HTC VIVE PRO 2 Full Kit 12 899,- (sort/blå)">
                <p>HTC VIVE PRO 2 Full Kit
                    <br> 12 899,- (sort/blå)
                    <br><button id="HTC">Add To Cart</button>
                </p>
                <div class="popup" onclick="Pro2()">Info about product!
                    <span class="popuptext" id="myPopup2">
                        5K resolution
                        <br>Wide 120° field of view (FOV)
                        <br>Update frequency of 120 Hz
                        <br>Ergonomic design</span>
                </div>
            </ul>
        </div>

        <div id="hp">
            <ul>
                <img src="Bilder/Produkter/VR3.png" alt="HP Reverb G2 VR Headset 9 299,- (sort)">
                <p style="padding-top: 8%;"> HP Reverb G2 VR Headset
                    <br> 9 299,- (sort)
                    <br><button id="HP">Add To Cart</button>
                </p>
                <div class="popup" onclick="Pro3()">Info about product!
                    <span class="popuptext" id="myPopup3">
                        2x 2.89” LCD
                        <br>2160x2160 per eye
                        <br>90 Hz
                        <br>Microphone, 4 x cameras</span>
                </div>
            </ul>
        </div>

        <div id="Meta">
            <ul>
                <img src="Bilder/Produkter/VR2.png" alt="Meta Quest 2 VR-briller 5 195,- (hvit)">
                <p>Meta Quest 2 VR-briller
                    <br> 5 195,- (hvit)
                    <br><button id="Meta">Add To Cart</button>
                </p>

            </ul>
        </div>
        <br>
        <div id="Pico">
            <ul>
                <img src="Bilder/Produkter/VR5.png" alt="Pico 4 All-in-One VR-briller (256 GB) 5395,-">
                <p>Pico 4 All-in-One VR-brille
                    <br> 5 395,- (256 GB)
                    <br><button id="Pico">Add To Cart</button>
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