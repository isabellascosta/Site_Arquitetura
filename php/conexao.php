<?php

$servidor = 'localhost';
$username = 'root';
$senha = '';
$banco = 'concept_archicteture';

//testar a conexao

$connect = mysqli_connect($servidor,$username,$senha,$banco);
    
if(mysqli_connect_error()){
    echo "Falha na conexão";
}




?>