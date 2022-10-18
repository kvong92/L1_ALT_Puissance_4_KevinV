<?php
session_start();
require_once './includes/database.inc.php';

if (isset($_POST['register'])) {
    if ($_POST['username'] != "" || $_POST['email'] != "" || $POST['password'] != "") {
        try {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            // $sql = "INSERT INTO users (email, user_password, username) VALUES ('". $email ."', '". $password ."', '". $username ."')";
            // $conn->exec($sql);
            $register = $conn->prepare("INSERT INTO users (email, user_password, username) VALUES (?, ?, ?)");
            $register->execute([$email, $password, $username]);
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        $_SESSION['message']=array("text"=>"Votre compte a bien été créé", "alert"=>"info");
        $conn = null;
        header('location:index.php');
    }
    else {
        echo "Veuillez remplir tous les champs !";
    }
}
?>