<?php
require_once "../../vendor/autoload.php";

$atuacaoDAO = new \App\Model\AtuacaoDAO();
$atuacaoDAO->deleteAtuacao($_GET['id_atuacao']);

header('location: ../View/configuracoes_vaga.php');
