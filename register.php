<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digistore</title>
    <link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
</head>

<body class="scroll">
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
    <div class="contain">
        <h2>Register</h2>


        <form action="register.php" method="post">
            <label for="username"><b>Username:</b></label>  <br>
            <input type="text" name="username" placeholder="username" required><br>

            <label for="password"><b>Password:</b></label> <br>
            <input type="password" name="password" placeholder="password" required><br>

            <label for="email"><b>Email:</b></label> <br>
            <input type="text" name="email" placeholder="email" required><br />

            <label for="number"><b>Number:</b></label> <br>
            <input type="tel" name="number" placeholder="number" required><br />

            <label for="address"><b>Address:</b></label> <br>
            <input type="text" name="address" placeholder="address" required><br />

            <label for="postnumber"><b>Post number:</b></label> <br>
            <input type="number" pattern="[0-9]{4}" min="0000"  max="9999" name="postnumber" placeholder="post number"
                required><br />

            <label for="city"><b>City</b></label> <br>
            <input type="text" name="city" placeholder="city" required><br />

            <input class="button" type="submit" value="Register">
        </form>
    </div>
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
<?php
$server = "localhost";
$user = "root";
$pw = "Admin";
$db = "termin";

$conn = mysqli_connect($server, $user, $pw, $db) or die('noe gikk galt');

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = hash('sha256', $_POST["password"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $postnumber = mysqli_real_escape_string($conn, $_POST["postnumber"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);

    // Insert user data into the database
    $sql = "INSERT INTO user (username, password, email, number, address, postnumber, city) 
            VALUES ('$username', '$password', '$email', '$number', '$address', '$postnumber', '$city')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Registration successful, redirect to login page
        header("Location: Login.php");
        exit;
    } else {
        // Registration failed
        echo "Registration failed. Please try again later.";
    }
}

// Close the MySQL connection
mysqli_close($conn);
?>

</html>







