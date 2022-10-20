
<?php
session_start();
$user_id = $_SESSION ['user_id'];
$stmt = $conn->query("SELECT user_password FROM users WHERE id = $user_id");

password_verify(string $password, string $hash): bool

    if (password_verify('user_password', $hash)) {
            echo 'Le mot de passe est valide !';
        } else {
            echo 'Le mot de passe est invalide.';
    }
?>
