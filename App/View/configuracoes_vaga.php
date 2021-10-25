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

    <style>
    .tabContainer .buttonContainer {
        height: 15%;
    }

    .tabContainer .buttonContainer button {
        width: 33%;
        height: 100%;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 10px;
        font-family: sans-serif;
        font-size: 18px;
        background-color: #eee;
    }

    .tabContainer .buttonContainer button:hover {
        background-color: #d7d4d4;
    }

    .tabContainer .tabPanel {
        height: 85%;
        background-color: gray;
        color: black;
        text-align: center;
        padding-top: 105px;
        box-sizing: border-box;
        font-family: sans-serif;
        font-size: 22px;
        display: none;
    }
    </style>
</head>

<body>
    <section class="container">
        <div class="tabContainer">
            <div class="buttonContainer">
                <button onclick="showPanel(0,'#fff')">Disciplina</button>
                <button onclick="showPanel(1,'#fff')">Atuação</button>
                <button onclick="showPanel(2,'#fff')">Categoria</button>
            </div>
            <div class="tabPanel">
                <section class="container">
                    <div class="d-flex flex-row">
                        <div class="col">
                            <h1 class="text-start">Disciplina</h1>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-end">
                                <div id="div_create_disciplina" class="me-3">
                                    <form action="../Controller/CreateDisciplina.php" method="post"
                                        class="d-flex flex-row">
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
                                        <input type="text" name="nome_update_disciplina"
                                            value="<?=$disciplina['nome']?>" class="form-control">
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
            </div>
            <div class="tabPanel">
                <!-- Atuacao -->
                <section class="container">
                    <div class="d-flex flex-row">
                        <div class="col">
                            <h1 class="text-start">Atuação</h1>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-end">
                                <div id="div_create_atuacao" class="me-3">
                                    <form action="../Controller/CreateAtuacao.php" method="post"
                                        class="d-flex flex-row">
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
            </div>
            <div class="tabPanel">

                <!-- Categoria -->
                <section class="container">
                    <div class="d-flex flex-row">
                        <div class="col">
                            <h1 class="text-start">Categoria</h1>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-end">
                                <div id="div_create_categoria" class="me-3">
                                    <form action="../Controller/CreateCategoria.php" method="post"
                                        class="d-flex flex-row">
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
                                        <input type="text" name="destaque_update_categoria"
                                            value="<?=$categoria['destaque']?>" class="form-control">
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
            </div>
        </div>
    </section>
    <script src="../../assets/js/hideShowElements.js"></script>
    <script>
    var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
    var tabPanels = document.querySelectorAll(".tabContainer  .tabPanel");

    function showPanel(panelIndex, colorCode) {
        tabButtons.forEach(function(node) {
            node.style.backgroundColor = "";
            node.style.color = "";
        });
        tabButtons[panelIndex].style.backgroundColor = colorCode;
        tabButtons[panelIndex].style.color = "black";
        tabPanels.forEach(function(node) {
            node.style.display = "none";
        });
        tabPanels[panelIndex].style.display = "block";
        tabPanels[panelIndex].style.backgroundColor = colorCode;
    }
    showPanel(0, '#fff');
    </script>
</body>

</html>