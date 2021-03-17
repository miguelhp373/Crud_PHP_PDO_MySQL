<?php
    include_once('connection.php');
    session_start();

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

    $query = $connection->query("SELECT * FROM login Where id = $id");

    $line = $query->fetch(PDO::FETCH_ASSOC);

?>


<form action="Edit.php" method="post">
    <input type="text" name="nome" value="<?php echo $line['nome'];?>" id="nome" placeholder="nome:">
    <br><br>
    <input type="text" name="login" value="<?php echo $line['login'];?>" id="login" placeholder="login:">
    <br><br>
    <input type="hidden" name="id" value="<?php echo $line['id'];?>">
    <button type="submit">Editar</button>
</form>