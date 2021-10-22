<?php
include_once "../../vendor/autoload.php";

$disciplina = new \App\Model\Disciplina($_POST['nome-create-disciplina']);
$disciplinaDAO = new \App\Model\DisciplinaDAO();

$disciplinaDAO->createDisciplina($disciplina);

header('location: ../../index.php');