<?php

    class Cliente{
      public $nome;
      protected $cpf;
      public $email
      public $celular;
      public $data_nascimento;

      public function inserir(){
        $query = "INSERT INTO clientes(nome,cpf,email,celular,data_nascimento,sexo,logradouro,bairro,numero,complemento,cidade,estado)
         VALUES (:nome,:cpf,:email,:celular,:data_nascimento,:sexo,:logradouro,:bairro,:numero,:complemento,:cidade,:estado)";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome',$this->nome);
        $stmt->bindValue(':cpf',$this->cpf);
        $stmt->bindValue(':email',$this->email);
        $stmt->bindVaue(':celular',$this->data_nascimento);
        $stmt->execute();
      }

    }

?>
