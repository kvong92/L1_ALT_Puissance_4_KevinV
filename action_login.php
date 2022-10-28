<?php
require_once('./includes/init.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = hash('sha256', $password);

    $check = $conn->prepare("SELECT id, username, email, user_password FROM users WHERE email='$email'");
    $check->execute();
    $data = $check->fetchALL();
    $row = $check->rowCount();
    // var_dump($data[0]);
    // var_dump($data[0]['username']);
    $date = date('Y-m-d h:i:s');

    if ($row == 1) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // $password = hash('sha256', $password)

            if ($data[0]['user_password'] === $password_hash) {
                $_SESSION['user_id'] = $data[0]['id'];
                $_SESSION['username'] = $data[0]['username'];
                // $_SESSION['last_seen'] = $date..000000; 
                // $_SESSION['user_password'] = $data[0]['user_password'];
            } else
                echo "<script type='text/javascript'>alert('Wrong password !');document.location='./login.php'</script>";
            // header('Location:index.php?login_err=password');
        } else
            echo "<script type='text/javascript'>alert('Wrong Email !');document.location='./login.php'</script>";
        // header('Location:index.php?login_err=email');
    } else
        echo "<script type='text/javascript'>alert('Wrong User !');document.location='./login.php'</script>";
    // header('Location:index.php?login_err=already');
}
// else
// echo "<script type='text/javascript'>alert("{$_SESSION['username']}");</script>";document.location='./index.php'</script>";
// header('Location:index.php');
echo "<script type='text/javascript'>alert('Bienvenue {$_SESSION['username']}');document.location='./index.php';</script>";
