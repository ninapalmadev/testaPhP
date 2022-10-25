<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastra Cliente</title>
</head>

<body>
    <h2>Cadastro</h2>
    <form method="POST" action="dado.php" class="form">
        <fieldset class="input-content">
            <div class="input-container">
                <label for="nome">Nome: </label>
                <input name="nome" id="nome" class="input" type="text" placeholder="Nome" data-tipo="nome">
            </div>
            <div class="input-container">
                <label for="email">E-mail: </label>
                <input name="email" id="email" class="input" type="text" placeholder="E-mail" data-tipo="email">
            </div>
            <div class="input-container">
                <label for="CPF">CPF: </label>
                <input name="cpf" id="cpf" class="input input-cpf" type="text" placeholder="CPF" data-tipo="cpf" onblur="validarCPF(this)" required>
            </div>
            <div class="input-container">
                <label for="dependentes">Dependentes: </label>
                <input name="dependentes" id="dependentes" class="input" type="text" placeholder="Dependentes" data-tipo="dependentes">
            </div>
        </fieldset>
        <button type="submit" class="botao">Cadastrar</button>
    </form>
    <script src="valida.js"></script>
</body>

</html>