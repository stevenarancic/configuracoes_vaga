<?php
require_once "../../vendor/autoload.php";

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
    <section class="container">
        <div class="d-flex flex-row">
            <div class="col">
                <h2>Disciplina</h2>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end">
                    <div id="div_create_disciplina" class="me-3">
                        <form action="../Controller/CreateDisciplina.php" method="post" class="d-flex flex-row">
                            Nome:
                            <input type="text" name="nome_create_disciplina" class="form-control">
                            <button class="btn btn-success">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </div>
                    <button class="btn btn-primary" onclick="hideShowDisciplina()">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                <?php
foreach ($disciplinaDAO->readDisciplina() as $disciplina) {?>
                <tr>
                    <td>
                        <?=$disciplina['id_disciplina']?>
                    </td>
                    <td>
                        <form class="d-flex"
                            action="../Controller/UpdateDisciplina.php?id_disciplina=<?=$disciplina['id_disciplina']?>"
                            method="post" name="frm">
                            <input type="text" name="nome_update_disciplina" value="<?=$disciplina['nome']?>"
                                class="form-control">
                            <button type="submit" class="btn btn-success ms-3" id="send">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="../Controller/DeleteDisciplina.php?id_disciplina=<?=$disciplina['id_disciplina']?>"
                            class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
}
?>
            </tbody>
        </table>
    </section>

    <!-- Atuacao -->
    <section class="container">
        <div class="d-flex flex-row">
            <div class="col">
                <h2>Atuação</h2>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end">
                    <div id="div_create_atuacao" class="me-3">
                        <form action="../Controller/CreateAtuacao.php" method="post" class="d-flex flex-row">
                            Nome:
                            <input type="text" name="nome_create_atuacao" class="form-control">
                            <button class="btn btn-success">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </div>
                    <button class="btn btn-primary" onclick="hideShowAtuacao()">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                <?php
foreach ($atuacaoDAO->readAtuacao() as $atuacao) {?>
                <tr>
                    <td>
                        <?=$atuacao['id_atuacao']?>
                    </td>
                    <td>
                        <form class="d-flex"
                            action="../Controller/UpdateAtuacao.php?id_atuacao=<?=$atuacao['id_atuacao']?>"
                            method="post" name="frm">
                            <input type="text" name="nome_update_atuacao" value="<?=$atuacao['nome']?>"
                                class="form-control">
                            <button type="submit" class="btn btn-success ms-3" id="send">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="../Controller/DeleteAtuacao.php?id_atuacao=<?=$atuacao['id_atuacao']?>"
                            class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
}
?>
            </tbody>
        </table>
    </section>

    <!-- Categoria -->
    <section class="container">
        <div class="d-flex flex-row">
            <div class="col">
                <h2>Categoria</h2>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end">
                    <div id="div_create_categoria" class="me-3">
                        <form action="../Controller/CreateCategoria.php" method="post" class="d-flex flex-row">
                            Nome:
                            <input type="text" name="nome_create_categoria" class="form-control">
                            Destaque:
                            <input type="text" name="destaque_create_categoria" class="form-control">
                            <button class="btn btn-success">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </div>
                    <button class="btn btn-primary" onclick="hideShowCategoria()">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php
foreach ($categoriaDAO->readCategoria() as $categoria) {?>
                <tr>
                    <td>
                        <?=$categoria['id_categoria']?>
                    </td>
                    <form class="d-flex"
                        action="../Controller/UpdateCategoria.php?id_categoria=<?=$categoria['id_categoria']?>"
                        method="post" name="frm">
                        <td>
                            <input type="text" name="nome_update_categoria" value="<?=$categoria['nome']?>"
                                class="form-control">
                        </td>
                        <td class="d-flex flex-row">
                            <input type="text" name="destaque_update_categoria" value="<?=$categoria['destaque']?>"
                                class="form-control">
                            <button type="submit" class="btn btn-success ms-3" id="send">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </td>
                    </form>
                    <td>
                        <a href="../Controller/DeleteCategoria.php?id_categoria=<?=$categoria['id_categoria']?>"
                            class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
}
?>
            </tbody>
        </table>
    </section>
    <script src="../../assets/js/hideShowElements.js"></script>
</body>

</html>