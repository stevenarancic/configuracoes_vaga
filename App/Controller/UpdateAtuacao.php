<?php
require_once "../../vendor/autoload.php";

$atuacao = new \App\Model\Atuacao($_POST['nome_update_atuacao']);
$atuacao->setIdAtuacao($_GET['id_atuacao']);

$atuacaoDAO = new \App\Model\AtuacaoDAO();
$atuacaoDAO->updateAtuacao($atuacao);

header('location: ../../index.php');