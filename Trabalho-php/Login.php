<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #c7b89d;
            color: #3a3a3a;
            position: relative;
        }
        .top-section {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
            box-sizing: border-box;
            z-index: 1;
        }
        .forest-icon {
            font-size: 40px;
            color: #8c7853;
        }
        /* Símbolos no topo */
        .left-trees {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }
        .right-trees {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        /* Formulário de login */
        .login-form {
            background-color: #e0d7cc;
            padding: 20px;
            margin: 100px auto 20px;
            width: 60%;
            border: 2px solid #8c7853;
            border-radius: 8px;
            position: relative;
            z-index: 0;
        }
        h2, h3 {
            text-align: center;
            color: #8c7853;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #594e42;
        }
        input[type="text"], input[type="password"] {
            padding: 8px;
            margin: 5px 0 15px;
            width: calc(100% - 20px);
            border: 1px solid #8c7853;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #8c7853;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #594e42;
        }
    </style>
</head>
<body>
    <div class="top-section">
        <div class="left-trees">
            <div class="forest-icon">&#127793;</div>
            <div class="forest-icon">&#127794;</div>
            <div class="forest-icon">&#127795;</div>
            <div class="forest-icon">&#127793;</div>
        </div>
        <div class="right-trees">
            <div class="forest-icon">&#127793;</div>
            <div class="forest-icon">&#127794;</div>
            <div class="forest-icon">&#127795;</div>
            <div class="forest-icon">&#127793;</div>
        </div>
    </div>
    <div class="login-form">
        <h2>Seja muito bem-vindo à nossa biblioteca</h2>
        <h3>Login</h3>
        <form action="LoginConfig.php" method="POST">
            <label for="nome">Nome:</label>
            <input id="nome" type="text" name="nome">

            <label for="senha">Senha:</label>
            <input id="senha" type="password" name="senha">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
