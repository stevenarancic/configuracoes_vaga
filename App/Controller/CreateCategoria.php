<?php
require_once "../../vendor/autoload.php";

$categoria = new \App\Model\Categoria($_POST['nome_create_categoria'], $_POST['destaque_create_categoria']);
$categoriaDAO = new \App\Model\CategoriaDAO();

$categoriaDAO->createCategoria($categoria);
header('location: ../View/configuracoes_vaga.php');