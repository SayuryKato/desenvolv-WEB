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

function SelCarteiraId($connect, $idcarteira)
{
    $selecao = "SELECT * FROM carteira WHERE id_carteira = :id";
    $sel = $connect->prepare($selecao);
    $sel->bindParam(':id', $idcarteira);
    $sel->execute();
    return $sel->fetch();
}

function EditCarteira($connect, $img_carteira, $idcarteira)
{
    $editar = "UPDATE carteira SET img_carteira = :img_carteira WHERE id_carteira = :id";
    $edit = $connect->prepare($editar);
    $edit->bindParam(':img_carteira', $img_carteira);
    $edit->bindParam(':id', $idcarteira);
    return $edit->execute();
}

function DelCarteira($connect, $idcarteira)
{
    $delete = "DELETE FROM carteira WHERE id_carteira = :id";
    $del = $connect->prepare($delete);
    $del->bindParam(':id', $idcarteira);
    return $del->execute();
}