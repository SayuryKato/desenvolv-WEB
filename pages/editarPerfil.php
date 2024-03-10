<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Universitário</title>
    <link rel="stylesheet" href="../style/editarPerfil.css">
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
            <form action="../function/editarPerfil.func.php" style="width:80%" method="POST">

                <div style="display:block">
                    <div class="div1">
                        <div class="img-container">
                            <img class="perfil-img" src="../assets/perfil_joao.jpg" alt="img_joao">
                        </div>
                        <div class="input-container">
                            <div class="div-label">
                                <input type="hidden" value="<?php echo $row["id_usuario"]; ?>" name="id_usuario">
                                <label for="nome">Nome </label>
                                <input type="text" value="<?php echo $row["nome"]; ?> " name="nome">
                            </div>
                            <div class="div-label">
                                <label for="">Sobrenome</label>
                                <input type="text" value="<?php echo $row["sobrenome"]; ?> " name="sobrenome">
                            </div>
                            <div class="div-label">
                                <label for="">E-mail</label>
                                <input type="text" value="<?php echo $row["email"]; ?> " name="email">
                            </div>
                        </div>
                    </div>
                    <div class="div2">
                        <div class="input-container2">
                            <div class="div-label">
                                <label for="">Telefone</label>
                                <input type="text" value="<?php echo $row["telefone"]; ?> " name="telefone">
                            </div>
                            <div class="div-label">
                                <label for="">Matrícula</label>
                                <input type="text" value="<?php echo $row["matricula"]; ?> " name="matricula">
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="div-label">
                                <label for="">Telefone</label>
                                <input type="text" value="<?php echo $row["telefone"]; ?> " name="telefone">
                            </div>
                            <div class="div-label">
                                <label for="">Matrícula</label>
                                <input type="text" value="<?php echo $row["matricula"]; ?> " name="matricula">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-bts">
                    <div style="margin-left: 2rem;width:50%">
                        <input type="submit" value="Cancelar" class="cancelar" name="cancelar">
                    </div>
                    <div style="margin-left: 2rem;width:50%">
                        <input type="submit" value="Salvar Alterações" class="salvar" name="salvar">
                    </div>

                </div>
            </form>



        <?php
    }
        ?>
</body>
</main>

</html>