<?php
require_once "../../vendor/autoload.php";

$disciplinaDAO = new \App\Model\DisciplinaDAO();
$disciplinaDAO->deleteDisciplina($_GET['id_disciplina']);

header('location: ../View/configuracoes_vaga.php');
