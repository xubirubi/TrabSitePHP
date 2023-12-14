<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
       
        <style>
    body {
            font-family: 'Georgia', serif;
            background-color: #e0d2ad;
            margin: 0;
            padding: 0;
        }

    header, nav, section, footer {
        margin: 20px;
        padding: 20px;
        border-radius: 8px;
        background-color: rgba(64, 31, 6);
        color: #fff;
        padding: 30px;
        text-align: center;
    }

    h1, h2, h3, h4 {
        background-color: rgba(64, 31, 6);
        color: #fff;
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
    section ul {
        list-style-type: none;
        padding: 0;
    }

    section ul li {
        margin-bottom: 8px;
    }

    .about p {
        line-height: 1.5;
    }

    .team-member {
        border: 1px solid #ddd;
        padding: 10px;
        margin: 10px;
        border-radius: 8px;
        background-color: #e0d2ad;
        
    }

    footer {
            text-align: center;
            margin-top: 412px;
            padding: 10px;
            background-color: rgba(64, 31, 6);
            color: #fff;
        }
    </style>

</head>
<body>

    <header>
        <h1>Biblioteca Virtual</h1>
    </header>

    <nav>
    <a href="IndexC.php">Início</a>
        <a href="LivrosC.php">Livros</a>
        <a href="AutoresC.php">Autores</a>
        <a href="SobrenosC.php">Sobre Nós</a>
    </nav>

 

    <section class="about">
        <h2>Sobre Nós</h2>
        <p>Bem-vindo à Livraria Virtual Camarelo, onde exploramos o fascinante mundo dos livros e autores. Nosso objetivo é proporcionar uma experiência única de leitura online.</p>
        <p>Nossa equipe é composta por apaixonados por literatura, bibliotecários dedicados e entusiastas da tecnologia. Estamos empenhados em criar um ambiente acolhedor para os amantes da leitura.</p>

        <div class="team">
            <h3>Nossa Equipe</h3>
            <div class="team-member">
                <h4>Clara Falcão</h4>
                <p>Bibliotecário-chefe</p>
            </div>

            <div class="team-member">
                <h4>Elisa Pacheco</h4>
                <p>Especialista em Literatura</p>
            </div>

            <div class="team-member">
                <h4>Caio Vianna</h4>
                <p>Desenvolvedor Web</p>
            </div>
        </div>

        <p>Nossa missão é promover a educação, entretenimento e cultura por meio do acesso facilitado aos melhores livros. Visamos ser uma referência em bibliotecas, conectando leitores a histórias incríveis.</p>
        <p>Explore, descubra e embarque em jornadas literárias conosco!</p>
    </section>

    <footer>
        <p>&copy; 2023 Livraria Camarelo</p>
    </footer>

</body>
</html>