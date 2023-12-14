<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque Virtual</title>
    <style>
        body {
            background-color: rgba(102, 69, 44);
            font-family: 'Georgia', serif;
            color: rgba(26, 18, 11);
        }

        section {
            margin: 20px;
        }

        .livro {
            background-color: #F5DEB3;
            padding: 10px;
            margin: 10px;
            border-radius: 8px;
        }

        header {
            background-color: rgba(64, 31, 6);
            color: #fff;
            padding: 30px;
            text-align: center;
        }

        nav {
            background-color: #b19274;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #9a7b5f;
        }
    </style>
</head>

<body>
    <header>
        <h1>Estoque</h1>
    </header>
    <nav>
    <a href="IndexA.php">Início</a>
        <a href="LivrosA.php">Livros</a>
        <a href="AutoresA.php">Autores</a>
        <a href="SobrenosA.php">Sobre Nós</a>
        <a href="EstoqueA.php">Estoque</a>
    </nav>
    <section>
        <div class="livro">
            <h2>Mulheres, raça e classe</h2>
            <p>Autor(a): Angela Davis</p>
            <p>Preço de Venda: R$
                <input type="text" id="precoVenda1" placeholder="Insira o preço de venda" />
            </p>
            <button onclick="alterarPreco('precoVenda1')">Alterar Preço</button>
            <p>Preço de Custo: R$
                <input type="text" id="precoCusto1" placeholder="Insira o preço de custo" />
            </p>
            <button onclick="alterarPreco('precoCusto1')">Alterar Preço</button>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>

        <div class="livro">
            <h2>A Escola do Bem e do Mal - Vol. 1</h2>
            <p>Autor: Soman Chainani</p>
            <p>Preço de Venda: R$
                <input type="text" id="precoVenda2" placeholder="Insira o preço de venda" />
            </p>
            <button onclick="alterarPreco('precoVenda2')">Alterar Preço</button>
            <p>Preço de Custo: R$
                <input type="text" id="precoCusto2" placeholder="Insira o preço de custo" />
            </p>
            <button onclick="alterarPreco('precoCusto2')">Alterar Preço</button>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>

        <div class="livro">
            <h2>BOX - TURMA DA MÔNICA JOVEM</h2>
            <p>Autor: Maurício de Souza</p>
            <p>Preço de Venda: R$
                <input type="text" id="precoVenda3" placeholder="Insira o preço de venda" />
            </p>
            <button onclick="alterarPreco('precoVenda3')">Alterar Preço</button>
            <p>Preço de Custo: R$
                <input type="text" id="precoCusto3" placeholder="Insira o preço de custo" />
            </p>
            <button onclick="alterarPreco('precoCusto3')">Alterar Preço</button>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>

        <div class="livro">
            <h2>Diário de um Banana 1</h2>
            <p>Autor: Jeff Kinney</p>
            <p>Preço de Venda: R$
                <input type="text" id="precoVenda4" placeholder="Insira o preço de venda" />
            </p>
            <button onclick="alterarPreco('precoVenda4')">Alterar Preço</button>
            <p>Preço de Custo: R$
                <input type="text" id="precoCusto4" placeholder="Insira o preço de custo" />
            </p>
            <button onclick="alterarPreco('precoCusto4')">Alterar Preço</button>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>

        <div class="livro">
            <h2>Cinderela está Morte</h2>
            <p>Autor: Kalynn Bayron</p>
            <p>Preço de Venda: R$
                <input type="text" id="precoVenda5" placeholder="Insira o preço de venda" />
            </p>
            <button onclick="alterarPreco('precoVenda5')">Alterar Preço</button>
            <p>Preço de Custo: R$
                <input type="text" id="precoCusto5" placeholder="Insira o preço de custo" />
            </p>
            <button onclick="alterarPreco('precoCusto5')">Alterar Preço</button>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>