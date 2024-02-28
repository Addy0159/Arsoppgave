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
        $navn = "Product Name: " . $row["name"];
        $Price = "Price: " . $row["price"];
        $Quantity = "Quantity: " . $row["quantity"] ;
        $ID = "Product ID: " . $row["product_id"] ;
        $img = $row["img"] ;
        echo "<img src='Bilder/Produkter/$img'  alt='Product' width='100px' height=100px'>";
        echo "<div> $navn $Price $Quantity $ID $img </div>";
    }
} else {
    echo "No products found.";
}


$conn->close();
?>
   
</body>
</html>
