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
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
  <link href="Port.css" rel="stylesheet" type="text/css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
</head>

<body>
  <header>
    <img id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png" alt="Digistore-logos">
    <a href="Index.php">Home</a>
    <a href="My_work.php">Portfolio</a>
    <a href="Gallery.php">Gallery</a>
    <a href="design_manual.php">Design manual</a>
  </header>
  <button id="dark" onclick="dark()">Dark</button>
  <button id="Login"><a href="Login.php">Login</a></button>
  <div id="Gallery">
    <table>
      <tr>
        <td>
          <img class="døden" src="Bilder/Gallery/Doden1.jpg"
            alt="Bilde fra forestillingen døden på oslo s på økern senteret">
        </td>

        <td>
          <img class="døden" src="Bilder/Gallery/Doden2.jpg"
            alt="Bilde fra forestillingen døden på oslo s på økern senteret">
        </td>

        <td>
          <img src="Bilder/Gallery/Sun-Set.jpg" alt="Sol ned gang">
        </td>
      </tr>

      <tr>
        <td>
          <img src="Bilder/Gallery/Tres.jpg" alt="Trær i høst tiden">
        </td>

        <td>
          <img src="Bilder/Gallery/Pretty_Clouds.jpg" alt="Skyer i sol ned gang">
        </td>

        <td>
          <img src="Bilder/Gallery/Ice_Thing.jpg" alt="isskulptur på stovner senteret">
        </td>

      </tr>

      <tr>
        <td>
          <img src="Bilder/Gallery/Forest.jpg" alt="Skog på lutvann">
        </td>

        <td>
          <img src="Bilder/Gallery/Lake.jpg" alt="innsjø på lutvann">
        </td>

        <td>
          <img src="Bilder/Gallery/Clouds5.jpg" alt="Skyer">
        </td>
      </tr>
    </table>
  </div>
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

</html>