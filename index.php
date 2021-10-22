<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Spotify PHP</title>
</head>

<body>

    <!-- PHP -->
    <?php
    require __DIR__ . "/partials/data.php";
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
                            <h3><?php echo $data['title'] ?></h3>
                            <p><?php echo $data['author'] ?></p>
                            <p><?php echo $data['year'] ?></p>
                        </div>
                    </div>
                    <!--/ Album view HTML  -->

                <?php endforeach; ?>
                <!-- /cycle PHP -->
                

            </div>
        </div>
    </main>
</body>

</html>