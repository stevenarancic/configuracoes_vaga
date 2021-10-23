<?php
include_once "../../vendor/autoload.php";

$atuacaoDAO = new \App\Model\AtuacaoDAO();
$atuacaoDAO->deleteAtuacao($_GET['id-atuacao']);

header('location: ../../index.php');