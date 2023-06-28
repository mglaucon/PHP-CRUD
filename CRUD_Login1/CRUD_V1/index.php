<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <main>
        <div class="form">
            <form action="login.php" method="post">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
                <?php 
                    if (isset($_SESSION['login_validator'])) {
                        echo $_SESSION['login_validator'];
                        unset($_SESSION['login_validator']);
                    }
                ?>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </main>
</body>
</html>