<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerenciador Financeiro</title>
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    </head>
<body>

<div class="container">
    <h2>Alterar Transação</h2>

    <form method="POST" action="/dashboard/atualizar/{{ $transacao->id }}">
        @csrf
        @method('PUT')

        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao" value="{{ $transacao->descricao }}" required>

        <label for="valor">Valor</label>
        <input type="number" step="0.01" id="valor" name="valor" value="{{ $transacao->valor }}" required>

        <label for="tipo">Tipo</label>
        <div class="tipo-options">
            <input type="radio" id="entrada" name="tipo" value="entrada" {{ $transacao->tipo == 'entrada' ? 'checked' : '' }} required>
            <label for="entrada">Entrada</label>
            <input type="radio" id="saida" name="tipo" value="saida" {{ $transacao->tipo == 'saida' ? 'checked' : '' }} required>
            <label for="saida">Saída</label>
        </div>

        <label for="categorias">Categoria</label>
        <select id="categorias" name="categorias" required>
            <option value="alimentacao" {{ $transacao->categorias == 'alimentacao' ? 'selected' : '' }}>Alimentação</option>
            <option value="moradia" {{ $transacao->categorias == 'moradia' ? 'selected' : '' }}>Moradia</option>
            <option value="transporte" {{ $transacao->categorias == 'transporte' ? 'selected' : '' }}>Transporte</option>
            <option value="saude" {{ $transacao->categorias == 'saude' ? 'selected' : '' }}>Saúde</option>
            <option value="educacao" {{ $transacao->categorias == 'educacao' ? 'selected' : '' }}>Educação</option>
            <option value="lazer" {{ $transacao->categorias == 'lazer' ? 'selected' : '' }}>Lazer</option>
            <option value="outros" {{ $transacao->categorias == 'outros' ? 'selected' : '' }}>Outros</option>
        </select>

        <button type="submit">Salvar Alterações</button>
        <a href="/dashboard">Cancelar</a>
    </form>
</div>

</body>
</html>
