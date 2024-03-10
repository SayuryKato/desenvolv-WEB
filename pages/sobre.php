<?php
session_start();
include "../function/carteira.func.php";
require_once "../_conn/connect.php";
$connect = Connect();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira Estudante</title>
    <link rel="stylesheet" href="../style/carteira.css">
    <link rel="stylesheet" href="../global.css">
</head>

<body>
    <main class="containerDivisao">
        <div class="aside">
            <?php include "../components/aside.php" ?>
        </div>
        <div class="segundaTela">
            <p>Empresa Competente! Confia.</p>
        </div>
    </main>
</body>

</html>