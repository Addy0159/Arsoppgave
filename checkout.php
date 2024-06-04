<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the order, e.g., save to database, send email, etc.
    // Clear the cart
    $_SESSION['cart'] = [];
    echo "<h1>Thank you for your purchase!</h1>";
    exit;
}

$cart = $_SESSION['cart'] ?? [];
$total = 0;

if (empty($cart)) {
    echo "<h1>Your cart is empty</h1>";
    echo "<a href=\"Cart.php\">Go back to cart</a>";
    exit;
}

// Check if user is logged in
if (isset($_SESSION["user_id"])) {
    $username = $_SESSION["username"];
    echo "<script>console.log('Welcome, $username!');</script>";
} else {
    echo "<script>console.log('<a href=\"Login.php\">Login</a>');</script>";
}

$mysqli = new mysqli("localhost", "root", "Admin", "termin");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digistore</title>
    <link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
    <meta charset="UTF-8">
    <title>Checkout</title>
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
    <h2>Checkout</h2>
    <form action="checkout.php" method="post">
        <table>
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
                        <td>$quantity</td>
                        <td>$" . $subtotal . "</td>
                    </tr>";
                }
            }
            ?>
        </table>
        <h3>Total: $<?php echo $total; ?></h3>
        <button type="submit">Place Order</button>
    </form>
    <br>
    <br>
    <br>

    <div id="banner">
        <table>
            <tr>
                <td>
                    <div id="OM">
                        <h3>About us</h3>
                        <p>Digistore is an online store <br> that sells tech products at cheap prices.</p>
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

    <script src="script.js"></script>
    <script src="Faq.js"></script>
</body>
</html>
<?php $mysqli->close(); ?>
