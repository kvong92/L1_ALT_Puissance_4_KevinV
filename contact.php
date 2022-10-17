<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Librarie Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header class="header_page">
        <section class="menu_nav">
    
          <div class="power_memory">The Power of Memory</div>
          
          <nav>
            <a href="./index.php">ACCUEIL</a>
            <a href="./memory.php">JEU</a>
            <a href="./scores.php">SCORES</a>
            <a style="color: #EC9222;" href="./contact.php">NOUS CONTACTER</a>
            <a href="./register.php">INSCRIPTION</a>
            <a href="./login.php">CONNEXION</a>
            <a href="./myaccount.php">MON COMPTE</a>
          </nav>
        </section>
      </header>
    
      <section class="titre_background contact_background">
        <section id="titre_page">
          <h1 class="h1_page">CONTACT</h1>
        </section>
      </section>



    <section class="page">
        <!--container-->
        <div class="card-containers">
            <div class="card">
                <div class="container">
                    <!--block-1-->
                    <i class='bx bx-phone'></i>
                    <a href="#">09.87.76.75.65</a>
                </div>
            </div>
            <div class="card">
                <div class="container">
                    <!--block-2-->
                    <div class="test">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <a href="#">ioherz@gmail.com</a>
                </div>
            </div>
            <div class="card">
                <div class="container">
                    <!--block-3-->
                    <i class='bx bx-home' ></i>
                    <a href="#">678 Rue quelque par :</a>
                </div>
            </div>
        </div>

        <form class="corps-formulaire">
            <div class="formulaire_block_1">
                <input class="block_space" type="text" id="name" name="user_name" placeholder="Nom">
                <input class="block_space" type="email" id="mail" name="user_mail" placeholder="E-mail">
        
            </div>
            <!-- <select class="block_space" id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="france">France</option>
            </select> -->

            <input class="block_space" type="sujet" id="sujet" name="sujet" placeholder="Sujet">
            
            <textarea class="block_space text" name="msg" id="msg" placeholder="Message"></textarea>
            <button class="button_envoyer" type="submit">Envoyer</button>

        </form>

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
                    <a href="#">Jouer</a>
                </li>
                <li>
                    <a href="#">Les scores</a>
                </li>
                <li>
                    <a href="#">Nous contacter</a>
                </li>
            </ul>
        </section>
    </footer>
</body>

</html>
