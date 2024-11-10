<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php?page=start">
        <img src="plaatjes/camera.gif" alt="logo" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#menubalk"
            aria-controls="menubalk" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="menubalk">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="begin.php?page=wedstrijdstart" class="nav-link">Wedstrijd</a>
            </li>
            <li class="nav-item">
                <a href="begin.php?page=winnenstart" class="nav-link">Prijzen</a>
            </li>
            <li class="nav-item">
                <a href="begin.php?page=laurstart" class="nav-link">Laureaat vorig jaar</a>
            </li>
            <li class="nav-item">
                <a href="begin.php?page=deelnemenstart" class="nav-link">Deelnemen</a>
            </li>

            <?php 
                session_start();
                    if (isset($_SESSION["login"]) && $_SESSION["login"] === "admin") {
                    echo '<li class="nav-item"><a href="begin.php?page=inschrijving" class="nav-link">Inschrijvingen</a></li>';
                    echo '<li class="nav-item"><a href="begin.php?page=logout" class="nav-link">Afmelden</a></li>';
                    } else {
                     echo '<li class="nav-item"><a href="begin.php?page=login" class="nav-link">Login</a></li>';
                    }
?>

      
        </ul>
    </div>
</nav>

