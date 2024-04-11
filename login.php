<!DOCTYPE html>
<html>

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
		<button type="button" class="collapsible">Menu</button>
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
		<h2>Login:</h2>
		<form action="Login.php" method="post">
			<label for="username"><b>Username:</b></label> <br />
			<input type="text" name="username" placeholder="username" required><br />
			<label for="password"><b>Password:</b></label> <br />
			<input type="password" name="password" placeholder="password" required><br />
			<label for="email"><b>Email:</b></label> <br />
			<input type="text" name="email" placeholder="email" required><br />

			<input class="button" type="submit" value="Login"><br />
		</form>
		<p>Eller klikk <a href="register.php">her</a> for å registrere ny bruker

	</div>
	<br>

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
session_start();
$server = "localhost";
$user = "root";
$pw = "Admin";
$db = "termin";

$conn = mysqli_connect($server, $user, $pw, $db) or die('noe gikk galt');

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $raw_password = $_POST["password"];
    $hashed_password = hash('sha256', $raw_password);

    // Gets the info from the database
    $sql = "SELECT id, username, password, email, is_employee FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    // Checks that everything was done right
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($hashed_password == $row["password"]) {
            if ($row["is_employee"] == 1) {
                header("Location: employee_dashboard.php"); // Redirect to employee dashboard
                exit; // Make sure to exit after redirection
            } else {
                header("Location: Index.php");
                exit; // Make sure to exit after redirection
            }
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

mysqli_close($conn);
?>
</html>
