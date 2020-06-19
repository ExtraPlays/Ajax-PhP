<?php 


require("../connection.php");


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = Connection::getInstance()->prepare("SELECT * FROM usuarios WHERE nome = :nome");
$sql->bindValue(":nome", $usuario);
$sql->execute();

$response = "";

if ($sql->rowCount() > 0){
    $response = "usuario ja cadastrado";
    echo $response;
}else {

    if (strlen($senha) < 7){
        $response = "senha curta";
        echo $response;
    }else {
        $sql = Connection::getInstance()->prepare("INSERT INTO usuarios (nome, senha) VALUES (:nome, :senha)");
        $sql->bindValue(":nome", $usuario);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
        $response = "sucesso";
        echo $response;
    }

}



?>