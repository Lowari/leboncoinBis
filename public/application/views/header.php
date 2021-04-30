<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <title>Le bon coin</title>
</head>

<body>

    <header class="pt-2">
        <nav class="navbar navbar-expand-lg">

            <!-- menu burger -->
            <a href="<?= base_url() ?>accueil" class="navbar-brand mr-4" href="#">
                <img src="/assets/img/Leboncoin.fr_Logo_2016.svg" width="180" height="48" class="d-inline-block align-top" alt="">
            </a>

            <!-- menu burger -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars orange-burger"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active mb-2">
                        <?php if (isset($_SESSION["id"])) { ?>
                            <a class="nav-link btn btn-outline-primary" href="<?= base_url() ?>addAd"> Déposer une annonce</a>
                        <?php } else { ?>
                            <a class="nav-link btn btn-outline-primary" href="<?= base_url() ?>postAd"> Déposer une annonce</a>
                        <?php } ?>

                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link search-btn" href="<?= base_url() ?>searchAd"> <i class="fas fa-search fa-lg mx-2"></i> Rechercher</a>
                    </li>
                </ul>
                <?php if (isset($_SESSION["id"])) { ?>
                    <?php if ($_SESSION['lvl'] == 1) { ?>
                        <a href="<?= base_url() ?>adminAccess" class="nav-link btn btn-primary mb-2 mr-lg-2 text-center"> Admin

                        </a>
                    <?php } ?>
                    <a href="<?= base_url() ?>checkProfile" class="ml-lg-3 nav-link btn btn-primary mb-2 text-center"> Voir mon profil

                    </a>
                    <a href="<?= base_url() ?>disconnect" class="ml-lg-3 nav-link btn btn-primary mb-2 text-center"> Déconnexion

                    </a>
                <?php } else { ?>
                    <a href="<?= base_url() ?>signIn" class="nav-link btn btn-primary mb-2 text-center"> Se connecter

                    </a>
                    <a href="<?= base_url() ?>signUp" class="ml-lg-3 mb-2 nav-link btn btn-primary text-center"> Inscription

                    </a>
                <?php } ?>

            </div>
        </nav>

    </header>



    <div class="container">

        <!-- création d'un container global pour mise en page -->
        <!-- /div à mettre dans le footer -->