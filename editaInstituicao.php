<?php
include 'ControlaInstituicao.php';

if (!isset($_GET['id'])) {
    die('ID do Instituicao não informado.');
}

$controlaInstituicao = new ControlaInstituicao();
$instituicao = $controlaInstituicao->buscarPorId($_GET['cdInstituicao']);

if (!$instituicao) {
    die('Instituicao não encontrado.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Instituicao</title>
</head>
<body>
    <h2>Editar Instituicao</h2>
    <form action="processaEdicao.php" method="post">
        <input type="hidden" name="cdInstituicao" value="<?= $instituicao['cdInstituicao'] ?>">
        <label>CNPJ</label>
        <input type="text" name="cnpj" value="<?= $instituicao['cnpj'] ?>">
        <label>Nome da Instituicao</label>
        <input type="text" name="nomeInstituicao" value="<?= $instituicao['nomeInstituicao'] ?>">
        <label>Endereço</label>
        <input type="text" name="endereco" value="<?= $instituicao['endereco'] ?>" required>
        <label>E-mail</label>
        <input type="email" name="email" value="<?= $instituicao['email'] ?>" required>
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?= $instituicao['telefone'] ?>" required>


        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
