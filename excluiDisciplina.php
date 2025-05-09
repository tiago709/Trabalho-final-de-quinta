<?php
include 'ControlaDisciplina.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaDisciplina = new ControlaDisciplina();
$controlaDisciplina->excluir($id);

header("Location: indexDisciplina.php");
exit;
