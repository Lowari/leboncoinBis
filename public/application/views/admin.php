<div class="pt-5">
    <h1 class="h3 pb-3">Module d'administration <i class="fas fa-users-cog"></i></h1>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nom d'utilisateur</th>
      <th scope="col">Pseudonyme</th>
      <th scope="col">Mail</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($description_list as $user) { ?>
    <tr class="table-light">
      <th scope="row"><a href="<?php base_url() ?>user_info"><?= $user->lastname?> <?= $user->firstname?></a></th>
      <td><?= $user->username?></td>
      <td><?= $user->mail?></td>
      <td><a href="<?= base_url() ?>deleteUser?id=<?=$user->id?>"> <i class="fas fa-gavel"></i> <u>Supprimer</u></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 

</div>