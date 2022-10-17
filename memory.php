<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  <header class="header_page">
    <section class="menu_nav">

      <div class="power_memory">The Power of Memory</div>

      <nav>
        <a href="./index.html">ACCUEIL</a>
        <a style="color: #EC9222;" href="./memory.html">JEU</a>
        <a href="./scores.html">SCORES</a>
        <a href="./contact.html">NOUS CONTACTER</a>
        <a href="./register.html">INSCRIPTION</a>
        <a href="./login.html">CONNEXION</a>
        <a href="./myaccount.html">MON COMPTE</a>
      </nav>
    </section>
  </header>

  <section class="titre_background memory_background">
    <section id="titre_page">
      <h1 class="h1_page">MEMORY GAME</h1>
    </section>
  </section>


  <h2 id="h2_difficulte">DIFFICULTÉ</h2>

  <section class="choose_difficulty">
    <a href="#">
      <button class="button_difficulty">Facile</button>
    </a>
    <a href="#">
      <button class="button_difficulty">Intermédiaire</button>

    </a>

    <a href="#">
      <button class="button_difficulty">Expert</button>
    </a>

    <a href="#">
      <button class="button_difficulty">Impossible</button>
    </a>
  </section>

  <div id="separator">
    <img src="./assets/image/separator-orange.png" alt="texte separateur">
  </div>

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

        <!-- <div class="msg_name_me">Moi</div> -->
        <div class="block_msg_me">
          <div div class="msg_time">
            <div class="msg_name_me">Moi</div>
            <div class="msg_from_me">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, neque! Rem voluptates odio obcaecati consequatur!</div>
            <div class="msg_time_me">Aujourd'hui à 11h12</div>
          </div>
          <!-- <div class="msg_img_profil">
            <img class="img_items" src="https://placekitten.com/40/40" alt="">
          </div> -->
        </div>

        <!-- <div class="msg_name_them">Arthur</div> -->
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

        <!-- <div class="msg_name_me">Moi</div> -->
        <div class="block_msg_me">
          <div div class="msg_time">
            <div class="msg_name_me">Moi</div>
            <div class="msg_from_me">Lorem, ipsum dolor.</div>
            <div class="msg_time_me">Aujourd'hui à 11h12</div>
          </div>
          <!-- <div class="msg_img_profil">
            <img class="img_items" src="https://placekitten.com/40/40" alt="">
          </div> -->
        </div>

        <!-- <div class="msg_name_them">Arthur</div> -->
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
        <textarea id="message-text" placeholder="Votre message ..."></textarea>
        <button id="button_msg_envoyer">Envoyer</button>
      </div>
    </div>
    </div>
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