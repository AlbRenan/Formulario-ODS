<?php

include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>

    <div class="form"><br>
        <div class="logo">
        <img src="../img/logo_unidas.png" alt="Logo">
        </div>

        <div class="info">
              <span>Realize a inscrição para participar do nosso evento.</span><br><br>
        </div>

        <form action="envio.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label><br>
            <input maxlength="200" type="text" name="nome" id="nome" placeholder="Digite seu nome"><br><br>
        </div>
        <div class="form-group">
            <label for="email">E-mail Institucional:</label><br>
            <input maxlength="255" type="email" name="email" id="email" placeholder="Digite seu email"><br><br>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label><br>
            <input maxlength="16" type="text" name="cpf" id="cpf" placeholder="Digite seu CPF"><br><br>
        </div>
        <div class="form-group">
            <label for="celular">Celular:</label><br>
            <input maxlength="17" type="text" name="celular" id="celular" placeholder="Digite seu telefone celular"><br><br>
        </div>
        <div class="form-group">
            <label for="setor">Setor:</label><br>
            <input maxlength="200" type="text" name="setor" id="setor" placeholder="Digite seu setor"><br><br>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label><br>
            <input maxlength="150" type="text" name="cargo" id="cargo" placeholder="Digite seu cargo"><br><br>
        </div>
        <div class="form-group">
            <label for="unidade">Matriz:</label><br>
            <select maxlength="255" name="matriz" id="matriz">
                <option selected disabled>Selecione</option>
                <option value="Itaquera">Hospital Santa Marcelina Itaquera</option>
                <option value="Itaim">Hospital Santa Marcelina Itaim Paulista</option>
                <option value="Tiradentes">Hospital Santa Marcelina Cidade Tiradentes</option>
                <option value="Neomater">Hospital Santa Marcelina Neomater</option>
                <option value="Porto">Hospital Santa Marcelina Porto Velho</option>
                <option value="Sapezal">Hospital Santa Marcelina Sapezal</option>
                <option value="APS">APS - Atenção Primária a Saúde</option>
            </select>
        </div><br>

        <div class="botoes">
             <input type="submit" name="submit" id="submit"><br>
             <span class="voltar"><a href="../html/info.html"><strong>Voltar</strong></span></a><br><br>
    </div>
</form>

    </div>

</body>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

<script>
    $('#cpf').mask('000.000.000-00');
    $('#celular').mask('(00) 00000-0000');
</script>

</html>