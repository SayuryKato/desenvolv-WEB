<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Universitário</title>
    <link rel="stylesheet" href="../style/perfil.css">
    <link rel="stylesheet" href="../global.css">
</head>

<body>
    <?php
    // Inclui o arquivo de conexão
    require_once '../function/consultaPerfil.func.php';
    foreach ($results as $row) {
    ?>
    <main class="main-container">
        <div class="aside">
            <?php
                include("../components/aside.php");
                ?>

        </div>
        <div style="width:80%">
            <div style="display:block">
                <div class="div1">
                    <div class="img-container">
                        <img class="perfil-img" src="../assets/perfil_joao.jpg" alt="img_joao">
                        <div style="display: flex; justify-content:center; margin-top:1rem">
                            <a href="editarPerfil.php" class="button">Editar Perfil</a>
                            <button href=""
                                style="border:none; background-color:#fff; align-items:center; cursor:pointer"><img
                                    style="display: inline-block; height: 5vh; width: 5vw;margin:auto auto"
                                    src="../assets/icons/pontos.svg" alt="pontos"></button>
                        </div>

                    </div>
                    <div class="input-container">
                        <div class="div-label">
                            <label for="nome">Nome </label>
                            <input type="text" value="<?php echo $row["nome"]; ?> " disabled>
                        </div>
                        <div class="div-label">
                            <label for="">Sobrenome</label>
                            <input type="text" value="<?php echo $row["sobrenome"]; ?> " disabled>
                        </div>
                        <div class="div-label">
                            <label for="">E-mail</label>
                            <input type="text" value="<?php echo $row["email"]; ?> " disabled>
                        </div>
                    </div>
                </div>
                <div class="div2">
                    <div class="input-container2">
                        <div class="div-label">
                            <label for="">Telefone</label>
                            <input type="text" value="<?php echo $row["telefone"]; ?> " disabled>
                        </div>
                        <div class="div-label">
                            <label for="">Matrícula</label>
                            <input type="text" value="<?php echo $row["telefone"]; ?> " disabled>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="div-label">
                            <label for="">Telefone</label>
                            <input type="text" value="<?php echo $row["telefone"]; ?> " disabled>
                        </div>
                        <div class="div-label">
                            <label for="">Matrícula</label>
                            <input type="text" value="<?php echo $row["telefone"]; ?> " disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
    }
        ?>
</body>
</main>

</html>