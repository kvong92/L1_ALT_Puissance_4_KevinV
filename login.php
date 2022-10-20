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
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Librarie Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php require('./view/header.inc.php'); ?>

    <section class="titre_background register_background">
        <section id="titre_page">
            <h1 class="h1_page">CONNEXION</h1>
        </section>
    </section>

    <section class="content_login">

        <form action="action_login.php" id="login" method="POST">
            <input class="input_class" name="email" type="text" placeholder="Email" id="email" required>
            <input class="input_class" name="password" type="password" placeholder="Mot de passe" id="password" required>

            <button type="submit" id="button_login" action="./action_register.php">Connexion</button>
        </form>

    </section>

    <?php require('./view/footer.inc.php'); ?>
</body>

</html>