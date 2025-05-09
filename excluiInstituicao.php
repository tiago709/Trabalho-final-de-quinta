<?php
include 'ControlaInstituicao.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaInstituicao = new ControlaInstituicao();
$controlaInstituicao->excluir($id);

header("Location: indexInstituicao.php");
exit;
