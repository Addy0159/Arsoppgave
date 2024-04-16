<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'db_connect.php';

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
