 <h1 class="pt-2">Formulaire d'inscription</h1>
    <div class="row">
        <div class="col-6">
            <form method="POST" action="addUser" class="col-xl-12">
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

                <div class="form-group">
                    <label class="form-control-label" for="confpass">Confirmer mot de passe</label>
                    <input class="form-control" type="password" id="confpass" name="confpass" value="<?= set_value('confpass'); ?>">
                    <?= form_error('confpass') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="firstname">Prénom</label>
                    <input class="form-control" type="text" id="firstname" name="firstname" value="<?= set_value('firstname'); ?>">
                    <?= form_error('firstname') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="lastname">Nom</label>
                    <input class="form-control" type="text" id="lastname" name="lastname" value="<?= set_value('lastname'); ?>">
                    <?= form_error('lastname') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="phone">Téléphone</label>
                    <input class="form-control" type="text" id="phone" name="phone" value="<?= set_value('phone'); ?>">
                    <?= form_error('phone') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="mail">Mail</label>
                    <input class="form-control" type="text" id="mail" name="mail" value="<?= set_value('mail'); ?>">
                    <?= form_error('mail') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="address">Adresse</label>
                    <input class="form-control" type="text" id="address" name="address" value="<?= set_value('address'); ?>">
                    <?= form_error('address') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="city">Ville</label>
                    <input class="form-control" type="text" id="city" name="city" value="<?= set_value('city'); ?>">
                    <?= form_error('city') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="zipCode">Code postal</label>
                    <input class="form-control" type="text" id="zipCode" name="zipCode" value="<?= set_value('zipCode'); ?>">
                    <?= form_error('zipCode') ?>
                </div>

                <div class="d-flex justify-content-center pb-2"><input type="submit" name="submit" class="btn btn-primary" value="Ajouter" /></div>

            </form>
        </div>
        <div class="col-6">
        <img class="imgSignup" src="https://www.leboncoin.fr/_next/image?url=%2F_next%2Fstatic%2Fcreation-compte-b2311420.jpg&w=640&q=70">
        </div>
    </div>