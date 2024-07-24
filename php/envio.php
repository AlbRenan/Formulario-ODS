<?php


include_once("conexao.php");

if(isset($_POST['submit']))
{
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];

$sql = "INSERT INTO dados (nome, email, cpf, celular, empresa, cargo) VALUES ('$nome', '$email', '$cpf', '$celular', '$empresa', '$cargo')";



if($conn->query($sql) === TRUE) {
    header("refresh: 3; url= http://localhost/Formulario-ODS/php/index.php");
} else {
    echo "Não enviado.";
}
}
?>
