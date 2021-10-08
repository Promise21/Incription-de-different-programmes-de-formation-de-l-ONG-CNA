<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="<?= ASSETS ?>/assets/favicon.ico" />
    <link rel="stylesheet" href="<?= ASSETS ?>/css/gratuite.css">
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
                <a href="home"><i class="bi bi-house"></i>Accueil</a>
            </div>
            <div class="intro-header">
                <h1>FORMATION GRATUITE</h1>
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
            <LABEL> Email:</LABEL><br>
            <input class="inputs" type="email" name="email" class="email" required>
        </div><br>


        <!-------Name-------------->
        <div>
            <LABEL>Nom(s) et Prenom(s):</LABEL><br>
            <input class="inputs" type="text" name="nom" required>
        </div><br>

        <!-------sex------------------------->
        <div>
            <label for="sex">Sex : </label><br>
            <label><input type="radio" name="sex" value="M"> Homme</label>
            <label><input type="radio" name="sex" value="F"> Femme</label>
        </div><br><br>

        <!---------AGE-------------->
        <div>
            <label for="age"> Votre l'Age interval</label><br>
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
            <label for="tel"> Telephone</label><br>

            <input class="inputs" type="tel" name="tel" placeholder="Your answer" required>
        </div><br>

        <!---------Profession---------------->
        <div>
            <label for="Profession"> Profession</label>

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

        <div>
            <h4>TYPES DE FORMATIONS & LIEU</h4>
            <p>Dans cette partie nous présentons les formations proposées par le programmes</p>
        </div>


        <!--------------module------------------------->
        <div>
            <label for="module">Quel type de programme souhaitez-vous suivre ? </label>

            <select name="module" required>
                <option value=""></option>
                <option>Outils de Productivités (Traitement de Texte): 10H</option>
                <option>Réseaux Informatiques: 10H</option>
                <option>Maintenance en Informatique: 10H</option>
                <option>Technologie de l'éducation (Simulation des Sciences ou des Mathématiques )</option>
                <option>Autres</option>
            </select>
        </div><br>

        <!-------------date------------------------->

        <div>
            <label for="date_demarrage">Date demarrage</label><br>
            <input class="inputs" type="date" name="date_demarrage" required>
        </div>

        <!----------submit-------------------->
        <input class="btns" type="submit" value="Valider" name="submit">
    </form>



</body>

</html>