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
            <a href="Index.html">Home</a>
            <a href="VRs.html">VR</a>
            <a href="VR-Accessory.html">VR-Accessory</a>
            <a href="Cameras.html">Camera</a>
            <a href="Camera-Accessory.html">Camera-Accessory</a>
            <a href="Hardware&Software.html">Hardware/Software</a>
            <a id="CA" href="Cart.html"><img src="Bilder/Cart-white.png" alt="cart" id="cart">
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

<?php
$server = "localhost";
$user = "root";
$pw = "Admin";
$db = "termin";

$conn = mysqli_connect($server, $user, $pw, $db) or die ('noe gikk galt');




// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = hash('sha256', $_POST["password"]);
    $email = $_POST["email"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $postnumber = $_POST["postnumber"];
    $city = $_POST["city"];

// Sends the the info into the database
    $sql = "INSERT INTO user (id, username, password, email, number, address, postnumber, city) VALUES (id, '$username', '$password', '$email', '$number', '$address', '$postnumber', '$city')";

//  Checks that everything was done right 
$result = mysqli_query($conn, $sql) or die('Noe gikk galt');

// Close the MySQL connection
mysqli_close($conn);

// Redirect to a new HTML page
header("Location: Login.php");
exit;
}


?>
</body>

</html>







