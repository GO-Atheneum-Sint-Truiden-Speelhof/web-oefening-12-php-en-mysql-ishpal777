<div class="jumbotron">
    <h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
</div>

<form method="post" action="begin.php?page=confirm">
    <label for="naam">Naam</label><br>
    <input type="text" id="naam" name="naam" required>

    <br><label for="straat">Straat en nr</label><br>
    <input type="text" id="straat" name="straat" required>

    <br><label for="postcode">Postcode</label><br>
    <input type="text" id="postcode" name="postcode" title="Geef 4-cijferige postcode in" required>

    <br><label for="gemeente">Gemeente</label><br>
    <input type="text" id="gemeente" name="gemeente" required>

    <br><label for="telefoon">Telefoonnummer</label><br>
    <input type="tel" id="telefoon" name="telefoon" title="Geef telefoonnummer in" required>

    <br><label for="email">E-mail adres</label><br>
    <input type="email" id="email" name="email" required>

    <br><label for="geboortedatum">Geboortedatum</label><br>
    <input type="date" id="geboortedatum" name="geboortedatum" required>

    <br><label for="fotoTitel">Titel van je foto</label><br>
    <input type="text" id="fotoTitel" name="fotoTitel" required>

    <br><label for="camera">Camera</label><br>
    <input type="text" id="camera" name="camera">

    <br><label for="lens">Lens</label><br>
    <input type="text" id="lens" name="lens">

    <br><label for="beschrijving">Beschrijf je foto</label><br>
    <textarea id="beschrijving" name="beschrijving" required></textarea>

    <button type="submit">Deelnemen</button>
</form>
