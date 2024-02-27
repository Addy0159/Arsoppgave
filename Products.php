<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "product"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Product Name: " . $row["name"] . "<br>";
        echo "Price: " . $row["price"] . "<br>";
        echo "Quantity: " . $row["quantity"] . "<br>";
        echo "Product ID: " . $row["product_id"] . "<br>";
        echo "Image: " . $row["img"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No products found.";
}

$conn->close();
?>
   
</body>
</html>
