<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Camarelo</title>
   
    <style>
        body {
            background-color: #e0d5b8; /* Tons terrosos */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        header {
            background-color: #543b33; /* Marrom escuro */
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            text-align: center;
            padding: 20px;
        }

        .autor {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f2e8cc; /* Tons claros */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left; /* Ajuste para alinhar o texto à esquerda */
        }

        .autor h3 {
            margin-bottom: 10px;
        }

        .autor p {
            margin: 0 0 10px;
        }

        .livro {
            margin-top: 30px;
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
        footer {
            background-color: #543b33; /* Marrom escuro */
            color: #fff;
            text-align: center;
            padding: 3px;
            position: fixed;
            bottom: 0;
            width: 100%;
        
        }

        /* Estilização adicional */
        i {
            margin-right: 5px;
        }

    </style>
</head>

<body>
    <header>
        <h1>Livraria Camarelo</h1>
        <p>Conheça nossos autores e suas obras inspiradoras.</p>
    </header>
    
    <section>
        <h2>Autores em Destaque</h2>
        <nav>
        <a href="IndexC.php">Inicio</a>
        <a href="LivrosC.php">Livros</a>
        <a href="AutoresC.php">Autores</a>
        <a href="SobrenosC.php">Sobre Nós</a>
    </nav>


        <?php
        // Array com informações dos autores
        $autores = array(
            array("nome" => "Angela Davis", "livro" => "Mulheres, raça e classe", "descricao" => "Uma obra fundamental para se entender as nuances das opressões. 'Angela Davis traz um potencial revolucionário, e ler sua obra é tarefa essencial para quem pensa um novo modelo de sociedade.' — Djamila Ribeiro"),
            array("nome" => " Kalynn Bayron ", "livro" => "Cinderela está morta ", "descricao" => "Cinderela está morta há duzentos anos, e o conto de fadas acabou. Em um reino onde as mulheres são vistas como objetos, uma menina vai contrariar tudo e a todos para poder ter a escolha de amar livremente e decidir o próprio destino."),
            array("nome" => " Mauricio de Souza", "livro" => "TURMA DA MÔNICA JOVEM ", "descricao" => "A premiada série animada da Turma da Mônica Jovem, exibida e coproduzida pelo Cartoon Network, sucesso de público e crítica, chega aos livros em novelizações de seus capítulos. Neste box você encontra os quatro livros da coleção!"),
        );

        // Exibir informações dos autores
        foreach ($autores as $autor) {
            echo "<div class='autor'>";
            echo "<h3><i class='fas fa-pen-nib'></i>{$autor['nome']}</h3>";
            echo "<p><strong><i class='fas fa-book'></i>Livro:</strong> {$autor['livro']}</p>";
            echo "<p><i class='fas fa-info-circle'></i>{$autor['descricao']}</p>";
            echo "</div>";
        }
        ?>

    </section>


    <footer>
        <p>&copy; <?php echo date("Y"); ?> Livraria Camarelo. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
