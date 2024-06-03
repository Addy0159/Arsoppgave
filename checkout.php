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
    exit;
}

$mysqli = new mysqli("localhost", "root", "Admin", "termin");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
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
        <h2>Total: $<?php echo $total; ?></h2>
        <button type="submit">Place Order</button>
    </form>
</body>
</html>
<?php $mysqli->close(); ?>
