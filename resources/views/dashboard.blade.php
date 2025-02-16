<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador Financeiro</title>
    <link rel="stylesheet" href="css/dashboard.css">
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
                <li><a href="/relatorio" target="_blank" >Relatórios e Análises</a></li>
                
                <li><a href="#">Alterar Perfil</a></li>
                <li><a href="#">Suporte e FAQ</a></li>
            </ul>
        </nav>
    </div>


    <div class="main-content">
      <a href="dashboard/novo">Novo</a>




        
        <div class="table-container">
            <h2>Últimas movimentações</h2>
            <table>
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Categoria</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transacoes as $item)
                        <tr>
                            <td>{{$item['descricao']}}</td>
                            <td>{{$item['valor']}}</td>
                            <td>{{$item['data']}}</td>
                            <td><span class="{{$item['tipo']}}">{{$item['tipo']}}</span></td>
                            <td>{{$item['categorias']}}</td>
                            <td>
                                <button class="edit"></a> 
                                    <a href="/dashboard/editar/{{ $item->id }}">✏️</a>
                                 </button> 
                                
                                <form action="dashboard/excluir" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                                    <input type="submit" class="botao-excluir" value="🗑️">
                                  </form>
                               
                                
                            </td>
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>







</body>
</html>
