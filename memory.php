<?php require_once('./includes/init.php');
$stmt = $conn->prepare("SELECT * FROM game");
$stmt->execute();
$data = $stmt->fetch();
// $getID = $data;
// var_dump($data);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memory Game</title>
  <!-- Link to style.css  background color -->
  <link rel="stylesheet" href="assets/css/styles.css">
  <!-- Link to memory.css -->
  <link rel="stylesheet" href="assets/css/memory.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <!-- Librarie Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php require_once('./view/header.inc.php'); ?>

  <section class="titre_background memory_background">
    <section id="titre_page">
      <h1 class="h1_page">MEMORY GAME</h1>
    </section>
  </section>


  <!-- <h2 id="h2_difficulte">DIFFICULTÉ</h2>

  <section class="choose_difficulty">
    <div class="difficulty_div">
      <button class="button_difficulty" name="facile" id="facile">Facile</button>
      <button class="button_difficulty" name="intermediaire" id="intermediaire">Intermédiaire</button>
      <button class="button_difficulty" name="expert" id="expert">Expert</button>
      <button class="button_difficulty" name="impossible" id="impossible">Impossible</button>
    </div>
    <div id="separator">
      <img src="./assets/image/separator-orange.png" alt="texte separateur">
    </div>
    <div class="start_div">
      <button class="button_start" name="start" id="start">Lancer</button>
    </div>
  </section> -->

  <section class="memory_game_container">
    <!-- Affichage tableau 5x5 memory game grid -->
    <table id="table_memory_5x5">
      <tbody>
        <tr class="table_row">
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
        </tr>
        <tr class="table_row">
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
        </tr>

        <tr class="table_row">
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
        </tr>

        <tr class="table_row">
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
        </tr>

        <tr class="table_row">
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
          <td class="table_case"></td>
        </tr>
      </tbody>
    </table>

    <div class="chat_container">
      <div class="title_chat_block">
        <img id=img_profil src="https://placekitten.com/50/50" alt="img_profil">
        <h3 id="title_chat">Chat général</h3>
      </div>

      <div class="chat_box">

        <!-- <div class="msg_name_me">Moi</div>
        <div class="block_msg_me">
          <div div class="msg_time">
            <div class="msg_name_me">Moi</div>
            <div class="msg_from_me">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, neque! Rem voluptates odio obcaecati consequatur!</div>
            <div class="msg_time_me">Aujourd'hui à 11h12</div>
          </div>
        </div>

        <div class="block_msg_them">
          <div class="msg_img_profil">
            <img class="img_items" src="https://placekitten.com/40/40" alt="">
          </div>
          <div div class="msg_time">
            <div class="msg_name_them">Arthur</div>
            <div class="msg_from_them">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, neque! Rem voluptates odio obcaecati consequatur!</div>
            <div class="msg_time_them">Aujourd'hui à 11h12</div>
          </div>
        </div>

        <div class="block_msg_me">
          <div div class="msg_time">
            <div class="msg_name_me">Moi</div>
            <div class="msg_from_me">Lorem, ipsum dolor.</div>
            <div class="msg_time_me">Aujourd'hui à 11h12</div>
          </div>
        </div>

        <div class="block_msg_them">
          <div class="msg_img_profil">
            <img class="img_items" src="https://placekitten.com/40/40" alt="">
          </div>
          <div div class="msg_time">
            <div class="msg_name_them">Arthur</div>
            <div class="msg_from_them">Lorem, ipsum dolor.</div>
            <div class="msg_time_them">Aujourd'hui à 11h12</div>
          </div>
        </div>

        <div class="block_msg_envoyer">
          <textarea id="message_text" placeholder="Votre message ..." name="message_text"></textarea>
          <button id="button_msg_envoyer">Envoyer</button>
        </div>
      </div> -->

        <div class="msg_name_me"></div>
        <div class="block_msg_me">
          <div div class="msg_time">
            <div class="msg_name_me"></div>
            <div class="msg_from_me"></div>
            <div class="msg_time_me"></div>
          </div>
        </div>

        <div class="block_msg_them">
          <div class="msg_img_profil">
            <img class="img_items" src="https://placekitten.com/40/40" alt="">
          </div>
          <div div class="msg_time">
            <div class="msg_name_them"></div>
            <div class="msg_from_them"></div>
            <div class="msg_time_them"></div>
          </div>
        </div>

        <div class="block_msg_me">
          <div div class="msg_time">
            <div class="msg_name_me"></div>
            <div class="msg_from_me"></div>
            <div class="msg_time_me"></div>
          </div>
        </div>

        <div class="block_msg_them">
          <div class="msg_img_profil">
            <img class="img_items" src="https://placekitten.com/40/40" alt="">
          </div>
          <div div class="msg_time">
            <div class="msg_name_them"></div>
            <div class="msg_from_them"></div>
            <div class="msg_time_them"></div>
          </div>
        </div>

        <div class="block_msg_envoyer">
          <form action="send_message.php" method="POST" name="inputMessage" id="formMessage">
            <textarea class="message_text" id="message_text" placeholder="Votre message ..." name="message_text"></textarea>
            <button class="button_msg_envoyer" id="button_msg_envoyer" name="button_msg_envoyer" onclick="addMessage()">Envoyer</button>
          </form>
        </div>
      </div>

    </div>

  </section>

  <?php require_once('./view/footer.inc.php'); ?>
  <script src="./assets/js/memory.js"></script>
</body>

</html>