<div class="jumbotron">
			<h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
		</div>

        <form method="post" action="begin.php?page=confirm">
            <label for="naam">Naam</label><br>
            <input type="text" id="naam" name="naam" >

            <br><label for="straat">Straat en nr</label><br>
            <input type="text" id="straat" name="straat" >

            <br><label for="postcode">Postcode</label><br>
            <input type="text" id="postcode" name="postcode" >

            <br><label for="gemeente">Gemeente</label><br>
            <input type="text" id="gemeente" name="gemeente" >

            <br><label for="telefoon">Telefoonnummer</label><br>
            <input type="text" id="telefoon" name="telefoon" >

            <br><label for="email">E-mail adres</label><br>
            <input type="email" id="email" name="email" >

            <br><label for="geboortedatum">Geboortedatum</label><br>
            <input type="date" id="geboortedatum" name="geboortedatum" >

            <br><label for="fotoTitel">Titel van je foto</label><br>
            <input type="text" id="fotoTitel" name="fotoTitel" >

            <br><label for="camera">Camera</label><br>
            <input type="text" id="camera" name="camera" >

            <br><label for="lens">Lens</label><br>
            <input type="text" id="lens" name="lens" >

            <br><label for="beschrijving">Beschrijf je foto</label><br>

            <textarea id="beschrijving" name="beschrijving"></textarea>

            <button type="submit">Deelnemen</button>
        </form>