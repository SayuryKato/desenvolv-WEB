<?php

function Connect()
{
    $bdcon = "mysql:dbname=cardapioru;host=localhost";
    $bduser = "root";
    $bdpass = "";

    try {
        $connect = new PDO($bdcon, $bduser, $bdpass);
        return $connect;
    } catch (PDOException $erro) {
        echo 'Erro ao conectar o banco de dados ' . $erro->getMessage();
    }
}