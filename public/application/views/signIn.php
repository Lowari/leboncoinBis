<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <form method="POST" action="addUser">
        <label for="username">Pseudonyme</label>
        
        <input type="text" id="username" name="username">
        <?= form_error('username') ?>
        <label for="password">Mot de Passe</label>
        
        <input type="text" id="password" name="password">
        <?= form_error('password') ?>
        <label for="confpass">confirmation Mot de Passe</label>
        
        <input type="text" id="confpass" name="confpass">
        <?= form_error('confpass') ?>
        <label for="firstname">Prénom</label>
        <?= form_error('firstname') ?>
        <input type="text" id="firstname" name="firstname">
        <label for="lastname">Nom</label>
        <?= form_error('text') ?>
        <input type="text" id="lastname" name="lastname">
        <label for="phone">Téléphone</label>
        <?= form_error('phone') ?>
        <input type="text" id="phone" name="phone">
        <label for="mail">Mail</label>
        <?= form_error('mail') ?>
        <input type="text" id="mail" name="mail">
        <label for="address">Adresse</label>
        <?= form_error('address') ?>
        <input type="text" id="address" name="address">
        <label for="city">Ville</label>
        <?= form_error('city') ?>
        <input type="text" id="city" name="city">
        <label for="zipCode">Code Postal</label>
        <?= form_error('zipcode') ?>
        <input type="text" id="zipCode" name="zipCode">
        <input type="submit" name="submit" value="Ajouter" />
        
    </form>
</body>

</html>