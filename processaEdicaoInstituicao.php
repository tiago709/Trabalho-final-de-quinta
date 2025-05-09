<?php
include 'Instituicao.php';
include 'ControlaInstituicao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $cdInstituicao = $_POST['cdInstituicao '];
    $cnpj = $_POST['cnpj'];
    $nomeInstituicao = $_POST['nomeInstituicao'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $instituicao = new Instituicaoa ($cnpj, $nomeInstituicao, $endereco, $email, $telefone );
    $instituicao->setId($cdInstituicao );
    $controlainstituicao = new ControlaInstituicao();

    $controlaInstituicao->atualizar($instituicao );

    header("Location: index.php");
    exit;
}
