<?php
require_once "../../vendor/autoload.php";

$categoriaDAO = new \App\Model\CategoriaDAO();
$categoriaDAO->deleteCategoria($_GET['id_categoria']);

header('location: ../View/configuracoes_vaga.php');
