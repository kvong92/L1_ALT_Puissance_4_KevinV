<?php require('./includes/init.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/myaccount.css">
    <!-- Librarie Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php require('./view/header.inc.php'); ?>

    <section class="titre_background myaccount_background">
        <section id="titre_page">
            <h1 class="h1_page">MON COMPTE</h1>
        </section>
    </section>

    <div class="welcome">
        <p class="welcome_message">Bienvenue, <?php echo $_SESSION['username'];?> ! </p>
    </div>

    <section class="content_myaccount">
        <section class="block_form">
            <h2 class="title_myaccount">Changer d'email</h2>
            <img src="./assets/image/separator-orange.png" alt="separator-orange">
            <form action="action_myaccount.php" id="form_mail" method="POST">
                <input class="input_classic" type="email" id="old_email" name="old_email" placeholder="Ancien email">
                <input class="input_classic" type="email" id="new_email" name="new_email" placeholder="Nouveau email">
                <input class="input_classic" type="password" id="email_current_password" name="email_current_password" placeholder="Mot de passe">
                <input class="input_classic" type="password" id="email_current_password_confirm" name="email_current_password_confirm" placeholder="Confirner mot de passe">
                <button class="button_confirmer" type="submit" form="form_mail" value="submit_email" name="submit_email">Confirmer</button>
            </form>
        </section>

        <section class="block_form">
            <h2 class="title_myaccount">Changer de mot de passe</h2>
            <img src="./assets/image/separator-orange.png" alt="separator-orange">
            <form id="form_password" action="action_myaccount.php" method="POST">
                <input class="input_classic" type="password" id="current_password" name="current_password" placeholder="Ancien mot de passe">
                <input class="input_classic" type="password" id="new_password" name="new_password" placeholder="Nouveau mot de passe">
                <input class="input_classic" type="password" id="new_password_confirm" name="new_password_confirm" placeholder="Confirner le nouveau mot de passe">
                <button class="button_confirmer" type="submit" form="form_password" value="submit_password"  name="submit_password">Confirmer</button>
            </form>
        </section>

    </section>

    <?php require('./view/footer.inc.php'); ?>
</body>

</html>