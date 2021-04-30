<div class=" containerImage text-center mt-5">
    <img class="imgOneAd" src="/assets/img/imgAd/<?= $ad[0]->image ?>" />
</div>

<div class="allTextOneAd">
    <div class="textOneAd mt-5">
        <div class="titleOneAd">
            <p class="h2"><?= $ad[0]->title ?></p>
        </div>
        <div class="priceOneAd d-flex mb-3">
            <p class="h5 pt-2"><?= $ad[0]->price ?> €</p>
            <div class="ml-2 livraison"><i class="fas fa-shipping-fast"></i> Livraison : à partir de 4,10€</div>
        </div>
    </div>
    <p class="traitOneAd"></p>
    <div class="descriptionOneAd">
        <p class="h3">Description</p>
        <p><?= $ad[0]->description ?></p>
    </div>
    <p class="traitOneAd"></p>
    <div class="lieuOneAd">
        <p class="h4"><i class="fas fa-map-marker-alt"></i> Lieu</p>
        <p class="text-muted"><?= $ad[0]->number ?> <?= $ad[0]->regionName ?></p>
        <p class="text-muted"><?= $ad[0]->city ?></p>
    </div>
    <p class="traitOneAd"></p>
    <div class="contactOneAd">
        <p class="h4">Contact</p>
        <p><i class="fas fa-phone"></i> <span class="text-muted"><?= $ad[0]->phone ?></span></p>
        <p><i class="fas fa-envelope"></i> <span class="text-muted"><?= $ad[0]->mail ?></span></p>
    </div>
    <p class="traitOneAd"></p>
    <div class="shareOneAd">
        <button type="button" class="btn btn-outline-primary">Partager l'annonce</button>
    </div>
</div>