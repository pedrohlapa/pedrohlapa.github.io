<?php
    

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-pedro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    mysqli_set_charset($conexao, 'utf8')
    

?>