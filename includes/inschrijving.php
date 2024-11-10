<?php
session_start();
include('scripts/fuction.php');

if (isset($_SESSION["login"]) && $_SESSION["login"] === "admin") {
?>

<div class="jumbotron">
    <h1 class="display-4">Deelnemers Wedstrijd:</h1>
</div>

<?php
    $result = getSubscriptions(); 
    if ($result) {
?>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Naam</th>
            <th>Straat en nr</th>
            <th>Postcode</th>
            <th>Gemeente</th>
            <th>Telefoonnummer</th>
            <th>E-mail adres</th>
            <th>Geboortedatum</th>
            <th>Titel van je foto</th>
            <th>Camera</th>
            <th>Lens</th>
            <th>Beschrijf</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $result->fetch_row()) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

<?php
    } else {
        echo "<p>geen deelnemers gevonden.</p>";
    }
} else {
?>
    <div class='jumbotron'>
        <h1 class='display-4'>Login</h1>
    </div>
    <?php showLogin();
}
?>
