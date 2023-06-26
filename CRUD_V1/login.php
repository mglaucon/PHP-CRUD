<?php 
session_start();
include('config.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$sql = "SELECT nome,senha FROM usuarios WHERE nome='".$usuario."' AND senha=MD5('".$senha."')";

$res = $conn->query($sql);
$row = $res->fetch_object();

if (!isset($row->nome) || !isset($row->senha)):
    $_SESSION['login_validator'] = 'Usuario ou senha inválidos!';
    header("Location: index.php");
else:
    $_SESSION['login'] = $_POST['usuario'];
    header("Location: panel.php");
endif;