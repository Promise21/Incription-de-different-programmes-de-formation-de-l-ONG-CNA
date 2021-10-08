<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="<?= ASSETS ?>/assets/favicon.ico" />
    <link rel="stylesheet" href="<?= ASSETS ?>/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title><?= WEBSITE_NAME . ' | ' . $data['page_title'] ?></title>

    <link rel="stylesheet" href="<?= ASSETS ?>/css/admin_login.css">
</head>

<body>
    <a href="home"><i class="bi bi-house"></i>Accueil</a>

    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 admin-container">
                    <h1>Admin login</h1>
                    <p style=" color: red; font-weight:700; text-align: center;"><?= error_message() ?></p>
                    <hr class="mb-3">
                    <label><i class="bi bi-person-circle"></i>Username</label>
                    <input class="form-control" type="text" name="username" required>

                    <label><i class="bi bi-key-fill"></i>Mot de Pass</label>
                    <input class="form-control" type="password" name="pwd" required>

                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" value="connecte" name="submit">

                </div>

            </div>
        </div>

    </form>
</body>

</html>