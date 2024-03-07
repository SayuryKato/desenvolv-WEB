<?php
session_start();
// print_r($_SESSION);

include "../function/carteira.func.php";
require_once "../_conn/connect.php";
$connect = Connect();


if (isset($_FILES['arquivoImg'])) {
    $id_user = $_SESSION['id_login'];
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
            <p class="txtAtencao">Nenhuma Carteira Cadastrada!</p>
            <div class="drop_zone" id="drop-zone">
                <div class="iconTxt">
                    <img src="../assets/icons/upload.png" alt="">
                    <p>Arraste e solte aqui.</p>
                    <p>OU</p>
                    <div>
                        <form enctype="multipart/form-data" action="" method="post">
                            <input name="arquivoImg" type="file" class="fileInput" accept="image/*" multiple>
                            <button type="submit">Enviar</button>
                        </form>

                        <!-- <?php
                                $seletron = SelCarteira($connect);
                                foreach ($seletron as $value) {
                                    echo '<img src="' . $value['img_carteira'] . '">';
                                    echo $value['id_user'];
                                    // echo '' . $n . $value['img_carteira'] . '';
                                    $n++;
                                }
                                ?> -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>