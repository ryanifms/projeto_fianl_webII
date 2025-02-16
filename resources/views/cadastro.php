<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="fundo-cadastro"></div>
    <div class="form">
        <div class="line-img">
            <a href="">
                <img src="./img/seta-esquerda.png" alt="seta para esquerda">
            </a>
        </div>
        <div class="sub-form">
        <div class="title-form">
            <span class="title"><b>Cadastre-se</b></span>
        </div>
        <div class="divisao">
        <span class="sub-title">Preencha com suas informações</span>
        </div>

        <div class="inputs">

        <label for="nome">Nome </label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

        <label for="email">E-mail </label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

        <label for="senha">Senha </label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

        <label for="conf-senha">Confirmar Senha </label>
        <input type="password" id="conf-senha" name="conf-senha" placeholder="Digite sua senha" required>

        <button type="submit">Cadastrar</button>

        </div> 


        </div> <!-- fim sub form -->
    </div>
</body>
</html>
