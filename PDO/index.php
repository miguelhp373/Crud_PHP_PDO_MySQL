<?php
include_once('connection.php');

try{
    //query
     $query = $connection->query("SELECT * FROM login");
     echo "<a href='formRegister.php'>
                 Novo Cadastro 
            </a> 
            <br><br>
            Listagem de Usuários
            ";
    echo "
        <table border='1'>
            <tr>
                <td>Nome</td>
                <td>Login</td>
                <td>Ações</td>
            </tr>
    ";

    While($line = $query->fetch(PDO::FETCH_ASSOC)){
        echo "
            <tr>
                <td>".$line['nome']."</td>
                <td>".$line['login']."</td>
                <td>
                <a href='formEdit.php?id=".$line['id']."'>
                    Editar
                </a> 
                - 
                <a href='Delete.php?id=".$line['id']."'>
                Excluir
                </a>
                 </td>
             </tr>
             ";
    }

    echo "</table>";
    
    echo $query->rowCount()." registros Exibidos";

}catch(PDOException $error){
    $error->getMessage();
}

?>