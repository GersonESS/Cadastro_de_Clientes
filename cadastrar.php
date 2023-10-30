<?php
include("conexao.php");
$codigo=$_POST["codigo"];
$nome=$_POST["nome"];
$idade=$_POST["idade"];
$sql="INSERT INTO clientes (codigo, nome, idade) VALUE ('$codigo', '$nome', '$idade')";
if(mysqli_query($conexao, $sql)){
    echo("<h1>Cadastrado com sucesso</h1>");
}else{
    echo ("Error:".$sql."<br>".mysqli_error($conexao));
}

?>