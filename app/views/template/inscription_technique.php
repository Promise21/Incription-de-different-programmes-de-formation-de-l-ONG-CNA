<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="<?= ASSETS ?>/assets/favicon.ico" />
    <link rel="stylesheet" href="<?= ASSETS ?>/css/technique.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title><?= WEBSITE_NAME . ' | ' . $data['page_title'] ?></title>
</head>

<body>
    <div class="introduction">
        <div class="intro">
            <div class="accueil">
                <a href="home" class="accueil"><i class="bi bi-house"></i>Accueil</a>
            </div>
            <h1>FORMATION TECHNIQUES</h1>
            <div class="intro-body">
                <p>Les frais d'inscriptions à ce programme s'élèvent à dix mille Francs CFA (10 000 F CFA) pour le participant.</p>

                <p class="require">*Obligatoire</p>
            </div>
        </div>
    </div>
    <p style="font-size: 17pt; color: green; font-weight:700; text-align: center;"><?= success_message() ?></p>

    <form method="post">
        <p class="error"><?= error_message() ?></p>


        <!-------Email------------>
        <div>
            <label for=""> Email</label><br>
            <input class="inputs" type="email" name="email" required>
        </div><br>


        <!-------Name-------------->
        <div>
            <label for=""> Nom(s) et Prenom(s)</label><br>
            <input class="inputs" type="text" name="nom" required>
        </div><br>


        <!-------sex------------------------->
        <div>
            <label for="sex">Sex : </label><br>
            <label><input type="radio" name="sex" value="M"> Homme</label>
            <label><input type="radio" name="sex" value="F"> Femme</label>
        </div><br>

        <!---------AGE-------------->
        <div>
            <label for="age"> Votre interval d'âge</label><br>
            <select name="age" required>
                <option value=""></option>
                <option value="7-14 ans">7-14 ans</option>
                <option value="15-20 ans">15-20 ans</option>
                <option value="21-25 ans">21-25 ans</option>
                <option value="26-30 ans">26-30 ans</option>
                <option value="31 ans et +">31 ans et +</option>
            </select>
        </div><br>


        <!----------TEL---------------------->
        <div>
            <label for="tel"> Téléphone</label><br>

            <input class="inputs" type="tel" name="tel" placeholder="Votre réponse" required>
        </div><br>

        <!---------Profession---------------->
        <div>
            <label for="Profession"> Profession</label><br>

            <select name="profession" required>
                <option value=""></option>
                <option>Eleve</option>
                <option>Etudiant</option>
                <option>Agent du secteur Public</option>
                <option>Agent de secteur Privé</option>
                <option>Chercheur d'emploie</option>
                <option>Entrepreneur</option>
                <option>Autre</option>
            </select>
        </div><br>



        <!----------------Module----------------->
        <div>
            <label for="Module">Quel type de programme souhaitez-vous suivre ? </label><br>

            <select name="module" class="tariff" required>
                <option value=""></option>
                <option>Maintenance en Informatique </option>
                <option>Réseaux Informatique</option>
                <option>Caméras de Surveillance </option>
            </select>
        </div><br>


        <!--------------Tarif et lieux-------------------------->
        <div>
            <label for="tarif_et_lieux">Type de Formation et coût</label><br>

            <select name="tarif_et_lieux" class="tariff" required>
                <option value=""></option>
                <option>Salle de Formation ONG CNA (40H): 115 000 F CFA</option>
                <option>A Domicile (40H) : 150 000 F CFA/ Module.</option>
                <option>Accélérée à la Salle de formation ONG CNA (20 H): 175 000 F CFA</option>
                <option>Accélérée à Domicile (20 H): 200 000 F CFA/ Module</option>
            </select>
        </div><br>


        <!-------------date demarrage------------------------->

        <div>
            <label for="date_demarrage">Date démarrage</label><br>
            <input class="inputs" type="date" name="date_demarrage" required>
        </div>

        <!----------BUTTON-------------------->

        <!----------submit---------------->
        <input class="btns" type="submit" value="submit" name="submit">

    </form>




</body>

</html>