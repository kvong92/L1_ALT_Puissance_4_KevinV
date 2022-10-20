<?php
session_start();
require_once './includes/database.inc.php';

if (isset($_POST['register'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    if (isset($username, $password, $confirm_password, $email)) 
    {
        try 
        {
            // Valider l'email

            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                if (strlen($username) >= 4)
                {   
                    // if(preg_match('~^\S*(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=\S*[\W])[a-zA-Z\d].{8,}\S*$~', $password)) // check les règles du mdp
                    if(preg_match('~^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$~', $password))
                    {  
                        if ($password === $confirm_password)
                        {
                            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                            // $sql = "INSERT INTO users (email, user_password, username) VALUES ('". $email ."', '". $password ."', '". $username ."')";
                            // $conn->exec($sql);
                            $register = $conn->prepare("INSERT INTO users (email, user_password, username) VALUES (?, ?, ?)");
                            $register->execute([$email, $password, $username]);
                        }
                        else
                            echo "<script type='text/javascript'>alert('Veuillez insérer le même mot de passe !');document.location='./register.php'</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Mot de passe invalide !');document.location='./register.php'</script>";
                    }
                }
                else 
                {
                    echo "<script type='text/javascript'>alert('Username invalide !');document.location='./register.php'</script>";
                }
            }
            else {
                echo "<script type='text/javascript'>alert('Email invalide !');document.location='./register.php'</script>";
            }
        }
        catch(PDOException $e) 
        {
            echo $e->getMessage();
        }
        $_SESSION['message']=array("text"=>"Votre compte a bien été créé", "alert"=>"info");
        $conn = null;
        echo "<script type='text/javascript'>alert('Votre compte a bien été créé');document.location='./index.php'</script>";
        // header('location:index.php');
    }
    else {
        echo "<script type='text/javascript'>alert('Veuillez remplir tous les champs !')</script>";
    }
}
?>