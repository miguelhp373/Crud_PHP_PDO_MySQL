<?php
include_once('connection.php');
session_start();

try {
    $_SESSION['nome'] = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $_SESSION['login'] = filter_input(INPUT_POST,'login',FILTER_SANITIZE_STRING);

    $insert = $connection->prepare("INSERT INTO login (nome,login) VALUES (:nome,:login)");
    
    $insert->bindParam(':nome',$_SESSION['nome']);
    $insert->bindParam(':login',$_SESSION['login']);

    $insert->execute();

    header('location:index.php');


} catch (PDOException $error) {
    echo $error->getMessage();
}

?>