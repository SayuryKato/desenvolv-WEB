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
    require_once '../function/consultaPerfil.php';
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
                        <a href="editarPerfil.php" class="button">Editar Perfil</a>
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