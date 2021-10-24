<?php
require_once "../../vendor/autoload.php";

$disciplina = new \App\Model\Disciplina($_POST['nome_create_disciplina']);
$disciplinaDAO = new \App\Model\DisciplinaDAO();

$disciplinaDAO->createDisciplina($disciplina);

header('location: ../View/configuracoes_vaga.php');
