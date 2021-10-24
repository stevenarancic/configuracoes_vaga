<?php
include_once "vendor/autoload.php";

$disciplinaDAO = new \App\Model\DisciplinaDAO();
$atuacaoDAO = new \App\Model\AtuacaoDAO();
$categoriaDAO = new \App\Model\CategoriaDAO();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <title>Configurações</title>
</head>

<body>
    <header class="container">
        <a href="App/View/configuracoes_vaga.php" class="btn btn-success w-100">
            Configurações
        </a>
    </header>
</body>

</html>