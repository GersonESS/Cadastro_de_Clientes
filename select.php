<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção De Dados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    

<?php
include("conexao.php");
$sql="SELECT codigo, nome, idade FROM clientes";

$resultado=mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado)){
    echo"<table class='table'><tr><th>Codigo</th><th>Nome</th><th>Idade</th></tr>";
    while($row=mysqli_fetch_assoc($resultado)){
        echo"<tr><td>".$row['codigo']."</td><td>".$row['nome']."</td><td>".$row['idade']."</td></tr>";
    }
echo"</table>";
}
else{
    echo"Zero Resultados";

}
mysqli_close($conexao);
?>
</body>
</html>