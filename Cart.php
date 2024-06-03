<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$mysqli = new mysqli("localhost", "root", "Admin", "termin");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if user is logged in
if (isset($_SESSION["user_id"])) {
    // User is logged in, send username to JavaScript
    $username = $_SESSION["username"];
    echo "<script>console.log('Welcome, $username!');</script>";
} else {
    // User is not logged in, send login link to JavaScript
    echo "<script>console.log('<a href=\"Login.php\">Login</a>');</script>";
}

$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>
<head>
    <link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body onload="displaycart()">
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
            <a id="CA" href="Cart.php"><img src="Bilder/Cart-white.png" alt="cart" id="cart"><p>Cart</p></a>
        </header>
    </div>
    
    <button id="dark" onclick="dark()">Dark</button>
    <button id="Login"><a href="Login.php">Login</a></button>

    <div class="container">
        <div id="shopping-cart">
            <h2>Your Cart</h2>
            <form method="post" action="clear_cart.php">
        <button id="btnEmpty" type="submit">Clear Cart</button>
    </form>
            <table id="table" cellpadding="10" cellspacing="1">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <?php
        foreach ($cart as $product_id => $quantity) {
            $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
            $result = $mysqli->query($sql);
            if ($row = $result->fetch_assoc()) {
                $subtotal = $row['price'] * $quantity;
                $total += $subtotal;
                echo "<tr>
                    <td>" . $row['name'] . "</td>
                    <td>$" . $row['price'] . "</td>
                    <td> $quantity</td>
                    <td>$" . $subtotal . "</td>
                </tr>";
            }
        }
        ?>
    </table>
    <h4>Total: $<?php echo $total; ?></h4>
    <a href="checkout.php">Checkout</a>
        </div>
        <br>
        <div id="banner">
            <table>
                <tr>
                    <td>
                        <div id="OM">
                            <h3>About us</h3>
                            <p>Digistore is an online store that sells tech products at cheap prices.</p>
                            <p>The Portfolio to the owner <a href="My_work.php">Addy's Portfolio</a></p>
                        </div>
                    </td>
                    <td>
                        <div id="KON">
                            <h3>Info</h3>
                            <p>Email: <a href="mailto:adam.a.v@outlook.com">adam.a.v@outlook.com</a><br>
                               Number: 458 57 340<br>
                               <a href="https://www.google.com/maps?q=Kabelgata+10-12,+0580+Oslo&z=15" target="_blank" aria-label="Kabelgata 10-12, 0580 Oslo - Open link">Kabelgata 10-12, 0580 Oslo</a><br>
                               <a href="FAQ.php">FAQ</a>
                            </p>
                        </div>
                    </td>
                    <td>
                        <div id="SOS">
                            <h3>Social Media</h3>
                            <p>
                               Instagram: <a href="https://www.instagram.com/adamahmed05/" target="_blank">Addy's Insta</a><br>
                               Twitter: <a href="https://twitter.com/Addy_gaming05" target="_blank">Addy's Twitter</a><br>
                               LinkedIn: <a href="https://www.linkedin.com/in/adam-virk-579bb01aa/" target="_blank">Addy's LinkedIn</a>
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="Faq.js"></script>
</body>
</html>

<?php $mysqli->close(); ?>
