<?php

$servidor="localhost";
$usuario="root";
$senha="";
$dbname="arqcli";
$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
    die(("Houve um erro : ".mysqli_connect_errno()));
}else {
    echo "deu certo";
}

?>