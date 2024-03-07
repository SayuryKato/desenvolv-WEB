<?php
session_start();
// print_r($_REQUEST);

include_once "../_conn/connect.php";
include "../function/login.func.php";
$connect = Connect();
$sel = SelUser($connect);

if (isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    foreach ($sel as $value) {
        if ($value['email_user'] == $email && $value['senha_user'] == $senha) {

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../pages/cardapio.php');
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../index.php');
        }
    }
} else {
    header('Location: ../index.php');
}