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
$dbname = "termin"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$desired_product_ids = array("RAM16", "HP", "PSVR2"); // Replace these IDs with the IDs of the products you want to retrieve

if ($result->num_rows > 0) {
    $found_products = array();
    while ($row = $result->fetch_assoc()) {
        if (in_array($row["product_id"], $desired_product_ids)) {
            $navn = "Product Name: " . $row["name"];
            $Price = "Price: " . $row["price"];
            $Quantity = "Quantity: " . $row["quantity"];
            $ID = $row["product_id"];
            $img = $row["img"];
            echo "<div> <br> $navn <br> $Price <br> $Quantity <br> </div>";
            echo "<img src='$img'  alt='Product' width='150px' >";
            $found_products[] = $row["product_id"];
        }
    }
    foreach ($desired_product_ids as $desired_product_id) {
        if (!in_array($desired_product_id, $found_products)) {
            echo "Product with ID $desired_product_id not found.<br>";
        }
    }
} else {
    echo "No products found.";
}


$conn->close();
?>
   
</body>
</html>
