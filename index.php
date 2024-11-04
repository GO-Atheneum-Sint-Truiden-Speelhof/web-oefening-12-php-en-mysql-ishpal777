<!doctype html>
<html lang=nl>



<?php include("includes/head.php"); ?>

<script>
    function akkoord(){
        location.href = 'begin.php'
    }
    function nietAkkoord(){
        location.href = 'https://www.google.com'
    }
</script>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">CCO fotowedstrijd</h1>
        </div>
        <div class="row">
            <div class="col tegel knoppen">
                <p>Deze website maakt gebruik van cookies. Wil je cookies accepteren?</p>
                <p>
                    <button onclick="akkoord()" class="btn-outline-dark btn-lg">Akkoord</button>
                    <button onclick="nietAkkoord()" class="btn-outline-dark btn-lg">Niet Akkoord</button>
                </p>
            </div>
        </div>
    </div>
</body>
<?php include('includes/footer.php'); ?>
</html>

