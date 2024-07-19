<?php


include_once("conexao.php");

if(isset($_POST['submit']))
{
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];
$setor = $_POST['setor'];
$cargo = $_POST['cargo'];
$matriz = $_POST['matriz'];

$sql = "INSERT INTO dados (nome, email, cpf, celular, setor, cargo, matriz) VALUES ('$nome', '$email', '$cpf', '$celular', '$setor', '$cargo', '$matriz')";



if($conn->query($sql) === TRUE) {
    header("refresh: 3; url= http://localhost/Formulario-Inscricao/php/index.php");
} else {
    echo "Não enviado.";
}
}
?>
