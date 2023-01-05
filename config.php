<?php

    $dbHost = 'Localhost';
    $dbUsername = 'douglas';
    $dbPassword = '123456';
    $dbName = 'formulario=douglas';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
?>