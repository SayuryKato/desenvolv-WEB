<?php
session_start();
// print_r($_SESSION);
include "../function/carteira.func.php";
require_once "../_conn/connect.php";
$connect = Connect();


$id_user = $_SESSION['id_login'];
if (isset($_FILES['arquivoImg'])) {
    $arquivo = $_FILES['arquivoImg'];
    $pasta = '../arquivos/';
    $nomeArquivo = $arquivo['name'];
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    $novoNomeArquivo = uniqid() . '.' . $extensao;
    $path = $pasta . $novoNomeArquivo;

    if ($arquivo['error']) {
        die("Falha ao enviar arquivo");
    } else {
        $deu_certo = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNomeArquivo);
        if ($deu_certo) {
            $cad = CadCarteira($connect, $id_user, $path);
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
    <main class="containerDivisao">
        <div class="aside">
            <?php include "../components/aside.php" ?>
        </div>

        <div class="segundaTela">
            <div class="imgCarteira">

                <?php
                $carteira_encontrada = false;
                $seletron = SelCarteira($connect);
                foreach ($seletron as $value) {
                    if ($value['id_user'] == $_SESSION['id_login']) {
                        $carteira_encontrada = true;
                        echo '<img class="fotoCarteira" src="' . $value['img_carteira'] . '">';
                        break;
                    }
                }
                if (!$carteira_encontrada) {
                    echo '<div><p class="txtAtencao">Nenhuma Carteira Cadastrada!</p>';
                    echo '<form enctype="multipart/form-data" action="" method="post">
                            <input name="arquivoImg" type="file" class="fileInput" accept="image/*" multiple>
                            <button type="submit">Enviar</button>
                        </form></div>';
                }
                ?>

            </div>

            <div class="juntComp">
                <button onclick="window.location.href='carteiraEditar.php'" class="botao">Mudar foto</button>
                <img class=" horizont" src="../assets/icons/menuPointer.png" alt="menu">
            </div>

        </div>
    </main>
</body>

</html>