<?php
require_once "../../vendor/autoload.php";

$disciplina = new \App\Model\Disciplina($_POST['nome-update-disciplina']);
$disciplina->setId($_GET['id_disciplina']);

$disciplinaDAO = new \App\Model\DisciplinaDAO();
$disciplinaDAO->updateDisciplina($disciplina);

header('location: ../../index.php');