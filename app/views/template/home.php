<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= WEBSITE_NAME . ' | ' . $data['page_title'] ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= ASSETS ?>/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= ASSETS ?>/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Menu</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Acceuil</a></li>
            <li class="sidebar-nav-item"><a href="#services">Services</a></li>
            <li class="sidebar-nav-item"><a href="#programmes">Programmes</a></li>
            <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <!-- style de logo -->
    <style>
        .logo {
            top: 15px;
            height: 20vh;
            float: left;
        }
    </style>
    <!-- logo -->
    <img class="logo" src="<?= ASSETS ?>/assets/logo/cna_logo.png" alt="...">
    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">Bienvenue sur la plateforme de l'ONG CNA</h1>
            <h3 class="mb-5"><em></em></h3>

            <h2>Caravane Numérique Africaine</h2>
            <p class="lead mb-5">
                l'ONG CNA est une organisation qui s'investies principalement dans l'apprentissage
                du numériques aux nouveaux apprenants .
            </p>
        </div>

    </header>

    <!-- Services-->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Services</h3>
                <h2 class="mb-5">Nous vous présentons nos trois offres</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <style>
                    .txt-b{
                        text-align: justify;
                        width: 100%;
                        padding-left: 15%;
                        text-decoration: none;
                    }
                    a{
                        text-decoration: none;
                    }

                </style>
               
                <!-- formation gratuite -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <a href="Inscription_gratuite">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                        </svg></span>
                        <p class="text-faded mb-0">Formation gratuite</p>
                        <p class="text-faded mb-0 txt-b">Elle presente l'ensemble des compétences de l'ONG , qui ne seront offert aléatoirements a des utilisateurs chanceux . A ceux qui veulent tenter bonne chance !   </p>
                    </a>
                </div>
                <!-- formation productivite en enterprise                                          -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <a href="inscription_bureautique">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                        </svg>
                    </span>
                        <p class="text-faded mb-0">Formation Productivité en Enterprise</p>
                        <p class="text-faded mb-0 txt-b">Cette formation offre aux apprenants les compétences technique en informatique de gestion qui sont nécessessaire en entreprise . 
                        </p>
                    </a>
                </div>
                <!-- formation technique -->
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <a href="inscription_technique">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                            <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z" />
                        </svg>
                    </span>
                        <p class="text-faded mb-0">Formation Technique</p>
                        <p class="text-faded mb-0 txt-b">En vous incrivant a cette formation vous bénéficier sur les compétances du domaines informatique web et de la maintenance . </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="content-section" id="programmes">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Programmes</h3>
                <h2 class="mb-5"> Projects Recent</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Youth Mobile</div>
                                <p class="mb-0">C'est un programme de réinsertion dans le numerique pour les détenus !</p>
                            </div>
                        </div>

                        <img class="img-fluid" src="<?= ASSETS ?>/assets/img/portfolio-1.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">The Academic</div>
                                <p class="mb-0">C'est un programme de l'ONG CNA qui offrent des stages aux etudiants !</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= ASSETS ?>/assets/img/portfolio-2.jpeg" alt="..." />
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- Map-->
    <div class="map" id="contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.710786911382!2d9.4464633!3d0.4206625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x107f3b64166ab7ad%3A0x4a3ba84768137612!2sELI%20(English%20Language%20Institute)!5e0!3m2!1sfr!2sga!4v1631803547158!5m2!1sfr!2sga" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <br />
        <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
    </div>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" target="_blank" href="https://www.facebook.com/ong.cna"><i class="icon-social-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" target="_blank" href="https://twitter.com/ongcna"><i class="icon-social-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" target="_blank" href="https://www.youtube.com/channel/UC_Xq-mIAMY2SkxuIgQ2IZ2w/featured"><i class="icon-social-youtube"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" target="_blank" href="https://www.linkedin.com/company/ongcna/"><i class="icon-social-linkedin"></i></a>
                </li>

            </ul>
            <p class="text-muted small mb-0">Copyright &copy; ONG CNA 2021</p>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= ASSETS ?>/js/scripts.js"></script>
</body>

</html>