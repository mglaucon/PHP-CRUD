<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        .container{
            border: 1px solid hsla(0, 0%, 20%, 0.5);
            box-shadow:
            2.8px 2.8px 2.2px rgba(0, 0, 0, 0.02),
            6.7px 6.7px 5.3px rgba(0, 0, 0, 0.028),
            12.5px 12.5px 10px rgba(0, 0, 0, 0.035),
            22.3px 22.3px 17.9px rgba(0, 0, 0, 0.042),
            41.8px 41.8px 33.4px rgba(0, 0, 0, 0.05),
            100px 100px 80px rgba(0, 0, 0, 0.07);
            border-radius: 10px;
            width: 50vw;
            padding: 20px;
            text-align: center;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        label{
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php 
    if (isset($_GET['cadastrar'])) {
        include('config.php');
        $sql = "INSERT INTO usuarios(nome, email, senha, data_nasc) 
        VALUES('".$_POST['nome']."', '".$_POST['email']."', MD5('".$_POST['senha']."'), '".$_POST['data_nasc']."')";
        $res = $conn->query($sql);
        header('Location: panel.php');
    }
    ?>
    <form class="container" action="<?=$_SERVER['PHP_SELF']?>?cadastrar" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" required>
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="data_nasc">
        <input type="submit" value="Cadastrar">
    </form>

    
</body>
</html>