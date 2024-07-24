<?php

include_once("../php/conexao.php");

$sql = "SELECT * FROM dados";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table width='100%' border='1px'>";
        echo "<tr><th>Nome Completo</th><th>Email Institucional</th><th>CPF</th><th>Celular</th><th>Empresa</th><th>Cargo</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['cpf'] . "</td>";
            echo "<td>" . $row['celular'] . "</td>";
            echo "<td>" . $row['empresa'] . "</td>";
            echo "<td>" . $row['cargo'] . "</td>";
            echo "<td>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro cadastrado.";
    }
?>
