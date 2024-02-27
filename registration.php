
<html>
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
            <img style="height: 10%;" id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png" alt="Digistore-logos">
            <a href="Index.html">Home</a>
            <a href="VRs.html">VR</a>
            <a href="VR-Accessory.html">VR-Accessory</a>
            <a href="Cameras.html">Camera</a>
            <a href="Camera-Accessory.html">Camera-Accessory</a>
            <a href="Hardware&Software.html">Hardware/Software</a>
            <a id="CA" href="Cart.html"><img style="height: 10%;" src="Bilder/Cart-white.png" alt="cart" id="cart"><p>Cart</p></a>
        </header>
    </div>

    <button id="dark" onclick="dark()">Dark</button>

    <button id="redirectButton" >Login inn</button>

        <p>Opprett ny bruker:</p>
        <form method="post">
        <label for="brukernavn">Brukernavn:</label>
            <input type="text" name="brukernavn" /><br />
            <label for="passord">Passord:</label>
            <input type="password" name="passord" /><br />
            <label for="epost">Epost</label>
            <input type="text" name="epost" /><br />

            <input type="submit" value="Logg inn" name="submit" />
        </form>    
        <script src="script.js"></script>
    </body>
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
            $query = "INSERT INTO users VALUES ('$brukernavn','$passord','$epost')";
            
            //Utføre spørringen
            $result = mysqli_query($dbc, $query)
              or die('Error querying database.');
            
            //Koble fra databasen
            mysqli_close($dbc);

            //Sjekke om spørringen gir resultater
            if($result){
                //Gyldig login
                echo "Takk for at du lagde bruker! Trykk <a href='login.php'>her</a> for å logge inn";
            }else{
                //Ugyldig login
                echo "Noe gikk galt, prøv igjen!";
            }
        }
    ?>
</html>