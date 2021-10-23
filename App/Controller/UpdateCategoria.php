<?php
require_once "../../vendor/autoload.php";

$categoria = new \App\Model\Categoria($_POST['nome_update_categoria'], $_POST['destaque_update_categoria']);
$categoria->setIdCategoria($_GET['id_categoria']);

$categoriaDAO = new \App\Model\CategoriaDAO();
$categoriaDAO->updateCategoria($categoria);

header('location: ../../index.php');