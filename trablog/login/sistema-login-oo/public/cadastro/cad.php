<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar</title>
</head>
<body>
    <form action="process_login.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Nome:</label>
        <input type="text" name="nome_c" required>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>