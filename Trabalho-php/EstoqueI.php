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
    <a href="IndexI.php">Início</a>
        <a href="LivrosI.php">Livros</a>
        <a href="AutoresI.php">Autores</a>
        <a href="SobrenosI.php">Sobre Nós</a>
        <a href="EstoqueI.php">Estoque</a>
    </nav>
    <section>
        <div class="livro">
            <h2>Mulheres, raça e classe</h2>
            <p>Autor(a): Angela Davis</p>
            <p>Preço de Venda: R$65,00</p>
            <p>Preço de Custo: R$<?php echo number_format(rand(10, 20), 2, ',', '.'); ?></p>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>

        <div class="livro">
            <h2>A Escola do Bem e do Mal - Vol. 1</h2>
            <p>Autor: Soman Chainani</p>
            <p>Preço de Venda: R$48,68</p>
            <p>Preço de Custo: R$<?php echo number_format(rand(10, 20), 2, ',', '.'); ?></p>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>

        <div class="livro">
            <h2>BOX - TURMA DA MÔNICA JOVEM</h2>
            <p>Autor: Maurício de Souza</p>
            <p>Preço de Venda: R$81,61</p>
            <p>Preço de Custo: R$<?php echo number_format(rand(10, 20), 2, ',', '.'); ?></p>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>

        <div class="livro">
            <h2>Diário de um Banana 1</h2>
            <p>Autor: Jeff Kinney</p>
            <p>Preço de Venda: R$46,12</p>
            <p>Preço de Custo: R$<?php echo number_format(rand(10, 20), 2, ',', '.'); ?></p>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>

        <div class="livro">
            <h2>Cinderela está Morte</h2>
            <p>Autor: Kalynn Bayron</p>
            <p>Preço de Venda: R$26,99</p>
            <p>Preço de Custo: R$<?php echo number_format(rand(10, 20), 2, ',', '.'); ?></p>
            <p>Quantidade: <?php echo number_format(rand(10, 15), 2); ?></p>
        </div>
    </section>
</body>

</html>