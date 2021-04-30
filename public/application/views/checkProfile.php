
  
<div class="pt-5">
    <h1 class="h3 pb-3">Profil de l'utilisateur</h1>

    <div class="card shadow mb-5">   
        <div class="card-body">
            <h3 class="card-title h5">Informations personnelles</h3>
            <p class="card-text">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Prénom</b>  :<?php echo $getUserInfo[0]->firstname ?> </li>
                <li class="list-group-item"><b>Nom</b> : <?php echo $getUserInfo[0]->lastname ?></li>
                <li class="list-group-item"><b>Identifiant</b> : <?php echo $getUserInfo[0]->username ?></li>
                <li class="list-group-item"><b>E-mail :</b> <?php echo $getUserInfo[0]->mail ?></li>
                <li class="list-group-item"><b>Tel. :</b> <?php echo $getUserInfo[0]->phone ?></li>
                <li class="list-group-item"><b>Adresse :</b> <?php echo $getUserInfo[0]->adress ?></li>
                <li class="list-group-item"><b>Ville :</b> <?php echo $getUserInfo[0]->city ?></li>
                <li class="list-group-item"><b>Code postal :</b> <?php echo $getUserInfo[0]->zipCode ?></li>
            </ul>
            <a href="<?= base_url() ?>updProfile" class="btn btn-primary mt-2">Modifier mon profil</a>
            </p>
        </div>
    </div>

    