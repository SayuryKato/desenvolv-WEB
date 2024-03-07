<?php
function CadUser($connect, $email, $senha)
{
    $cad = "INSERT INTO login(email_user, senha_user) VALUES (?,?)";

    $prop = $connect->prepare($cad);
    $prop->bindParam(1, $email);
    $prop->bindParam(2, $senha);
    return $prop->execute();
}

function SelUser($connect)
{
    $selecao = "SELECT * FROM login";
    $sel = $connect->prepare($selecao);
    $sel->execute();
    return $sel->fetchAll();
}