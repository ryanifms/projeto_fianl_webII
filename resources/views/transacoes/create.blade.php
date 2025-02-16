<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador Financeiro</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class="sidebar">
        <div class="profile">
            <div class="profile-pic"></div>
            <p>Nome Usuário</p>
        </div>
        <nav>
            <ul>
                <li><a href="#">Despesas</a></li>
                <li><a href="#">Relatórios e Análises</a></li>
                <li><a href="#">Alterar Perfil</a></li>
                <li><a href="#">Suporte e FAQ</a></li>
            </ul>
        </nav>
    </div>

    <div class="main-content">
        <div class="form-container">
            <form method="POST" action="/dashboard/salvar">
                @csrf
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao" placeholder="Ex: Conta de luz" required>

                

                <label for="valor">Valor</label>
                <input type="number" step="0.01" id="valor" name="valor" placeholder="Ex: 80.00" required>

                <label for="tipo">Tipo</label>
                <div class="tipo-options">
                    <input type="radio" id="entrada" name="tipo" value="entrada" required>
                    <label for="entrada">Entrada</label>
                    <input type="radio" id="saida" name="tipo" value="saida" required>
                    <label for="saida">Saída</label>
                </div>

                <label for="categorias">Categorias</label>
                <select id="categorias" name="categorias" required>
                    <option value="">Selecione</option>
                    <option value="alimentacao">Alimentação</option>
                    <option value="moradia">Moradia</option>
                    <option value="transporte">Transporte</option>
                    <option value="saude">Saúde</option>
                    <option value="educacao">Educação</option>
                    <option value="lazer">Lazer</option>
                    <option value="outros">Outros</option>
                </select>

                <button type="submit">Adicionar</button>
            </form>
        </div>
    </div>
</body>
</html>
