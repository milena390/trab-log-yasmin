<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #9892ed;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            background: rgb(4, 134, 181);
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #dbd8f4;
            border-radius: 4px;
        }
        button {
            padding: 10px 16px;
            background-color: #ff3d91;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #d90074;
        }
    </style>
</head>
<body>
    <form action="process_login.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>