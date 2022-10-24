<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'bdfernanda';

    $conexao = new mysqli($host,$user,$password,$database);

    //   if($conexao->connect_errno){
    //       echo "Erro ao conectar ao servidor";
    //   }else{
    //       echo "Conexão efetuada com sucesso!";
    //   }
?>