<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto A3 - Programação e Modelagem</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://lncimg.lance.com.br/cdn-cgi/image/width=3840,height=undefined,quality=75/uploads/2023/05/342195048_228740529833423_1861954937144134235_n-aspect-ratio-512-320-3.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        center {
            margin-top: 100px;
        }

        h1 {
            color: white;
        }

        form {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        a {
            color: #999;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <center>
        <h1>Login</h1>
        <form id="form-login" action="logado.php" method="POST">
            Login: <input type="text" name="login" required><br>
            Senha: <input type="password" name="senha" required><br><br>
            <input type="submit" name="entrar" value="Entrar">
            <p>
                Não tem conta? Crie uma agora. <br><br>
                <a href="cadastro.php">Criar Conta</a><br>
                <a href="alterarsenha2.php">Esqueceu a senha?</a><br>
            </p>
        </form>
    </center>
</body>
</html>







    
