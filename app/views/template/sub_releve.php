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

    <!-- <link href="<?= ASSETS ?>/css/styles.css" rel="stylesheet" /> -->
     <link rel="stylesheet" href="<?= ASSETS ?>/css/releves.css"> 
</head>

<body>

    
    
    
    <section class="content-section bg-success text-white text-center" id="services">
    <?php
        auth_check();
        if (isset($_SESSION['username'])) : ?>
            <p class="wlcm-msg"> Bienvenue Administrateur <b><?= $_SESSION['username'];  ?></b>  !</p>
    
        <?php endif; ?>
<a class="back" href="releve_controller">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
</a>
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text-warning mb-0 fb-8">Releve Professionnel</h3>
                <h2 class="mb-5">
                <marquee direction="left" class="rb-6">
        <p class="rb-7">Administrateur choisissez la formation d'ont vous voulez consultez les informations des étudiants !</p>
    </marquee>
                </h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <style>
                    .txt-b{
                        text-align: justify;
                        width: 100%;
                        padding-left: 15%;
                        text-decoration: none;
                    }
                    .back{
                        float: left;
                       margin-top: -120px;
                       padding: 0px 10px 2px;
                    }
                    

                </style>
               
               <!-- formation productivite en enterprise -->
               <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                   <span class="service-icon rounded-circle mx-auto mb-3">
                       <a href="Bureautique_releve">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-laptop" viewBox="0 0 16 16">
                           <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                        </svg>
                        <p class="text-faded mb-0">Formation Productivité en Enterprise</p>
                    </a>
                </span>
               </div>
               <!-- formation technique                                         -->
               <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                   <span class="service-icon rounded-circle mx-auto mb-3">
                    <a href="Technique_releve">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                                <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"/>
                            </svg>
                            <p class="text-faded mb-0">Formation technique</p>
                        </a>
                    </span>
                    </div>
                    
                </div>
            </div>
    </section>



    <?php include"footer.php";?>

</body>

</html>