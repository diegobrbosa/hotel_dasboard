<?php
ini_set('display_errors',true);
error_reporting(E_ALL);

//require_once "../config/conexao.php"; //incluindo o arquivo de conexao com o banco de dados

$numeracao_quarto = $_POST["numeracao_quarto"];
//$remember = $_POST["remember"];

if(isset($_POST['Cadastrar']) && ($_POST['Cadastrar'] === 'Cadastrar')){ //utilizando a função isset pra verificar se o botão Cadastrar foi precionado, recebendo o botão cadastrar através da variavel super global $_POST

    function insereQuartos($numeracao_quarto){ //criando uma funcion com o nome InsereUsuario e passando como parametro na assinatura da funcao variaveis que foram recebidas atraves da variavel super global $_POST
                    try { //utilizando o try pra fazer o tratamento de erros no banco de dados
                        $stmt = $pdo->prepare("INSERT INTO quartos (cod_quarto,numeracao_quarto) values ('',:numeracao_quarto)"); //criando uma variavel $stmt e atribuindo o valor da variavel $pdo e utilizand operador de acesso a objetos pra utilizar o metodo prepare pra preparar o insert no banco de dados
                        $stmt->bindValue(":numeracao_quarto",$numeracao_quarto, PDO::PARAM_STR);
                        $stmt->execute(array( //executando a preparação de dados $stmt e passando os valores que serao inseridos no banco de dados
                        ":numeracao_quarto"=>$numeracao_quarto
                        ));
                        }catch(PDOException $e){
                            echo "Error".$e->getMessage();
                        }
                    }
                    insereUsuario($numeracao_quarto);
}



?>
