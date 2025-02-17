<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador Financeiro</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
<div class="barra-bottom"></div>

    <div class="conteiner-dasdashboard">

    <div class="sidebar">
        <div class="profile">
            <div class="profile-pic"></div>
            <p>Nome Usuário</p>
            <br>
        </div>
        <nav>
            <ul>
                <li><a href="#">Relatórios e Análises</a></li>
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

                <div class="option-tipo">
                <label for="tipo">Tipo : </label>
                <div class="tipo-options">
                    <input type="radio" id="entrada" name="tipo" value="entrada" required>
                    <label for="entrada">Entrada</label>
                    <input type="radio" id="saida" name="tipo" value="saida" required>
                    <label for="saida">Saída</label>
                </div>
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
                <p></p>
                <button type="submit">Adicionar</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>
