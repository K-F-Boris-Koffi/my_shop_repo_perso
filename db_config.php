<?php


try 
{

    $connexion = new PDO("mysql:host=localhost;dbname=my_shop;$port=3306", 'root', '1305');
    
}
catch( PDOException $Exception ) 
{

    $message_error = $Exception->getMessage();
}



?>