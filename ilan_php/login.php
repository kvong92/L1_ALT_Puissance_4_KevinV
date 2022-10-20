<?php

    require 'config.php';

    if (isset ($_POST('username'))) {
    $_SESSION('username') = $_POST ('username');
    }

    $email = htmlspecialchars($_POST['email']);

// Valider l'email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse e-mail est valide";
    }   
    else {
    echo "L'adresse e-mail n'est pas valide";
    }

    if (preg_match((?=^.{8,}$)((?=.*\d)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$), $_POST['password']) {
        echo "fdp";
    }
    else {
        echo "le mot de passe n'est pas valide";
    }

    if (strlen($_POST['username']) < 4) {
      $erreur = 'Votre pseudo doit contenir minimum 4 caractère';
    }
?>
