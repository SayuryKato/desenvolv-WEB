<?php

require_once('../_conn/connect.php'); // Substitua 'conexao.php' pelo nome do arquivo que contém a função Connect()

    $conexao = Connect(); // Conectar ao banco de dados



    if (isset($_POST["salvar"])) {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $matricula = $_POST["matricula"];
        $consulta = $conexao->prepare("UPDATE usuario SET nome='$nome', email='$email', telefone=$telefone, matricula='$matricula' WHERE cod_livro=$cod_livro");
    } else {
        
    }
    
    // Preparar e executar a consulta SQL
    
    $consulta->execute();

    // Obter todos os resultados em uma variável
    $results = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
