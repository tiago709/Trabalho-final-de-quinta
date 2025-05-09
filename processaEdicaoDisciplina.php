<?php
include 'Disciplina.php';
include 'ControlaDisciplina.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $cdDisciplina = $_POST['cdDisciplina '];
    $nome = $_POST['nome'];
    $local = $_POST['local'];
    $quantiaAlunos = $_POST['quantiaAlunos'];
    $periodo = $_POST['periodo'];
    $observacaoAvaliacao = $_POST['observacaoAvaliacao'];
    $professor = $_POST['professor'];

    $disciplina = new Disciplina ($nome, $local, $quantiaAlunos, $periodo, $observacaoAvaliacao, $professor);
    $disciplina->setId($cdDisciplina);
    $controlaDisciplina = new ControlaDisciplina();

    $controlaDisciplina->atualizar($disciplina);

    header("Location: index.php");
    exit;
}
