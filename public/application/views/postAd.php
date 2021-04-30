<div class="container postAd">

    <form action="createAd" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend class="text-primary">Déposer une annonce</legend>
            <div class="form-group">
                <label for="title">Titre de l'annonce</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= set_value('title'); ?>" placeholder="Entrer un titre">
                <?= form_error("title"); ?>
            </div>

            <div class="form-group">
                <label for="category">Catégorie</label>
                <select class="form-control" id="category" name="category">
                    <option value="0">Catégorie</option>
                    <?php foreach ($cat as $category) {
                        if (set_value("category") == $category->id) { ?><option value="<?= $category->id ?>" selected><?= $category->name ?></option> <?php } ?>
                        <option value="<?= $category->id ?>"><?= $category->name ?></option>
                    <?php  }  ?>
                </select>
                <?php if (set_value("category") == "0") {
                    echo '<small class="form-text text-danger">Veuilez selectionner une catégorie</small>';
                }; ?>
            </div>

            <div class="form-group">
                <label for="description">Description de l'article</label>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="Entrer une description"><?= set_value("description"); ?></textarea>
                <?= form_error("description"); ?>
            </div>
            <div class="form-group">
                <label for="price">Prix de l'article</label>
                <input type="number" step="any" min="1" class="form-control" id="price" name="price" value="<?= set_value('price'); ?>" placeholder="Entrer un prix">
                <?= form_error("price"); ?>
            </div>

            <div class="form-group">
                <label for="photoAnnonce">Photo de l'annonce</label>
                <input type="file" class="form-control-file" id="photoAnnonce" name="photoAnnonce" aria-describedby="fileHelp">
                <?php if (isset($_SESSION["error"]["error"])) { ?> <small class="form-text text-danger"> <?= $_SESSION["error"]["error"] ?> </small><?php }; ?>
            </div>

            <div class="form-group">
                <label for="region">Département</label>
                <select class="form-control" id="region" name="region">
                    <option value="0" selected="">Sélectionnez votre département</option>
                    <?php foreach ($region as $reg) {
                        if (set_value("region")) {
                            if (set_value("region") == $reg->number) { ?><option value="<?= $reg->number; ?>" selected><?php echo $reg->number . " - " . $reg->name; ?></option> <?php } elseif ($zip == $reg->number) { ?> <option value="<?= $reg->number ?>" selected><?php echo $reg->number . " - " . $reg->name; ?></option> <?php };
                                                                                                                                                                                                                                                                                                                                                        } ?>
                        <option value="<?= $reg->number ?>"><?php echo $reg->number . " - " . $reg->name; ?></option>
                    <?php  }  ?>
                </select>
                <?php if (set_value("region") == "0") {
                    echo '<small class="form-text text-danger">Veuilez selectionner un departement</small>';
                }; ?>
            </div>

            <div class="form-group">
                <label for="city">Ville</label>
                <input type="text" class="form-control" id="city" name="city" value="<?= set_value('city'); ?>" placeholder="Entrer votre ville">
                <?= form_error("city"); ?>
            </div>

            <div class="form-group">
                <label for="phone">Téléphone de contact</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php if (set_value('phone')) {
                                                                                            echo set_value("phone");
                                                                                        } else {
                                                                                            echo $user[0]->phone;
                                                                                        }; ?>" placeholder="Entrer votre téléphone">
                <?= form_error("phone"); ?>
            </div>
            <div class="form-group">
                <label for="mail">Mail de contact</label>
                <input type="mail" class="form-control" id="mail" name="mail" value="<?php if (set_value('mail')) {
                                                                                            echo set_value("mail");
                                                                                        } else {
                                                                                            echo $user[0]->mail;
                                                                                        }; ?>" placeholder="Entrer votre mail">
                <?= form_error("mail"); ?>
            </div>
            <input type="submit" class="btn btn-primary" value="Déposer" />
    </form>


</div>