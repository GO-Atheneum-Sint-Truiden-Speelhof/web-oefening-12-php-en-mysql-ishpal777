<div class="jumbotron">
    <h1 class="display-4"> Klaar deelnemen Shoot </h1>
</div>

<?php
    $ontvanger = 'test@localhost';
    $onderwerp = 'Inschrijving fotowedstrijd';


    $bericht = "NAAM: ".$_POST["naam"]."
    ADRES: ".$_POST["straat"]."
    POSTCODE: ".$_POST["postcode"]."
    GEMEENTE: ".$_POST["gemeente"]."
    TELEFOONNUMMER: ".$_POST["telefoon"]."
    E-MAILADRES: ".$_POST["email"]."
    GEBOORTEDATUM: ".$_POST["geboortedatum"]."
    TITEL FOTO: ".$_POST["fotoTitel"]."
    CAMERA: ".$_POST["camera"]."
    LENS: ".$_POST["lens"]."
    BESCHRIJVING FOTO: ".$_POST["beschrijving"]."";
 
    $verzender = "FROM: TEST <test@localhost>";
 
    if (mail($ontvanger, $onderwerp, $bericht, $verzender)){
        echo "BERICHT VERZONDEN";
    }
    else{
        echo "BERICHT NIET VERZONDEN";
    }
    function saveToDB() {
        $servername = "localhost";
        $username = "ishpal777";
        $password = "1234";
        $dbname = "test";

        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO wedstrijd (Naam, StraatNr, Postcode, Gemeente, Telefoon, Eamil, Geboortedatum, Camera, Lens, Beschrijving)
        VALUES ('" . $_POST["Naam"] . "', '" . $_POST["StraatNr"] . "', '" . $_POST["Postcode"] . "', '" . $_POST["Gemeente"] . "', '" . $_POST["Telefoon"] . "', '" . $_POST["Eamil"] . "','" . $_POST["Geboortedatum"] . "',
         '" . $_POST["Camera"] . "', '" . $_POST["geboorte"] . "', '" . $_POST["Lens"] . "'" , '" . $_POST["Beschrijving"] . "'" ;
        
        echo $sql;
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }


?>
 

    <div class="col-md-6 invoer">
        <?php 


            echo '<p>Naam:' . $_POST["naam"] . '</p>';
            echo '<p>Adres:' . $_POST["straat"] . '</p>';
            echo '<p>Postcode:' . $_POST["postcode"] . '</p>';
            echo '<p>Gemeente' . $_POST["gemeente"] . '</p>';
            echo '<p>Telefoon:' . $_POST["telefoon"] . '</p>';
            echo '<p>Eamil:' . $_POST["email"] . '</p>';
            echo '<p>Geboortedatum' . $_POST["geboortedatum"] . '</p>';
            echo '<p>FotoTitel:' . $_POST["fotoTitel"] . '</p>';
            echo '<p>Camera:' . $_POST["camera"] . '</p>';
            echo '<p>Lens:' . $_POST["lens"] . '</p>';
            echo '<p>Beschrijving:' . $_POST["beschrijving"] . '</p>';
        ?>
    </div>
</div>



