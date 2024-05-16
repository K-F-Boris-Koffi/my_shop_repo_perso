<?php


try 
{

    $connexion = new PDO("mysql:host=localhost;dbname=my_shop;$port=3306", 'root', '1305');
    
}
catch( PDOException $Exception ) 
{

    $message_error = $Exception->getMessage();
}

if(isset($_POST['send']))
{


    if (isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_verify']))
    {
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_verify = $_POST['password_verify'];

        if (strcmp($password, $password_verify) == 0)
        {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);


            $sql = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
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



}



?>