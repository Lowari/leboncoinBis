<h1 class="pt-2">Formulaire de modification</h1>
    <div class="row">
        <div class="col-6">
            <form method="POST" action="updUser">
                <div class="form-group">
                    <label class="form-control-label" for="username">Pseudonyme</label>
                    <input class="form-control" type="text" id="username" name="username" value="<?php echo $getUserInfo[0]->username ?>">
                    <?= form_error('username') ?>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="password">Mot de passe</label>
                    <input class="form-control" type="password" id="password" name="password" value="<?php echo $getUserInfo[0]->password ?>">
                    <?= form_error('password') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="confpass">Confirmer mot de passe</label>
                    <input class="form-control" type="password" id="confpass" name="confpass" value="<?= set_value('confpass'); ?>">
                    <?= form_error('confpass') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="firstname">Prénom</label>
                    <input class="form-control" type="text" id="firstname" name="firstname" value="<?php echo $getUserInfo[0]->firstname ?>">
                    <?= form_error('firstname') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="lastname">Nom</label>
                    <input class="form-control" type="text" id="lastname" name="lastname" value="<?php echo $getUserInfo[0]->lastname ?>">
                    <?= form_error('lastname') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="phone">Téléphone</label>
                    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo $getUserInfo[0]->phone ?>">
                    <?= form_error('phone') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="mail">Mail</label>
                    <input class="form-control" type="text" id="mail" name="mail" value="<?php echo $getUserInfo[0]->mail ?>">
                    <?= form_error('mail') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="address">Adresse</label>
                    <input class="form-control" type="text" id="address" name="address" value="<?php echo $getUserInfo[0]->adress ?>">
                    <?= form_error('address') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="city">Ville</label>
                    <input class="form-control" type="text" id="city" name="city" value="<?php echo $getUserInfo[0]->city ?>">
                    <?= form_error('city') ?>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="zipCode">Code postal</label>
                    <input class="form-control" type="text" id="zipCode" name="zipCode" value="<?php echo $getUserInfo[0]->zipCode ?>">
                    <?= form_error('zipCode') ?>
                </div>

                <div class="d-flex justify-content-center pb-2"><input type="submit" name="submit" class="btn btn-primary" value="Ajouter" /></div>

            </form>
        </div>
        <div class="col-6">
        <img src="https://www.leboncoin.fr/_next/image?url=%2F_next%2Fstatic%2Fcreation-compte-b2311420.jpg&w=640&q=70">
        </div>
    </div>