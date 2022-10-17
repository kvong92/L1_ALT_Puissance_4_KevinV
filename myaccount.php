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

    <section class="content_myaccount">

        <section class="block_form">
            <h2 class="title_myaccount">Changer d'email</h2>
            <img src="./assets/image/separator-orange.png" alt="separator-orange">
            <form id="form_mail">
                <input class="input_classic" type="email" id="old_mail" name="old_user_mail" placeholder="Ancien email">
                <input class="input_classic" type="email" id="new_mail" name="new_user_mail" placeholder="Nouveau email">
                <input class="input_classic" type="password" id="current_password" name="current_password" placeholder="Mot de passe">
                <input class="input_classic" type="password" id="current_password" name="current_password" placeholder="Confirner mot de passe">
            </form>
            <button class="button_confirmer" type="submit" form="form_mail" value="submit">Confirmer</button>
        </section>

        <section class="block_form">
            <h2 class="title_myaccount">Changer de mot de passe</h2>
            <img src="./assets/image/separator-orange.png" alt="separator-orange">
            <form id="form_password">
                <input class="input_classic" type="password" id="current_password" name="current_password" placeholder="Ancien mot de passe">
                <input class="input_classic" type="password" id="new_password" name="new_password" placeholder="Nouveau mot de passe">
                <input class="input_classic" type="password" id="new_password" name="new_password" placeholder="Confirner le nouveau mot de passe">
            </form>
            <button class="button_confirmer" type="submit" form="form_password" value="submit">Confirmer</button>
        </section>

    </section>

    <footer>
        <section id="information">
            <div id="titre_info">Information</div>
            <div class="text_info">Lorem ipsum dolor sit amet, consectetur elit.</div>
            <section class="tel_email_location">
                <div class="label_info">Tel: </div>
                <div class="text_info">01 23 45 67 89</div>
            </section>

            <section class="tel_email_location">
                <div class="label_info">Email: </div>
                <div class="text_info">support@powerofmemory.com</div>
            </section>

            <section class="tel_email_location">
                <div class="label_info">Location: </div>
                <div class="text_info">Paris</div>
            </section>

            <div class="icon_social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-github"></a>
            </div>
        </section>

        <section id="menu_nav_footer">
            <div id="titre_info">Power Of Memory</div>
            <ul>
                <li>
                    <a href="./memory.html">Jouer</a>
                </li>
                <li>
                    <a href="./scores.html">Les scores</a>
                </li>
                <li>
                    <a href="./contact.html">Nous contacter</a>
                </li>
            </ul>
        </section>
    </footer>

</body>

</html>