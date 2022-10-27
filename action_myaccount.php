<?php
require_once('./includes/init.php');

$user_id = $_SESSION['user_id'];
// $user_password = $_SESSION['user_password'];
$stmt = $conn->prepare("SELECT user_password, email FROM users WHERE id = '$user_id'");
$stmt->execute();
$data = $stmt->fetchALL();
$row = $stmt->rowCount();
$user_password = $data[0]['user_password'];
$email = $data[0]['email'];

//Si personne ne s'est connecté : $user_id = NULL
if (!isset($user_id)) {
    header('Location:index.php');
}

//email FORM
if (isset($_POST['submit_email'])) {
    $old_email = $_POST['old_email'];
    $new_email = $_POST['new_email'];
    $email_current_password = $_POST['email_current_password'];
    $email_current_password_confirm = $_POST['email_current_password_confirm'];
    $password_hash = hash('sha256', $email_current_password);

    $update = true;
    // echo "old email = $old_email <br><br><br> email = $email ";
    if (!isset($old_email, $new_email, $email_current_password, $email_current_password_confirm)) {
        echo "<script type='text/javascript'>alert('Veuillez remplir tous les champs !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if ($old_email != $email) {
        // echo "<br><br><br> email invalide<br><br><br>";
        echo "<script type='text/javascript'>alert('Email invalide !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if ($old_email == $new_email) {
        echo "<script type='text/javascript'>alert('Veuillez saisir un email different de votre ancien email !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
        echo "<script type='text/javascript'>alert('Veuillez saisir un email valide !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if ($password_hash != $user_password) {
        // echo "<br><br><br>mdp incorrect<br><br><br>";
        echo "<script type='text/javascript'>alert('Mot de passe incorrect !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if ($email_current_password != $email_current_password_confirm) {
        echo "<script type='text/javascript'>alert('Veuillez saisir le même mot de passe !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if ($update) {
        try {
            // echo "<br><br><br>UPDATING .......<br><br><br>";
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $update_email = $conn->prepare("UPDATE users SET email='$new_email' WHERE id='$user_id'");
            $update_email->execute([$new_email]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $conn = null;
        echo "<script type='text/javascript'>alert('Votre email a bien été mis à jour !');document.location='./myaccount.php'</script>";
    }
} 

//Password FORM
if (isset($_POST['submit_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $new_password_confirm = $_POST['new_password_confirm'];
    $current_password_hash = hash('sha256', $current_password);
    $new_password_hash = hash('sha256', $new_password);

    $update = true;
    if (!isset($current_password, $new_password, $new_password_confirm)) {
        echo "<script type='text/javascript'>alert('Veuillez remplir tous les champs !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if ($current_password != $user_password) {
        echo "<script type='text/javascript'>alert('Mot de passe incorrect !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if (!preg_match('~^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$~', $new_password)) {
        echo "<script type='text/javascript'>alert('Mot de passe incorrect !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if ($new_password != $new_password_confirm) {
        echo "<script type='text/javascript'>alert('Veuillez saisir le même mot de passe !');document.location='./myaccount.php'</script>";
        $update = false;
    }
    if ($update) {
        try {
            // echo "<br><br><br>UPDATING .......<br><br><br>";
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $update_email = $conn->prepare("UPDATE users SET user_password='$new_password' WHERE id='$user_id'");
            $update_email->execute([$new_email]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $conn = null;
        echo "<script type='text/javascript'>alert('Votre mot de passe a bien été mis à jour !');document.location='./myaccount.php'</script>";
    }
}
