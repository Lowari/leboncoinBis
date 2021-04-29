<div class="p-5 row d-flex justify-content-center ">

    <div class="col-6 border">
        <p class="h3 d-flex justify-content-center">Bonjour !</p>
            <p class="d-flex justify-content-center">Connectez-vous pour découvrir toutes nos fonctionnalités</p>
        <form method="POST" action="addUser">
            <div class="form-group">
                <label class="form-control-label" for="username">Pseudonyme</label>
                <input class="form-control" type="text" id="username" name="username" value="<?= set_value('username'); ?>">
                <?= form_error('username') ?>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="password">Mot de passe</label>
                <input class="form-control" type="password" id="password" name="password" value="<?= set_value('password'); ?>">
                <?= form_error('password') ?>
            </div>
            <div class="d-flex justify-content-center pb-2"><input type="submit" name="submit" class="btn btn-primary" value="Ajouter" /></div>
    </div>
</div>
</form>