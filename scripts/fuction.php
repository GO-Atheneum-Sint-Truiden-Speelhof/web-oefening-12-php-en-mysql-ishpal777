<?php

function MaakB() {
    $bericht = 'Naam: ' . $_POST['naam'] . '<br>' .
               'Straat: ' . $_POST['straat'] . '<br>' .
               'Gemeente: ' . $_POST['postcode'] . ', ' . $_POST['gemeente'] . '<br>' .
               'Telefoonnummer: ' . $_POST['telefoon'] . '<br>' .
               'E-mail adres: ' . $_POST['email'] . '<br>' .
               'Geboortedatum: ' . $_POST['geboortedatum'] . '<br><br>' .
               'Titel van je foto: ' . $_POST['fotoTitel'] . '<br>' . 
               'Camera: ' . $_POST['camera'] . '<br>' .
               'Lens: ' . $_POST['lens'] . '<br>' .
               'Beschrijf je foto: ' . $_POST['beschrijving'];
               
    return $bericht;
}

function ingeschrevenB() {
    echo '<div class="row"><div class="col-md-12"><p class="green">Je bent succesvol ingeschreven!</p></div></div>';
}

function saveToDb() {
    $conn = connectToDB(); 
    
    if ($conn) {
        $sql = "INSERT INTO wedstrijd (Naam, straat, postcode, gemeente, telefoon, email, geboortedatum, fotoTitel, camera, lens)
                VALUES ('" . $_POST['naam'] . "', '" . $_POST['straat'] . "', '" . $pc . "', '" . $_POST['gemeente'] . "', '" . $_POST['telefoon'] . "', 
                        '" . $_POST['email'] . "', '" . $gb . "', '" . $_POST['fotoTitel'] . "', '" . $_POST['camera'] . "', '" . $_POST['lens'] . "')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssisssssss", $_POST['naam'], $_POST['straat'], $_POST['postcode'], $_POST['gemeente'], $_POST['telefoon'], 
                          $_POST['email'], $_POST['geboortedatum'], $_POST['fotoTitel'], $_POST['camera'], $_POST['lens']);

        if ($stmt->execute()) {
            echo "Succesvol opgeslagen.";
        } else {
            echo "Fout bij opslaan " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Geen verbinding database.";
    }
}

function LAATLOGINZIEN() {
    if (isset($_GET["login"]) && $_GET["login"] === "yes") {
        $conn = connectToDB();
        if ($conn) {
            $sql = "SELECT Wachtwoord FROM login WHERE Login = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $_POST['username']);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows === 1) {
                $row = $result->fetch_assoc();
                
                if ($_POST["password"] === $row['Wachtwoord']) {
                    $_SESSION["login"] = $_POST['username'];
                    echo '<p class="green">Succes: Succesvol ingelogd</p>';
                    header("Refresh:3");
                } else {
                    echo '<p class="error">Error: Verkeerd wachtwoord</p>';
                    showLoginForm();
                }
            } else {
                echo '<p class="error">Error: Geen gebruiker gevonden met die naam</p>';
                showLoginForm();
            }

            $stmt->close();
            $conn->close();
        }
    } elseif (!isset($_SESSION["login"])) {
        showLoginForm();
    }
}

function HaalB() {
    $conn = connectToDB();
    if ($conn) {
        $sql = "SELECT * FROM wedstrijd";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            return $result;
        }
    }
    return false;
}
