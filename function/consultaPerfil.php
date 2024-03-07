<?php

require_once('../_conn/connect.php'); // Substitua 'conexao.php' pelo nome do arquivo que contém a função Connect()

    $conexao = Connect(); // Conectar ao banco de dados

    // Preparar e executar a consulta SQL
    $consulta = $conexao->prepare("SELECT * FROM usuario");
    $consulta->execute();

    // Obter todos os resultados em uma variável
    $results = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
