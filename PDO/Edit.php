<?php
include_once('connection.php');

try {
    $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $login = filter_input(INPUT_POST,'login',FILTER_SANITIZE_STRING);

    $Update = $connection->prepare("UPDATE login SET nome = :nome, login = :login WHERE id = :id");
    $Update->bindParam(':id',$id);
    $Update->bindParam(':nome',$nome);
    $Update->bindParam(':login',$login);

    $Update->execute();

    header('location:index.php');


} catch (PDOException $error) {
    echo $error->getMessage();
}

?>