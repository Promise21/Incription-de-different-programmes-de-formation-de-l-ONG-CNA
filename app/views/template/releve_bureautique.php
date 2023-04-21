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
<section class="content-section container text-center" >
    <?= auth_check(); ?>
    <a class="back" href="subreleve_controller">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="green" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
    </a>
    <style>
                    
                    .back{
                        float: left;
                       padding: 0px 10px 2px;
                    }
                    

    </style>
    <table class="table table-success caption-top" border="2" cellpadding="5" cellspacing="1">
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
</section>
</body>

</html>