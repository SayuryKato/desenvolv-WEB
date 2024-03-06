<?php
function CadUser($connect, $email, $senha)
{
    $cad = "INSERT INTO login(email_user, senha_user) VALUES (?,?)";

    $prop = $connect->prepare($cad);
    $prop->bindParam(1, $email);
    $prop->bindParam(2, $senha);
    return $prop->execute();
}