<?php

//inclui o arquivo de inicialização
require 'conexao.php';

//resgata váriaveis do formulário
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($cpf) || empty ($senha)){
    //echo "<script>window.location='../index.php';alert('Informe CPF e SENHA');</script>";
    header('Location:../index.php?login=erro2');
    exit;
}

//cria o hash da senha

$passwordHash = make_hash($senha);

$pdo = AcessaBD();

$sql = "SELECT id_aluno,nome FROM login join alunos WHERE cpf = :cpf AND senha = :senha";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':cpf',$cpf);
$stmt->bindParam(':senha',$passwordHash);

$stmt->execute();

//$users = $stmt->fecthAll(PDO::FETCH_ASSOC);// ERRADO
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);//CERTO 

if(count($users) <= 0){
    //echo "<script>alert('Email ou senha incorretos')</script>";
    //echo "<script>window.location='../index.php';alert('CPF ou SENHA incorretos');</script>";
    //header('Location: index.php');
    header('Location:../index.php?login=erro');
    exit;
}

//pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id_aluno'];
$_SESSION['user_name'] = $user['nome'];
$_SESSION ['user_email'] = $user['email'];

header('Location: ../view/ambienteAluno.php');

?>