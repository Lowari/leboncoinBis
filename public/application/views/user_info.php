<div class="pt-5">
    <h1 class="h3 pb-3">Profil de l'utilisateur</h1>

    <div class="card shadow">
        <h2 class="card-header h4"><strong>"nom de l'utilisateur"</strong> <i class="fas fa-user-tag"></i></h2>
        <div class="card-body">
            <h3 class="card-title h5">Informations personnelles</h3>
            <p class="card-text">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nom d'utilisateur :</b> </li>
                <li class="list-group-item"><b>Identifiant :</b> </li>
                <li class="list-group-item"><b>E-mail :</b> </li>
                <li class="list-group-item"><b>Tel. : </b></li>
                <li class="list-group-item"><b>Adresse : </b></li>
                <li class="list-group-item"><b>Ville : </b></li>
                <li class="list-group-item"><b>Code postal : </b></li>
            </ul>
            <a href="<?= base_url()?>adminAccess" class="btn btn-primary mt-2">Retour</a>
            </p>
        </div>
    </div>

    <h1 class="h3 pt-5 pb-2">Annonce(s) déposée(s)</h1>

    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card">
                <img src="/assets/img/cat.jpg" class="card-img-top img-ratio" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre de l'annonce</h5>
                    <p class="card-text text-secondary">
                        description blablablbaa fefe
                    </p>
                    <p class="text-primary">
                        Prix : 42 <span>Euros</span>
                    </p>
                </div>
                <div class="card-footer text-center">
                    <a href="" class="text-center">Supprimer</a>
                </div>
            </div>
        </div>
    </div>