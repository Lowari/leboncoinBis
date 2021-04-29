<div class="colorRond"></div>
<div class="globalAd">
  <div class="searchAd shadow">

  </div>

  <?php foreach($lastestAd as $ad){ ?>

    <div class="card mb-3 mt-2">
    <div class="row no-gutters text-md-center">
      <div class="col-md-4 col-12">
        <img src="../../../assets/img/imgAd/<?=$ad->image?>" alt="..." class="imgAd">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"> <?=$ad->title;?> </h5>
          <p class="card-text"><?=$ad->description;?></p>
          <p class="card-text"><small class="text-muted"><?=$ad->name;?></small></p>
          <p class="card-text"><small class="text-muted"><?=$ad->regionName;?> <?=$ad->number;?></small></p>
        </div>
      </div>
    </div>
  </div>

  <?php } ?>