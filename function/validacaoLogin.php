<?php
session_start();

include_once "../_conn/connect.php";
include "../function/login.func.php";
$connect = Connect();
$sel = SelUser($connect);

if (isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $credenciais_corretas = false;

    foreach ($sel as $value) {
        if ($value['email_user'] == $email && $value['senha_user'] == $senha) {
            $credenciais_corretas = true;
            $id_usuario = $value['id_login'];
            $_SESSION['id_login'] = $id_usuario;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            break; // Encerra o loop, pois as credenciais foram encontradas
        }
    }

    if ($credenciais_corretas) {
        header('Location: ../pages/cardapio2.php');
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../index.php');
    }
} else {
    header('Location: ../index.php');
}