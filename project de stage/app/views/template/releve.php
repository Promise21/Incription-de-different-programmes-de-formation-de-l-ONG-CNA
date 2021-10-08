<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="<?= ASSETS ?>/assets/favicon.ico" />
    <link rel="stylesheet" href="<?= ASSETS ?>/css/bootstrap/bootstrap.min.css">
    <title><?= WEBSITE_NAME . ' | ' . $data['page_title'] ?></title>

    <link rel="stylesheet" href="<?= ASSETS ?>/css/releve.css">
</head>

<body>

    <?php
    auth_check();
    if (isset($_SESSION['username'])) : ?>
        <p class="wlcm-msg"> Bien venue <?= $_SESSION['username'];  ?></p>

    <?php endif; ?>

    <div class="logout">
        <a class="btn btn-primary" href="logout">Log out</a>
    </div>

    <marquee direction="right">
        <p>le releve de formation de ong </p>
    </marquee>

    <div class="txt-container">


        <a href="Gratuite_releve">
            <p class="formation">Formation Gratuite</p>
        </a>


        <a href="Bureautique_releve">
            <p class="formation">Formation Productivite en Enterprise</p>
        </a>

        <a href="Technique_releve">
            <p class="formation">Formation Technique</p>
        </a>

    </div>

</body>

</html>