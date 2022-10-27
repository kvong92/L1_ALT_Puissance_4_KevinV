<?php
require_once('./includes/init.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DECONNEXION | THE POWER OF MEMORY</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/logout.css">
</head>

<body>
    <section class="logout">
        <?php require_once('./view/header.inc.php'); ?>
        <section class="titre_background register_background">
            <section id="titre_page">
                <h2 class="h2_page">DECONNEXION</h2>
            </section>
        </section>

        <p class="logout_message">
            Vous avez bien été déconnecté. Merci pour votre visite !
        </p>
        <p class="logout_message">
            Cliquez <a href="./index.php">ici</a> pour être rediriger vers la page d'accueil dans 5 secondes.
        </p>
    </section>

    <?php
    require_once('./view/footer.inc.php');
    session_unset();
    session_destroy();

    header("Refresh:5; url=./index.php");
    ?>

</body>

</html>