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
<body>
<button  type="button" class="collapsible">Menu</button>
    <div class="head">
        <header>
            <img id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png" alt="Digistore-logos">
            <a href="Index.html">Home</a>
            <a href="VRs.html">VR</a>
            <a href="VR-Accessory.html">VR-Accessory</a>
            <a href="Cameras.html">Camera</a>
            <a href="Camera-Accessory.html">Camera-Accessory</a>
            <a href="Hardware&Software.html">Hardware/Software</a>
            <a id="CA" href="Cart.html"><img src="Bilder/Cart-white.png" alt="cart" id="cart"><p>Cart</p></a>
        </header>
    </div>

    <button id="dark" onclick="dark()">Dark</button>

    <button id="redirectButton" >Login inn</button>
<?php
        if(isset($_POST['submit'])){
            //Gjøre om POST-data til variabler
            $brukernavn = $_POST['brukernavn'];
            $passord = md5($_POST['passord']);
            $epost = $_POST['epost'];
            
            //Koble til databasen
            $dbc = mysqli_connect('localhost', 'root', 'Admin', 'kunder')
              or die('Error connecting to MySQL server.');
            
            //Gjøre klar SQL-strengen
            $query = "SELECT username, password, email from users where username='$brukernavn' and password='$passord' and email='$epost'";
            
            echo $query;
            
            //Utføre spørringen
            $result = mysqli_query($dbc, $query)
              or die('Error querying database.');
            
            //Koble fra databasen
            mysqli_close($dbc);

            //Sjekke om spørringen gir resultater
            if($result->num_rows > 0){
                //Gyldig login
                header('location: success.html');
            } else {
                //Ugyldig login
                header('location: failure.html');
            }
        }
    ?>
    <script src="script.js"></script>
</body>
</html>