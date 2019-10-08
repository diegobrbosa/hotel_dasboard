<?php

    function AcessaBD(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=hotel','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $pdo){
            $pdo->getMessage();
        }
        return $pdo;
    }

    //
    // function make_hash($str){ //criando o hash da senha, usando MD5 e SHA-1
    //     return sha1(md5($str));
    // }
    //
    // //Verifica se o usuário está logado
    // function isLoggedIn(){ //criando uma função pra verificar se o usuário esta logado
    //     if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){ //criando uma estrutura de consdição se a variavel $_SESSION não estiver como logged_in ou seja a variavel $_SESSION não estiver setada e a variavel $_SESSION for diferente de true
    //         return false; //retornar false
    //     }
    //     return true; //retornar true
    // }

    // function autentica($cpf,$senha,&$total){
    //     $pdo = AcessaBD();
    //     $con = $pdo->prepare("SELECT * FROM alunos where cpf = :cpf and senha = :senha");
    //     $con->bindValue(":cpf", $cpf, PDO::PARAM_STR);
    //     $con->bindValue(":senha", $senha,PDO::PARAM_STR);
    //     $con->execute();
    //     $total = $con->rowCount();
    //     $r_con = $con->fetchAll(PDO::FETCH_OBJ);
    //     return $r_con;
    // }

   AcessaBD();


    // function autentica($cpf,$senha,&$total){
    //     $pdo = AcessaBD();
    //     $con = $pdo->prepare("SELECT * FROM alunos where cpf = :cpf and senha = :senha");
    //     $con->bindValue(":cpf", $cpf, PDO::PARAM_STR);
    //     $con->bindValue(":senha", $senha,PDO::PARAM_STR);
    //     $con->execute();
    //     $total = $con->rowCount();
    //     $r_con = $con->fetchAll(PDO::FETCH_OBJ);
    //     return $r_con;
    // }

    // function autentica($cpf,$senha,&$total){
    //     $pdo = AcessaBD();
    //     $con = $pdo->prepare("SELECT * FROM alunos where cpf = :cpf and senha = :senha");
    //     $con->bindValue(":cpf", $login, PDO::PARAM_STR);
    //     $con->bindValue(":senha", md5($senha),PDO::PARAM_STR);
    //     $con->execute();
    //     $total = $con->rowCount();
    //     $r_con = $con->fetchAll(PDO::FETCH_OBJ);
    //     return $r_con;
    // }
?>
