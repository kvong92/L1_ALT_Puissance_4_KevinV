<?php
    require 'config.php';

    if(isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
    }
?>