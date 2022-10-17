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
    <link rel="stylesheet" href="assets/css/scores.css">
    <!-- Librarie Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php require('./view/header.inc.php'); ?>

    <section class="titre_background scores_background">
        <section id="titre_page">
            <h1 class="h1_page">SCORES</h1>
        </section>
    </section>

    <section class="content_scores">
        <table class="tableau-style">

            <thead>
                <tr>
                    <td>Nom du jeu</td>
                    <td>Pseudo</td>
                    <td>Niveau</td>
                    <td>Score</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
                <tr class="color-2">
                    <td>Memory Card</td>
                    <td>utilisateur 1</td>
                    <td>expert</td>
                    <td>S</td>
                    <td>11/10/2022</td>
                </tr>
                <tr class="color-1">
                    <td>Memory Card</td>
                    <td>utilisateur 2</td>
                    <td>impossible</td>
                    <td>S</td>
                    <td>09/10/2022</td>
                </tr>
                <tr class="color-2">
                    <td>Memory Card</td>
                    <td>utilisateur 3</td>
                    <td>intermédiaire</td>
                    <td>S</td>
                    <td>01/10/2022</td>
                </tr>
                <tr class="color-1">
                    <td>Memory Card</td>
                    <td>utilisateur 4</td>
                    <td>facile</td>
                    <td>S</td>
                    <td>23/08/2022</td>
                </tr>

            </tbody>

        </table>

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