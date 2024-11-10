<?php
include('scripts/fuction.php');


$bericht = MaakB();

$verzender = "FROM: <test@localhost>";

if (mail("test@localhost", "Deelname Wedstrijd", $bericht, $verzender)) {
    echo "Verzonden";
} else {
    echo "Niet verzonden";
}

saveToDb();
?>
    <?php
        echo '<p>Naam '.$_POST["naam"].'</p>';
        echo '<p>Adres '.$_POST["straat"].'</p>';
        echo '<p>Postcode '.$_POST["postcode"].'</p>';
        echo '<p>Gemeente '.$_POST["gemeente"].'</p>';
        echo '<p>Telefoonnummer '.$_POST["telefoon"].'</p>';
        echo '<p>E-mailadres '.$_POST["email"].'</p>';
        echo '<p>Geboortedatum '.$_POST["geboortedatum"].'</p>';
        echo '<p>FotoTitel '.$_POST["fotoTitel"].'</p>';
        echo '<p>Camera '.$_POST["camera"].'</p>';
        echo '<p>Lens '.$_POST["lens"].'</p>';
        echo '<p>Fotobeschrijving '.$_POST["beschrijving"].'</p>';
        ?>
    </div>   
</div>


