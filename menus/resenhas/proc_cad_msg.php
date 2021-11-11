<?php
session_start();
include_once 'conexao.php';

//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$envia = filter_input(INPUT_POST, 'envia', FILTER_SANITIZE_STRING);
if($envia){
    //Receber os dados do formulário
    $Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $Resenha = filter_input(INPUT_POST, 'Resenha', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_msg_cont = "INSERT INTO resenhas (nome, email, resenha) VALUES (:Nome, :Email, :Resenha)";
    
    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':Nome', $Nome);
    $insert_msg_cont->bindParam(':Email', $Email);
    $insert_msg_cont->bindParam(':Resenha', $Resenha);
    
    if($insert_msg_cont->execute()){
        $_SESSION['msg'] = "<p style='color:green;'>Resenha enviada com sucesso</p>";
        header("Location: resenha.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso</p>";
        header("Location: resenha.php");
    }    
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso</p>";
    header("Location: resenha.php");
}