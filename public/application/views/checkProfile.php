<div class="">
    <div class="">Pseudonyme: <?php echo $getUserInfo[0]->username ?></div>
    <div class="">Prénom: <?php echo $getUserInfo[0]->firstname ?></div>
    <div class="">Nom: <?php echo $getUserInfo[0]->lastname ?></div>
    <div class="">Téléphone: <?php echo $getUserInfo[0]->phone ?></div>
    <div class="">Mail: <?php echo $getUserInfo[0]->mail ?></div>
    <div class="">Adresse: <?php echo $getUserInfo[0]->adress ?></div>
    <div class="">Ville: <?php echo $getUserInfo[0]->city ?></div>
    <div class="">Code Postal: <?php echo $getUserInfo[0]->zipCode ?></div>
    <a href="<?= base_url() ?>updProfile" class="nav-link btn btn-primary d-flex align-self-center col-4">Modifier mon profil</a>
</div>