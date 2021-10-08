<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="<?= ASSETS ?>/assets/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/bureautique.css">
    <title><?= WEBSITE_NAME . ' | ' . $data['page_title'] ?></title>
</head>

<body>
    <div class="introduction">
        <div class="intro">
            <div class="accueil">
                <a href="home"><i class="bi bi-house"></i>Accueil</a>
            </div>
            <h1>FORMATION Productivité en Entreprise</h1>
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
            <label for="email">Email:</label> <br>
            <input class="inputs" type="email" name="email" required>

        </div><br>


        <!-------Name-------------->
        <div>
            <label for="nom">Nom(s) et Prenom(s):</label> <br>
            <input class="inputs" type="text" name="nom" required>
        </div><br>

        <!-------sex------------------------->
        <div>
            <label for="sex">Sex : </label><br>
            <label class="sex"><input type="radio" name="sex" value="M"> Homme</label>
            <label class="sex"><input type="radio" name="sex" value="F"> Femme</label>
        </div><br><br>

        <!---------AGE-------------->
        <div>
            <label for="age"> Votre Age interval</label> <br>
            <select name="age" required>
                <option value=""></option>
                <option>7-14 ans</option>
                <option>15-20 ans</option>
                <option>21-25 ans</option>
                <option>26-30 ans</option>
                <option>31 ans et +</option>
            </select>
        </div><br>


        <!----------TEL---------------------->
        <div>
            <label for="tel"> Telephone</label><br>

            <input class="inputs" type="tel" name="tel" placeholder="Your answer" required>
        </div><br>

        <!---------Profession---------------->
        <div>
            <label for="Profession"> Profession</label><br>

            <select name="profession" required>
                <option value=""></option>
                <option>Eleve</option>
                <option>Etudiant</option>
                <option>Agent du secteur Public</option>
                <option>Agent de secteur Prive</option>
                <option>Chercheur d'emploi</option>
                <option>Enterpreneur</option>
                <option>Autre</option>
            </select>
        </div><br>






        <!----------Connaissances-------------------->



        <div>
            <label for="connaissances">Avez vous des Connaissances de base en Bureautique</label><br>

            <label><input type="radio" name="connaissances" value="oui">Oui</label>
            <label><input type="radio" name="connaissances" value="non">Non</label>
        </div><br>

        <!------------Partie connaissances-------------------------->






        <div>
            <label for="partie_connaissance">Si votre réponse est oui, lesquels?</label><br>

            <input type="checkbox" name="connaissance[]" value="word" <?php if (@in_array("word", $conn)) echo "checked" ?>>word<br>
            <input type="checkbox" name="connaissance[]" value="excel">excel<br>
            <input type="checkbox" name="connaissance[]" value="powerpoint">powerpoint<br>
            <input type="checkbox" name="connaissance[]" value="autre">autre<br>

        </div><br>


        <div>
            <h4> TYPES DE MODULES DE FORMATION, TARIFS ET LIEU</h4>
            <p>Dans cette partie nous présentons les Modules de formations proposées par le programmes</p>
        </div>






        <!----------------Module----------------->
        <div>
            <label for="Module">Quel Type de Module ou programme souhaitez-vous suivre ?</label><br>

            <select name="module" required>
                <option value=""></option>
                <option value="Traitement">Traitement ( Conception des supports professionnels à partir outils de traitement de texte) </option>
                <option value="Tableur "> Tableur (Conception d'utilitaire de gestion en Compta, QHSE, FINANCE, Logistique...)</option>
                <option value="Présentation">Présentation (Conception des supports Professionnels et de Présentation ) </option>
            </select>
        </div><br>


        <!--------------formation_et_cout-------------------------->
        <div>
            <label for="tariff">Type de Formation et Cout</label><br>

            <select name="tariffe" required>
                <option value=""></option>
                <option>Formation pour un (1) Module(20H): 50 000F CFA/ Module</option>
                <option>Formation pour deux (2) Module(40H): 100 000F CFA/ Module</option>
                <option>Formation pour trois (3) Module(60H): 150 000F CFA/ Module</option>
                <option>Formation a Domicile pour un(1) Module(10H): 100 000F CFA/ Module</option>
                <option>Formation a Acceleree pour un(1) Module(20H): 75 000F CFA/ Module</option>
                <option>Formation a Acceleree a Domicile pour un(1) Module(20H): 100 000F CFA/ Module</option>
                <option>Autre</option>
            </select>
        </div><br>



        <!--------------date-------------------------->
        <div>
            <label for="date_demarrage">Date de démarrage</label><br>
            <input class="inputs" type="date" name="date_demarrage" required>
        </div><br>



        <!----------submit-------------------->
        <input class="btns" type="submit" value="submit" name="submit">
    </form>



</body>

</html>