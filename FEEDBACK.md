# Feedback #
## De opdrachten ##
| Opdracht | Goed (5) | Voldoende (3) | Onvoldoende (1) | Niet (0) | Score (35) |
| :------- | :---: | :---------: | :-----------: | :----: |---:|
| De leerling voorziet een startpagina waar de gebruiker moet akkoord gaan met het gebruik van cookies. De leerling start een cookie. | X | | | |5 |
| De leerling maakt een inschrijvingsformulier en kan dit uitlezen.  | X | | | | 5|
| De leerling bewaart de gegevens in een databank.  | | | X | | 1|
| De leerling kan de gegevens uitlezen uit de databank en tonen in een tabel of lijst.  | X | | | | 5|
| De leerling voorziet een loginpagina die een gebruiker en paswoord controleert in de databank. | | | X | | 1|
| De leerling voorziet paswoord-hashing om het paswoord veilig te bewaren.  | | | | X | 0|
| De leerling zorgt dat enkel een ingelogde persoon de lijst met gegevens kan bekijken. | X | | | | 5|
||||||22|


## Algemene feedback ##
* Je start 2x een sessie: 1. in nav.php, 2. in login.php. Dit geeft uiteraard een foutmelding.
* login.php: Deze lijkt héél sterk op die van je medeleerlingen.
* login.php (74): Waarom is het _action_-attribuut leeg? Welk script roep je dan op?
* login.php (81): het **endif** statement is verouderd sinds PHP 4.0.0. We gebruiken toch { } om codeblokken te onderscheiden?
* inschrijving.php: Deze pagina zal niet werken. Je refereert naar functies die niet bestaan *getSubscriptions()* en *showLogin()* ( -2 )
* Bovendien include je het *fuction.php* bestand waarin ook maar liefst 8 PHP-fouten staan. Hier zijn fouten in de opbouw van de SQL-statements, worden er niet bestaande functies opgeroepen, ... ( -2 )

Je behaalde een score van __18/35__
