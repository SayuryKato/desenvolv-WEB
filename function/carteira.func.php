<?php
function CadCarteira($connect, $user, $img)
{
    $cad = "INSERT INTO carteira(id_user, img_carteira) VALUES (?,?)";

    $prop = $connect->prepare($cad);
    $prop->bindParam(1, $user);
    $prop->bindParam(2, $img);
    return $prop->execute();
}

function SelCarteira($connect)
{
    $selecao = "SELECT * FROM carteira";
    $sel = $connect->prepare($selecao);
    $sel->execute();
    return $sel->fetchAll();
}