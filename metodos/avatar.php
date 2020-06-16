<?php

session_start();
require("../connection.php");

$sql = Connection::getInstance()->prepare("SELECT * FROM usuarios WHERE nome = :nome");

$sql->bindValue(":nome", $_SESSION['usuario']);
$sql->execute();

$dados = $sql->fetch();

if ($sql->rowCount() > 0){

    $_SESSION['avatar'] = $dados['avatar'];

    echo $_SESSION['avatar'];
}else {
    
    $_SESSION['avatar'] = "https://www.drupal.org/files/issues/default-avatar.png";
    echo $_SESSION['avatar'];
}


?>