<?php

session_start();


include_once('db_config.php');




if(isset($_POST['send']))
{

    $user_name = $_POST['user_name'];
    $_SESSION['user_name'] = $user_name;
    $email = $_POST['email'];
    echo $_SESSION['email'] = $email;
    $password = $_POST['password'];
    $password_verify = $_POST['password_verify'];

    if (isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_verify']))
    {

        $stmt = $connexion->prepare("SELECT * FROM users WHERE username=?");
        $stmt->execute([$user_name]); 
        $user_get_name = $stmt->fetch();
        if($user_get_name)
        {
            $user_name_exist = true;
            $_SESSION['user_get_name'] = "ce nom d'utilisateur est déjà utilisé";
        } 
        else 
        {
            $user_name_exist = false;
            $_SESSION['user_get_name'] = "";

        }


        $stmt = $connexion->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]); 
        $user_get_email = $stmt->fetch();
        if ($user_get_email)
        {
            $email_exist = true;
            $_SESSION['email_exist'] = "ce email est déjà utilisé";
        } 
        else 
        {
            $email_exist = false;
            $_SESSION['email_exist'] = "";


        }

        if( $user_name_exist==false && $email_exist==false)
        {

            if (strcmp($password, $password_verify) == 0)
            {
                $password_hash = password_hash($password, PASSWORD_DEFAULT);


                $sql = "INSERT INTO users (email, username, password, admin) VALUES (:email, :username, :password, 0)";
                $stmt = $connexion->prepare($sql);
                $result = $stmt->execute(array('email'=>$email, 'username'=>$user_name,  'password'=>$password_hash));


 
        
                if($result) 
                {
                    $message = 'Inscription réussie!';
                    $_SESSION['password_non_conforme'] = "";
                    header('Location: connexion.php');
                } 
                else 
                {
                    $message = 'Erreur lors de l\'inscription.';
                }

            }
            else
            {
                $_SESSION['password_non_conforme'] = "Les mot de passe ne correspondent pas";
                header('Location: inscription.php');
                
            }


        }
        else
        {
            $message = 'Erreur email ou mot de passe existant';
            header('Location: inscription.php');

        }


        


    }



}



?>