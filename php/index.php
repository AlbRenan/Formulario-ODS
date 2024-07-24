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
        <img src="../img/logo_unidas.png" alt="Logo_Unidas">
        <img src="../img/logo_sp.png" alt="Logo_SP">
        </div>

        <div class="info">
              <span>Realize a inscrição para participar do nosso evento.</span><br><br>
        </div>

        <form action="envio.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label><br>
            <input maxlength="200" type="text" name="nome" id="nome" placeholder="Digite seu nome" required><br><br>
        </div>
        <div class="form-group">
            <label for="email">E-mail Institucional:</label><br>
            <input maxlength="255" type="email" name="email" id="email" placeholder="Digite seu email" required><br><br>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label><br>
            <input maxlength="16" type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required><br><br>
        </div>
        <div class="form-group">
            <label for="celular">Celular:</label><br>
            <input maxlength="17" type="text" name="celular" id="celular" placeholder="Digite seu telefone celular" required><br><br>
        </div>
        <div class="form-group">
            <label for="empresa">Empresa:</label><br>
            <input maxlength="200" type="text" name="empresa" id="empresa" placeholder="Digite seu setor" required><br><br>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label><br>
            <input maxlength="150" type="text" name="cargo" id="cargo" placeholder="Digite seu cargo" required><br><br>
        </div>

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