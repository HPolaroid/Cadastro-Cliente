<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cadastrocliente";

    //Cria conexão

    $conexao = new mysqli($servername, $username, $password, $dbname);

    // Verefica Conexão

    if($conexao -> connect_error){
                                die("Falha na Conexão com o BD: " . $conexao -> connect_error);
                                }
    
?>