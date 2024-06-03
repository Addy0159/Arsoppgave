<!DOCTYPE html>
<?php
session_start();
$mysqli = new mysqli("localhost", "root", "Admin", "termin");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if user is logged in
if (isset($_SESSION["user_id"])) {
    $username = $_SESSION["username"];
    echo "<script>console.log('Welcome, $username!');</script>";
} else {
    echo "<script>console.log('<a href=\"Login.php\">Login</a>');</script>";
}

// Define how many results you want per page
$results_per_page = 3;

// Find out the number of results stored in the database
$sql = "SELECT COUNT(*) AS total FROM products";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$total_results = $row['total'];

// Determine number of total pages available
$total_pages = ceil($total_results / $results_per_page);

// Determine which page number visitor is currently on
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

// Determine the SQL LIMIT starting number for the results on the displaying page
$start_from = ($page - 1) * $results_per_page;

// Retrieve selected results from database and display them on page
$sql = "SELECT * FROM products LIMIT " . $start_from . ", " . $results_per_page;
$result = $mysqli->query($sql);
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digistore</title>
    <link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
    <style>
        .pagination {
            display: none; /* Hide pagination */
        }
    </style>
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
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>
                        <ul class='Produkt'>
                            <img ' width=250px' src='" . $row['img'] . "' alt='" . $row['name'] . "' >
                            <p>" . $row['name'] . "<br>" . $row['price'] . " NOK</p>
                            <button onclick='addToCart(\"" . $row['product_id'] . "\")'>Add To Cart</button>
                        </ul>
                      </div>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <?php if ($total_pages > 1): ?>
        <div class="pagination">
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='products.php?page=" . $i . "'";
                if ($i == $page) {
                    echo " class='curPage'";
                }
                echo ">" . $i . "</a> ";
            }
            ?>
        </div>
    <?php endif; ?>

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

    <script src="script.js"></script>
    <script src="Faq.js"></script>
    <script>
        function addToCart(productId) {
            fetch(`add_to_cart.php?id=${productId}`, { method: 'GET' })
                .then(response => response.json())
                .then(data => alert(data.message));
        }
    </script>
</body>

</html>

<?php
$mysqli->close();
?>
