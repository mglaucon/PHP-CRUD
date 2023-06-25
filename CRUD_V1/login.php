<?php 
session_start();
include('config.php');

$sql = "SELECT * FROM usuarios WHERE nome='Mario' AND senha=MD5('12345')"

if (empty($_POST['usuario']) || empty($_POST['senha'])):
    $_SESSION['login_validator'] = 'Usuario ou senha inválidos!';
    header("Location: index.php");
else:
    $_SESSION['login'] = $_POST['usuario'];
    header("Location: painel.php");
endif;