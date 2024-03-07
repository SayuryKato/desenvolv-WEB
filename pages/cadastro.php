<?php
include "../function/login.func.php";
require_once "../_conn/connect.php";
$connect = Connect();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uea RU</title>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
    @media screen and (max-width: 768px) {
        .right-side {
            display: none;
        }
    }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['cadastro'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $confSenha = filter_input(INPUT_POST, 'confSenha', FILTER_SANITIZE_SPECIAL_CHARS);
        if ($senha != $confSenha) {
            echo "<div>As senhas não coincidem!</div>";
        } else {
            $cad = CadUser($connect, $email, $senha);

            if ($cad == true) {
                echo "<div>
                cadstrado com sucesso!
                </div>";
                header('Location: ../index.php');
            } else {
                echo "<div>
            Erro ao cadastrar usuário!
            </div>";
            }
        }
    }
    ?>
    <main class="container">
        <div class="left-side">
            <div class="figura">
                <figure>
                    <img class="imgPequena" src="../assets/logoUea.png" alt="logo da UEA">
                </figure>
                <p>Cadastre-se</p>
            </div>
            <form action="" method="post" class="forms">
                <div class="input">
                    <label for="email">E-mail*</label>
                    <input class="campInput" type="email" name="email" id="email" placeholder="Digite seu e-mail">
                </div>
                <div class="input">
                    <label for="senha">Senha*</label>
                    <input class="campInput" type="password" name="senha" id="senha" placeholder="*********">
                    <span>
                        <img class="icone" src="../assets/icons/senha.png" alt="icon de senha"
                            onclick="mostrarSenha('senha')">
                    </span>
                </div>
                <div class="input">
                    <label for="confSenha">Confirmar Senha*</label>
                    <input class="campInput" type="password" name="confSenha" id="confSenha" placeholder="*********">
                    <span>
                        <img class="icone" src="../assets/icons/senha.png" alt="icon de senha"
                            onclick="mostrarSenha('confSenha')">
                    </span>
                </div>
                <div class="central">
                    <button class="botao" type="submit" name="cadastro">Cadastrar</button>
                    <p>Já é usuário?
                        <a href="../index.php">Login</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="right-side">
            <figure class="imgLateral">
                <img class="imgGrande" src="../assets/imgGLogin.png" alt="Foto Lateral">
            </figure>
        </div>
    </main>
    <script src="../js/mostrarSenha.js"></script>
</body>

</html>