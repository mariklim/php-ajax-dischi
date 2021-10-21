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

            <!-- cycle PHP -->
                <?php foreach ($database as $data) : ?>

                    <!-- Album view HTML  -->
                    <div class="card">
                        <div class="card-img">
                            <img src=<?php echo $data['poster'] ?> alt="<?php echo $data['title'] ?>">
                        </div>
                        <div class="card-description">
                            <h3><?php echo $database[0]['title'] ?></h3>
                            <p><?php echo $database[0]['author'] ?></p>
                            <p><?php echo $database[0]['year'] ?></p>
                        </div>
                    </div>
                   <!--/ Album view HTML  -->

                <?php endforeach; ?>
                <!-- /cycle PHP -->

            </div>
        </div>
    </main>


    <!-- JS, VUE.JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="js/script.js"></script>
    <!-- JS, VUE.JS -->
</body>

</html>