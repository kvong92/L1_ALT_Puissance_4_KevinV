<?php
require_once('./includes/init.php');
?>

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
    <?php require_once('./view/header.inc.php'); ?>

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
                <?php
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $stmt = $conn->prepare("SELECT g.game_name, u.username, s.difficulty, s.score, s.game_time FROM score AS s INNER JOIN game AS g ON g.id=s.gameID INNER JOIN users AS u ON u.id=s.userID ORDER BY u.username ASC, s.difficulty ASC, s.score DESC");
                $stmt->execute();
                $score = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $i = 0;
                // var_dump($score[0]['username']);
                foreach ($score as $score)
                {
                    if ($i % 2 == 0)
                    {
                    echo '<tr class="color-2"><td>' . $score['game_name'] . '</td>';
                    echo '<td>' . $score['username'] . '</td>';
                    echo '<td>' . $score['difficulty'] . '</td>';
                    echo '<td>' . $score['score'] . '</td>';
                    echo '<td>' . $score['game_time'] . '</td></tr>';
                    }
                    else {
                        echo '<tr class="color-1"><td>' . $score['game_name'] . '</td>';
                        echo '<td>' . $score['username'] . '</td>';
                        echo '<td>' . $score['difficulty'] . '</td>';
                        echo '<td>' . $score['score'] . '</td>';
                        echo '<td>' . $score['game_time'] . '</td></tr>';
                    }
                    $i++;
                }
                ?>
            </tbody>
        </table>

    </section>


    <?php require_once('./view/footer.inc.php'); ?>
</body>

</html>