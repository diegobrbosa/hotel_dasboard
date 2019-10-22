<?php

    class Quarto{
      public $indentificacao;
      public $lotacao;
      public $descricao;
      public $valor_unico;
      public $situacao;
      public $tipo_quarto;

      public function inserir()
      {
          $query = "INSERT INTO quartos(identificacao, lotacao, descricao, valor_unico)
                    VALUES (:identificacao, :lotacao, :descricao, :valor_unico)";
          $conexao = Conexao::pegarConexao();
          $stmt = $conexao->prepare($query);
          $stmt->bindValue(':identificacao', $this->identificacao);
          $stmt->bindValue(':lotacao', $this->lotacao);
          $stmt->bindValue(':descricao', $this->descricao);
          $stmt->bindValue(':valor_unico', $this->valor_unico);
          $stmt->bindValue(':situacao',$this->situacao);
          $stmt->bindValue(':tipo_quarto',$this->tipo_quarto);
      }

    }

?>
