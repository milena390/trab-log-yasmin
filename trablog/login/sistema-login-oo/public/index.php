<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-image: url('foto2.jpg'); /* Substitua pelo caminho da sua imagem */
            background-size: cover;
            background-position: center;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .container {
            text-align: center;
            background: rgba(245, 251, 255, 0.9); /* leve transparência para ver o fundo */
            padding: 30px;
            border-radius: 09px;
            box-shadow: 0 0 15px rgba(0,0,0,0.02);
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px;
            background-color: #00a2ff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .btn:hover {
            background-color: #007acc;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bem-vindo ao Sistema</h1>
    <a href="login.php" class="btn">Login</a>
    <a href="cadastro.php" class="btn">Cadastrar</a>
</div>

</body>
</html>

