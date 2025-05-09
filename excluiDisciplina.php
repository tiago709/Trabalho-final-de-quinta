<?php
include 'ControlaDisciplina.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaDisciplin = new ControlaDisciplin();
$controlaDisciplin->excluir($id);

header("Location: index.php");
exit;
