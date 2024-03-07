<?php
session_start();
// print_r($_SESSION);
include "../function/carteira.func.php";
require_once "../_conn/connect.php";
$connect = Connect();

$seletron = SelCarteira($connect);
foreach ($seletron as $value) {
    if ($value['id_user'] == $_SESSION['id_login']) {
        $id_carteira = $value['id_carteira'];
        break;
    }
}

if (isset($_FILES['arquivoImg'])) {
    $arquivo = $_FILES['arquivoImg'];
    $pasta = '../arquivos/';
    $nomeArquivo = $arquivo['name'];
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    $novoNomeArquivo = uniqid() . '.' . $extensao;
    $path = $pasta . $novoNomeArquivo;

    if ($arquivo['error']) {
        echo "Falha ao enviar arquivo";
    } else {
        $deu_certo = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNomeArquivo);
        if ($deu_certo) {
            echo 'banana';
            $edit = EditCarteira($connect, $path, $id_carteira);
            header('Location: carteiraVisual.php');
        }
    }
}

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
    <form enctype="multipart/form-data" action="" method="post">
        <main class="containerDivisao">
            <div class="aside">
                <?php include "../components/aside.php" ?>
            </div>

            <div class="segundaTela">
                <div class="imgCarteira">

                    <input name="arquivoImg" type="file" class="fileInput" accept="image/*" multiple>

                </div>

                <div class="botaoInferior">
                    <a href="carteiraVisual.php" class="botaoCancelar">Cancelar</a>
                    <button type="submit" class="botao">Enviar</button>
                </div>

            </div>
        </main>
    </form>
</body>

</html>