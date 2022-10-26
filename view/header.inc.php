<header class=header_page>
  <section class="menu_nav">
    <div class="power_memory">The Power of Memory</div>
    <nav>
      <a href="./">ACCUEIL</a>
      <a href="./memory.php">JEU</a>
      <a href="./scores.php">SCORES</a>
      <a href="./contact.php">NOUS CONTACTER</a>
      <?php if (!isset($_SESSION['user_id'])) { ?>
        <a href="./register.php">INSCRIPTION</a>
        <a href="./login.php">CONNEXION</a>
      <?php } else { ?>
        <a href="./myaccount.php">MON COMPTE</a>
        <a href="./logout.php">DECONNEXION</a>
      <?php } ?>
    </nav>
  </section>
</header>