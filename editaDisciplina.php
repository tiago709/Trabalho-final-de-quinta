<?php
include 'ControlaDisciplina.php';

if (!isset($_GET['id'])) {
    die('ID do Disciplina não informado.');
}

$controlaDisciplina = new ControlaDisciplina();
$disciplina = $controlaDisciplina->buscarPorId($_GET['cdDisciplina']);

if (!$disciplina) {
    die('Disciplina não encontrado.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Disciplina</title>
</head>
<body>
    <h2>Editar Disciplina</h2>
    <form action="processaEdicao.php" method="post">
        <input type="hidden" name="cdDiscciplina" value="<?= $disciplina['cdDiscciplina'] ?>">
        <label>Nome completo</label>
        <input type="text" name="nome" value="<?= $disciplina['nome'] ?>">
        <label>Local</label>
        <input type="text" name="local" value="<?= $disciplina['local'] ?>">
        <label>quantia de alunos</label>
        <input type="text" name="quantiaAlunos" value="<?= $disciplina['quantiaAlunos'] ?>" required>
        <label>Periodo</label>
        <input type="text" name="periodo" value="<?= $disciplina['periodo'] ?>" required>
        <label>Obsevacao Avaliacao</label>
        <input type="text" name="observacaoAvaliacoes" value="<?= $disciplina['observacaoAvaliacoes'] ?>" required>
        <label>Professor</label>
        <input type="text" name="professor" value="<?= $disciplina['professo'] ?>" required>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
