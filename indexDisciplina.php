<?php
require_once 'ControlaDisciplina.php';

$controlaDisciplina = new ControlaDisciplina();
$disciplina = $controlaDisciplina->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Disciplina</title>
    <link rel="stylesheet" href="estilos.css">
</head>
  
<body>
    <h2>Disciplina cadastradas</h2>

    <?php if (count($usuarios) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Local</th>
                    <th>Quantia de Alunos</th>
                    <th>Periodo</th>
                    <th>Observacao das Avaliacoes</th>
                    <th>Professor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($disciplina as $disciplina): ?>
                    <tr>
                        <td><?= $disciplina['cdDisciplina'] ?></td>
                        <td><?= $disciplina['nome'] ?></td>
                        <td><?= $disciplina['local'] ?></td>
                        <td><?= $disciplina['quantiaAlunos'] ?></td>
                        <td><?= $disciplina['periodo'] ?></td>
                        <td><?= $disciplina['observacaoAvaliacoes'] ?></td>
                        <td><?= $disciplina['professor'] ?></td>
                        <td>
                            <a class="button" href="edita.php?id=<?= $disciplina['cdDisciplina'] ?>">Editar</a>
                            <a class="button delete" href="exclui.php?id=<?= $disciplina['cdDisciplina'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum usuário cadastrado.</p>
    <?php endif; ?>
</body>
</html>
