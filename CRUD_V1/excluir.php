<?php 

include('config.php');

$sql = "DELETE FROM usuarios WHERE id=".$_GET['id'];
$res = $conn->query($sql);
header('Location: panel.php');