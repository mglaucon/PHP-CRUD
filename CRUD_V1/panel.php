<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <style>
        table{
            width: 80vw;
            text-align: center;
            margin: auto;
            border-collapse: collapse;
            border: 1px solid lightgray;
        }
        th{
            border: 1px solid white;
        }
        td{
            border: 1px solid lightgray;
            padding: 5px 15px;
        }
        thead{
            background-color: lightgray;
        }
        table > tbody > tr:nth-child(1n):hover{
            background-color: lightgray;
            
        }
    </style>
</head>
<body>
    <?php 
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
                <td><a href="editar.php?id=<?=$row->id?>"><button>Editar</button></a> <a href="excluir.php?id=<?=$row->id?>"><button>Excluir</button></a></td>
            </tr>
            <?php 
                    endwhile;
                endif;
            ?>
        </tbody>
    </table>
</body>
</html>