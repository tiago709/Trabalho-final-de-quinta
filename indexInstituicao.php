<?php
require_once 'ControlaDisciplina.php';

$controlaInstituicao = new ControlaInstituicao();
$instituicao = $controlaInstituicao->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Instituicao</title>
</head>
  
<body>
    <h2>Instituicoes cadastradas</h2>

    <?php if (count($usuarios) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CNPJ</th>
                    <th>Nome da instituicao</th>
                    <th>Endereco</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instituicao as $instituicao): ?>
                    <tr>
                        <td><?= $instituicao['cdInstituicao'] ?></td>
                        <td><?= $instituicao['cnpj'] ?></td>
                        <td><?= $instituicao['nomeInstituicao'] ?></td>
                        <td><?= $instituicao['endereco'] ?></td>
                        <td><?= $instituicao['email'] ?></td>
                        <td><?= $instituicao['telefone'] ?></td>
                        <td>
                            <a class="button" href="edita.php?id=<?= $instituica['cdInstituica'] ?>">Editar</a>
                            <a class="button delete" href="exclui.php?id=<?= $instituica['cdInstituica'] ?>">Excluir</a>
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
