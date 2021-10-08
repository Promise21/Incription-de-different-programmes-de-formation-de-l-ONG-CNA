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
</head>

<body>
    <?= auth_check(); ?>
    <a class="btn btn-primary" href="Releve_controller">Retour</a>
    <table class="table table-striped caption-top" border="2" cellpadding="5" cellspacing="1">
        <caption>List of utilisateur</caption>
        <thread>


            <th>nom</th>
            <th>email</th>
            <th>age</th>
            <th>sex</th>
            <th>profession</th>
            <th>tel </th>
            <th>connaissance</th>
            <th>partie_connaissance</th>
            <th>module</th>
            <th>tariffe</th>
            <th>date_demarrage</th>
            <th>date_inscription</th>
        </thread>

        <?php if (is_array($data['Releve'])) : ?>
            <?php foreach ($data['Releve'] as $row) :  ?>
                <tr>

                    <td>
                        <p><?= $row->nom ?></p>
                    </td>
                    <td>
                        <p><?= $row->email ?></p>
                    </td>
                    <td>
                        <p><?= $row->age ?></p>
                    </td>
                    <td>
                        <p><?= $row->sex ?></p>
                    </td>
                    <td>
                        <p><?= $row->profession ?></p>
                    </td>
                    <td>
                        <p><?= $row->tel ?></p>
                    </td>
                    <td>
                        <?php if ($row->connaissance == null) {
                            echo "null";
                        } ?> <p><?= $row->connaissance ?></p>
                    </td>
                    <td>
                        <?php if ($row->partie_connaissance == null) {
                            echo "null";
                        } ?> <p><?= $row->partie_connaissance ?></p>
                    </td>
                    <td>
                        <p><?= $row->module ?></p>
                    </td>
                    <td>
                        <?php if ($row->tariffe == null) {
                            echo "null";
                        } ?> <p><?= $row->tariffe ?></p>
                    </td>
                    <td>
                        <p><?= $row->date_demarrage ?></p>
                    </td>
                    <td>
                        <p><?= $row->date_inscription ?></p>
                    </td>
                </tr>


            <?php endforeach; ?>
        <?php endif; ?>

    </table>

</body>

</html>