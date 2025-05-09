<?php
include 'Disciplina.php';
include 'ControlaDisciplina.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $local = $_POST['local'];
    $quantidadeAlunos = $_POST['quantidadeAlunos'];
    $periodo = $_POST['periodo'];
    $observacaoAvaliacoes = $_POST['observacaoAvaliacoes'];
    $professor = $_POST['professor '];

    $disciplina = new Disciplina($nome, $local, $quantidadeAluno, $periodo, $observacaoAvaliacoes, $professor);
    $controlaDisciplina = new ControlaDisciplina();

    $controlaDisciplina->salvar($disciplina);

    header("Location: CadastraDisciplina.html");
}
