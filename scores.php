<?php require('./includes/init.php'); ?>

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

    <?php require('./view/footer.inc.php'); ?>
</body>

</html>