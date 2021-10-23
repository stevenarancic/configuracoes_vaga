<?php
require_once "../../vendor/autoload.php";

$atuacao = new \App\Model\Atuacao($_POST['nome-create-atuacao']);
$atuacaoDAO = new \App\Model\AtuacaoDAO();

$atuacaoDAO->createAtuacao($atuacao);

header('location: ../../index.php');