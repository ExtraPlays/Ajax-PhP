<?php 

require('../connection.php');


if (isset($_POST['usuario']) && isset($_POST['senha'])){      
    
    session_start();
    
    $_SESSION['usuario'] = $_POST['usuario'];            

    
    $sql = Connection::getInstance()->prepare("SELECT * FROM usuarios WHERE nome = :nome AND senha = :senha");
    $sql->bindValue(":nome", $_POST['usuario']);
    $sql->bindValue(":senha", $_POST['senha']);
    $sql->execute();
    $dados = $sql->fetch();

    if ($sql->rowCount() > 0){
        echo "ok";
    }else {
        echo "dados invalidos";
    }


}else {
    header("Location: index.php");
}



?>