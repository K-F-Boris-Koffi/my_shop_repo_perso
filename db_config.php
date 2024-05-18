<?php


try 
{

    $connexion = new PDO("mysql:host=localhost;dbname=my_shop;$port=3306", 'root', '07746118');
    
}
catch( PDOException $Exception ) 
{

    $message_error = $Exception->getMessage();
}



?>