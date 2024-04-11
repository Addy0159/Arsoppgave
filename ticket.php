<!DOCTYPE html>
<?php
session_start();

// Check if user is logged in
if (isset($_SESSION["user_id"])) {
    // User is logged in, send username to JavaScript
    $username = $_SESSION["username"];
    echo "<script>console.log('Welcome, $username!');</script>";
} else {
    // User is not logged in, send login link to JavaScript
    echo "<script>console.log('<a href=\"Login.php\">Login</a>');</script>";
}
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!-<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ticket</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
</head>

<body>
    <button type="button" class="collapsible">Menu</button>
    <div class="head">
        <header>
            <img style="height: 10%;" id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png"
                alt="Digistore-logos">
            <a href="Index.php">Home</a>
            <a href="VRs.php">VR</a>
            <a href="VR-Accessory.php">VR-Accessory</a>
            <a href="Cameras.php">Camera</a>
            <a href="Camera-Accessory.php">Camera-Accessory</a>
            <a href="Hardware&Software.php">Hardware/Software</a>
            <a id="CA" href="Cart.php"><img style="height: 10%;" src="Bilder/Cart-white.png" alt="cart" id="cart">
                <p>Cart</p>
            </a>
        </header>
    </div>

    <button id="dark" onclick="dark()">Dark</button>

    <button id="Login"><a href="Login.php">Login</a></button>
    <div class="Ticket">
        <form action="ticket.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="FirstName" placeholder="Your name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="LastName" placeholder="Your last name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" name="Email" placeholder="Your Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea name="Problem" placeholder="Write the problem"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <br>
    <br>
    <br>
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
$server = "localhost";
$user = "root";
$pw = "Admin";
$db = "ticket";

$conn = mysqli_connect($server, $user, $pw, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $email = $_POST['Email'];
    $problem = $_POST['Problem'];

    // Sanitize data to prevent SQL injection
    $FirstName = mysqli_real_escape_string($conn, $FirstName);
    $LastName = mysqli_real_escape_string($conn, $LastName);
    $email = mysqli_real_escape_string($conn, $email);
    $problem = mysqli_real_escape_string($conn, $problem);

    // Insert data into the database
    $sql = "INSERT INTO tickets (FirstName, LastName, Email, Problem) VALUES ('$FirstName', '$LastName', '$email', '$problem')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>console.log("New record created successfully");</script>';
    } else {
        echo "<script>console.log('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}

$conn->close();

?>
</html>