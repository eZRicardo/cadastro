<?php 
INCLUDE 'connection.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

$consulta = "SELECT cpf FROM cliente WHERE cpf='$cpf'";

$check = $conn->query($consulta);
$check->fetch_assoc();


if($nome=="" or $senha=="" or $cpf=="" ){
die("Campo em branco, favor preencher.");
}

else{
if($check->num_rows>0){
die("CPF já cadastrado no sistema");
}

else{
$inserirdados = "INSERT INTO cadastro (nome,senha,cpf) VALUES ('$nome','$senha','$cpf') ";
$result = $conn->query($inserirdados);

if($inserirdados){
    die("Seja bem-vindo");
}
 else{
    die("Infelizmente não foi possível realizar seu cadastro");
}
}
}
?>