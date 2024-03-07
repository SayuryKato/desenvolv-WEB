<?php

require_once '../_conn/connect.php'; // Substitua 'conexao.php' pelo nome do arquivo que contém a função Connect()

    $conexao = Connect(); // Conectar ao banco de dados



    if (isset($_POST["salvar"])) {
        $id_usuario = $_POST["id_usuario"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $matricula = $_POST["matricula"];
        $alt = $conexao->prepare("UPDATE usuario SET nome=:nome, sobrenome=:sobrenome, email=:email, telefone=:telefone, matricula=:matricula WHERE id_usuario=:id_usuario");
        $alt->bindValue(':nome', $nome);
        $alt->bindValue(':sobrenome', $sobrenome);
        $alt->bindValue(':email', $email);
        $alt->bindValue(':telefone', $telefone);
        $alt->bindValue(':matricula', $matricula);
        $alt->bindValue(':id_usuario', $id_usuario);

        $alt->execute();
        if(!$alt->rowCount()>0){
            echo "Erro durante o insert: erro em $alt";
        }
        else{
            echo "<script>
                window.location.href='http://localhost/desenvolv-WEB/pages/perfil.php';
                </script>";
        }

    } else {
        echo "Não sei o que esta acontecendo";
    }
?>
