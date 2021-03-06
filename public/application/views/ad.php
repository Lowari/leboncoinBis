<div class="colorRond"></div>
<div class="globalAd">
  <div class="searchAd shadow p-3">
  <p class="text-primary h2 text-center"><strong>Rechercher</strong></p>
    <form action="searchAdFilter" method="post">
      <div class="form-group">
        <select class="form-control" id="category" name="category">
          <option value="rien" selected>Catégorie</option>
          <?php foreach($_SESSION["category"] as $cat){ ?>
              <option value="<?=$cat->id;?>"><?=$cat->name;?></option>
            <?php } ?>
        </select>
      </div>
      <div class="form-group">
      
      <input type="text" class="form-control" id="search" name="search" placeholder="Que recherchez-vous?">
    </div>
    <div class="form-group">
      <input type="number" set=any min="0" class="form-control" id="priceMin" name="priceMin" placeholder="Prix Min.">
    </div>
    <div class="form-group">
      <input type="number" set=any min="0" class="form-control" id="priceMax" name="priceMax" placeholder="Prix Max.">
    </div>
      <div class="form-group">
        <select class="form-control" id="region" name="region">
          <option value="rien" selected>Région</option>
          <?php foreach($_SESSION["region"] as $reg){ ?>
              <option value="<?=$reg->id;?>"><?=$reg->number?> <?=$reg->name;?></option>
            <?php } ?>
        </select>
        <?=form_error("category");?>
      </div>
      <button type="submit" class="btn btn-primary btnSearch "><i class="fas fa-search fa-xs"></i> Lancer la recherche</button>
    </form>
  </div>
    <?php if(count($lastestAd) == 0){ ?>
        <p class="text-center h2 text-primary m-5"> Desolé il n'y a aucun élément qui correspond a votre recherche </p>
    <?php }else{ ?>

    
  <?php foreach ($lastestAd as $ad) { ?>

    <div class="card mb-3 mt-2 radAd">
      <div class="row no-gutters littleCenter ">
        <div class="col-md-4 col-12 ">
          <img src="../../../assets/img/imgAd/<?= $ad->image ?>" alt="..." class="imgAd radAdImg">
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <a href="<?=base_url()?>oneAd?id=<?=$ad->idAd?>"><h5 class="card-title"> <?= $ad->title; ?> </h5></a>
            <p class="card-text"><?= $ad->description; ?></p>
            <p class="card-text"><?= $ad->price; ?> €</p>
            <p class="card-text"><small class="text-muted"><?= $ad->name; ?></small></p>
            <p class="card-text"><small class="text-muted"><?= $ad->regionName; ?> <?= $ad->number; ?></small></p>
          </div>
        </div>
      </div>
    </div>

  <?php } }?>