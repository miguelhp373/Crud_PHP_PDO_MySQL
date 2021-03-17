<?php
    try{
        //conexão com o DataBase
        $user = "root";
        $pass = "root";

        $connection = new PDO("mysql:host=localhost;port=3306;dbname=pdo;",$user,$pass);


    }catch(PDOException $error){
        echo $error->getMessage();
    }
?>