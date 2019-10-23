<?php

    class ContratoReserva{
      public $data_reserva;
      public $valor_total;
      public $forma_pagamento;
      public $data_entrada;
      public $data_saida;

      public function criarCadastroRerserva(){
        try {

          $query = "INSERT INTO clientes(nome,cpf,email,celular,data_nascimento,sexo,logradouro,bairro,numero,complemento,cidade,estado)
           VALUES (:nome,:cpf,:email,:celular,:data_nascimento,:sexo,:logradouro,:bairro,:numero,:complemento,:cidade,:estado)";
          $conexao = Conexao::pegarConexao();
          $stmt = $conexao->prepare($query);
          $stmt->bindValue(':nome',$this->nome);
          $stmt->bindValue(':cpf',$this->cpf);
          $stmt->bindValue(':email',$this->email);
          $stmt->bindVaue(':celular',$this->data_nascimento);
          $stmt->execute();
          $ultimoID = $pdo->lastInsertId();

          $query = "INSERT INTO contratos_reservas (data_reserva,valor_total,forma_pagamento,data_entrada,data_saida,clientes_id)
              VALUES(:data_reserva,:valor_total,:forma_pagamento,:data_entrada,:data_saida,:clientes_id)
          ";
          $stmt = $conexao()->prepare($query);
          $stmt->bindValue(':data_reserva',$this->data_reserva);
          $stmt->bindValue(':valor_total',$this->valor_total);
          $stmt->bindValue(':forma_pagamento',$this->forma_pagamento);
          $stmt->bindValue(':data_entrada',$this->data_entrada);
          $stmt->bindValue(':data_saida',$this->data_saida);
          $stmt->bindValue(':clientes_id',$this->$ultimoID);
          $stmt->execute();

        } catch (PDOException $e) {
          echo "ERROR:".$e->getMessage();
        }

      }

      public function recuperarCodigoQuarto(){
        $query = "SELECT * FROM clientes where id = :id";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao()->prepare($query);
      }

    }

?>
