<?php

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
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Librarie Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class="header_page">
        <section class="menu_nav">
    
          <div class="power_memory">The Power of Memory</div>
          
          <nav>
            <a href="./index.html">ACCUEIL</a>
            <a href="./memory.html">JEU</a>
            <a href="./scores.html">SCORES</a>
            <a href="./contact.html">NOUS CONTACTER</a>
            <a href="./register.html">INSCRIPTION</a>
            <a style="color: #EC9222;" href="./login.html">CONNEXION</a>
            <a href="./myaccount.html">MON COMPTE</a>
          </nav>
        </section>
      </header>
    
      <section class="titre_background register_background">
        <section id="titre_page">
          <h1 class="h1_page">CONNEXION</h1>
        </section>
      </section>

    <section class="content_login">

        <form id="login">
            
            <input class="input_class" type="text" placeholder="Email" id="email">
            <input class="input_class" type="password" placeholder="Mot de passe" id="password">
        </form>
        
        <button id="button_login">Connexion</button>

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