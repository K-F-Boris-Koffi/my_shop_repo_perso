<?php


// try 
// {

//     $connexion = new PDO("mysql:host=localhost;dbname=my_shop;$port=3306", 'root', '1305');
    
// }
// catch( PDOException $Exception ) 
// {

//     $message_error = $Exception->getMessage();
// }

include_once('db_config.php');


if(isset($_POST['send']))
{

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
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
        } 
        else 
        {
            $user_name_exist = false;

        }


        $stmt = $connexion->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]); 
        $user_get_email = $stmt->fetch();
        if ($user_get_email)
        {
            $email_exist = true;
        } 
        else 
        {
            $email_exist = false;

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
                    header('Location: connexion.php');
                } 
                else 
                {
                    $message = 'Erreur lors de l\'inscription.';
                }

            }
            else
            {
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