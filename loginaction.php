<?php
INCLUDE 'connection.php';

$cpf = $_GET['cpf'];
$senha = $_GET['senha'];

$sql = "SELECT cpf, senha FROM cadastrar WHERE 
cpf = '$cpf' AND senha = '$senha' ";

$result = $conn->query($sql);

if($result){
    $row = $result->fetch_assoc();
    if($row){
        die("Logado com sucesso");
    }
    else{
        die("Nome ou senha inválido");
    }
}
else{
    die("Erro na execução");
}

?>