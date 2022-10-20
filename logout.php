<?php 
require('./includes/init.php');
session_unset();
session_destroy();
echo 'Vous avez été déconnecté <a href="./index.php">Retour</a>';
?>