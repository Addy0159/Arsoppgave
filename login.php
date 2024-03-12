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


</body>

</html>
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

	//  Gets the info from the database
	$sql = "SELECT id, username, password, email FROM user WHERE username = '$username'";
	$result = $conn->query($sql);

	//  Checks that everything was done right 
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		if ($hashed_password == $row["password"]) {
			header("Location: Index.html");
			exit; // Make sure to exit after redirection
		} else {
			echo "Invalid password";
		}
	} else {
		echo "User not found";
	}
}








mysqli_close($conn);

?>