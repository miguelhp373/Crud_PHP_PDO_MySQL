<?php
include_once('connection.php');

try {
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

    $Delete = $connection->prepare("DELETE FROM login WHERE id = :id");
    $Delete->bindParam(':id',$id);

    $Delete->execute();

    header('location:index.php');


} catch (PDOException $error) {
    echo $error->getMessage();
}

?>