<?php
require_once "../../vendor/autoload.php";

$categoria = new \App\Model\Categoria($_POST['nome-create-categoria'], $_POST['destaque-create-categoria']);
$categoriaDAO = new \App\Model\CategoriaDAO();

$categoriaDAO->createCategoria($categoria);
header('location: ../../index.php');