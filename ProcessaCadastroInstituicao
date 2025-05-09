<?php
include 'Instituicao.php';
include 'ControlaInstituicao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cnpj = $_POST['cnpj'];
    $nomeInstituicao = $_POST['nomeInstituicao'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $instituicao = new Instituicao($cnpj, $nomeInstituicao, $endereco, $email, $telefone);
    $controlaInstituicao = new ControlaInstituicao();

    $controlaInstituicao->salvar($instituicao);

    header("Location: CadastraInstituicao.html");
}
