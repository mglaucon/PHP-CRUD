<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <a href="logout.php">Sair</a>
    <?php 
        include('valid_login.php');
        include('config.php');
        $sql = "SELECT id,nome,email,data_nasc FROM usuarios";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;
    ?>
    <table>
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data de Nascimento</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php 
                if($qtd > 0):
                    while($row = $res->fetch_object()):
            ?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->nome?></td>
                <td><?=$row->email?></td>
                <td><?=$row->data_nasc?></td>
                <td><a href="editar.php?id=<?=$row->id?>"><button>Editar</button></a> <button onclick="if(confirm('Deseja excluir o usuário?')){location.href='excluir.php?id=<?=$row->id?>'}else{false}">Excluir</button></a></td>
            </tr>
            <?php 
                    endwhile;
                endif;
            ?>
        </tbody>
    </table>

    <button onclick="location.href='cadastrar.php'">Cadastrar</button>
</body>
</html>