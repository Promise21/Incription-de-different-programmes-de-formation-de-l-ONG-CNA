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

    <link href="<?= ASSETS ?>/css/releves.css" rel="stylesheet" />
</head>

<body>

    
    
    <section class="content-section bg-primary text-white text-center" id="services">
        <!-- logo -->
    <img class="logo" src="<?= ASSETS ?>/assets/logo/cna_logo.png" alt="...">
        <?php
            auth_check();
            if (isset($_SESSION['username'])) : ?>
                <p class="wlcm-msg"> Bienvenue Administrateur <b><?= $_SESSION['username'];  ?></b>  !</p>
        
            <?php endif; ?>
    <div class="logout">
        <a class="back" href="logout">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg> Deconnexion
    </a>
    </div>
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text-warning mb-0">Releve</h3>
                <h2 class="mb-5">
                <marquee direction="left" class="rb-6">
        <p class="rb-7">Administrateur choisissez le type de formation vous voulez consultez !</p>
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
                        text-decoration: none;
                        float: right;
                        color: white;
                       margin-top: -120px;
                       padding: 0px 10px 2px;
                    }
                    .logo{
                        float: left;
                       margin-top: -120px;
                       padding: 0px 10px 2px;
                    }
                    

                </style>
               
                <!-- formation gratuite -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <a href="Gratuite_releve">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-gift" viewBox="0 0 16 16">
                                <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                            <p class="text-faded mb-0">Formation gratuite</p>
                        </a>
                    </span>
                </div>
                <!-- formation productivite en enterprise                                          -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <a href="subreleve_controller">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-wallet" viewBox="0 0 16 16">
                                <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                            </svg>
                            <p class="text-faded mb-0">Formation Professionnel</p>
                        </a>
                    </span>
                </div>
                
            </div>
        </div>
    </section>

    
<?php include"footer.php";?>
    

    
</body>

</html>