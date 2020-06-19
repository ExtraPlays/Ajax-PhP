<?php 


require("../connection.php");

session_start();

$usuario = $_SESSION['usuario'];

$novaSenha = $_POST['novaSenha'];
$confirmarSenha = $_POST['confirmarSenha'];


if (strlen($novaSenha) < 7){
    
    $response = array("response"=>"senha pequena");
    
    echo json_encode($response);

}else {    

    if ($novaSenha == $confirmarSenha){

        $response = array("response"=>"sucesso");
    
        echo json_encode($response);    
    
    
    }else {
        $response = array("response"=>"senhas diferentes");
    
        echo json_encode($response);
    }
}

?>