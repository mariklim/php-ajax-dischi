<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.scss">
    <title>Spotify PHP</title>
</head>
<body>

<!-- PHP -->
<?php
include __DIR__ . "/partials/data.php";
// var_dump($database);
// phpinfo();
?>
<!-- /PHP -->

<!--HTML -->
<?php include __DIR__ . "/partials/template/header.php"; ?>
<main>
    <div class="container_centered">
        <div class="cards">
            <div class="card">
                <div class="card-img">
                <img src=<?php echo $database[0]['poster']?>
                 alt="<?php echo $database[0]['title']?>">   
                <?php echo $database[0]['title']?>
                
            
                </div>
                <div class="card-description">Ciao</div>
            </div>
        </div>
    </div>
</main>


<!-- JS, VUE.JS -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="js/script.js"></script>
<!-- JS, VUE.JS -->  
</body>
</html>