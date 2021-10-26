<?php

require_once "../../vendor/autoload.php";

$disciplinaDAO = new \App\Model\DisciplinaDAO();
$atuacaoDAO = new \App\Model\AtuacaoDAO();
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
    <!-- Disciplina -->
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
                        <div class="">
                            <h1 class="text-start">Disciplina</h1>
                        </div>
                        <div class="w-100 me-3 ms-3 d-flex align-items-center">
                            <input type="text" class="form-control" id="search" placeholder="Pesquise por um registro">
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-end">
                                <div id="div_create_disciplina" class="me-3">
                                    <form action="../Controller/CreateDisciplina.php" method="post"
                                        class="d-flex flex-row">
                                        Nome:
                                        <input type="text" name="nome_create_disciplina" class="form-control ms-2"
                                            style="width: 200px;">
                                        <button class="btn btn-success ms-3">
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
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr class="row">
                                    <td class="col-2">
                                        ID
                                    </td>
                                    <td class="col-10 text-start">
                                        Nome
                                    </td>
                                </tr>
                            </thead>
                            <tbody id="output">

                            </tbody>
                        </table>
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $("#search").keypress(function() {
                            $.ajax({
                                type: 'POST',
                                url: '../Model/PesquisaConfiguracoesVaga.php?tabela=disciplina',
                                data: {
                                    name: $("#search").val(),
                                },
                                success: function(data) {
                                    $("#output").html(data);
                                }
                            });
                        });
                    });
                    </script>
                    <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        $.ajax({
                            type: 'POST',
                            url: '../Model/PesquisaConfiguracoesVaga.php?tabela=disciplina',
                            data: {
                                name: $("#search").val(),
                            },
                            success: function(data) {
                                $("#output").html(data);
                            }
                        });
                    });
                    </script>
                </section>


            </div>
            <div class="tabPanel">
                <!-- Atuacao -->
                <section class="container">
                    <div class="d-flex flex-row">
                        <div class="">
                            <h1 class="text-start">Atuação</h1>
                        </div>
                        <div class="w-100 ms-3 me-3 d-flex align-items-center">
                            <input type="text" class="form-control" id="search_atuacao"
                                placeholder="Pesquise por um registro">
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-end">
                                <div id="div_create_atuacao" class="me-3">
                                    <form action="../Controller/CreateAtuacao.php" method="post"
                                        class="d-flex flex-row">
                                        Nome:
                                        <input type="text" name="nome_create_atuacao" class="form-control ms-2"
                                            style="width: 200px;">
                                        <button class="btn btn-success ms-3">
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
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr class="row">
                                    <td class="col-2">
                                        ID
                                    </td>
                                    <td class="col-10 text-start">
                                        Nome
                                    </td>
                                </tr>
                            </thead>
                            <tbody id="output_atuacao">

                            </tbody>
                        </table>
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $("#search_atuacao").keypress(function() {
                            $.ajax({
                                type: 'POST',
                                url: '../Model/PesquisaConfiguracoesVaga.php?tabela=atuacao',
                                data: {
                                    name: $("#search_atuacao").val(),
                                },
                                success: function(data) {
                                    $("#output_atuacao").html(data);
                                }
                            });
                        });
                    });
                    </script>
                    <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        $.ajax({
                            type: 'POST',
                            url: '../Model/PesquisaConfiguracoesVaga.php?tabela=atuacao',
                            data: {
                                name: $("#search_atuacao").val(),
                            },
                            success: function(data) {
                                $("#output_atuacao").html(data);
                            }
                        });
                    });
                    </script>
                </section>
            </div>
            <div class="tabPanel">
                <!-- Categoria -->
                <section class="container">
                    <div class="d-flex flex-row">
                        <div>
                            <h1 class="text-start">Categoria</h1>
                        </div>
                        <div class="w-100 ms-3 me-3 d-flex align-items-center">
                            <input type="text" class="form-control" id="search_categoria"
                                placeholder="Pesquise por um registro">
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-end">
                                <div id="div_create_categoria" class="me-3">
                                    <form action="../Controller/CreateCategoria.php" method="post"
                                        class="d-flex flex-row">
                                        Nome:
                                        <input type="text" name="nome_create_categoria" class="form-control ms-2 me-3"
                                            style="width: 200px;">
                                        Destaque:
                                        <select class="form-select ms-2" name="destaque_create_categoria"
                                            style="width: 100px;">
                                            <option selected value="Não">
                                                Não
                                            </option>
                                            <option value="Sim">
                                                Sim
                                            </option>
                                        </select>
                                        <button class="btn btn-success ms-3">
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
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr class="row">
                                    <td class="col-2">
                                        ID
                                    </td>
                                    <td class="col-8 text-start">
                                        Nome
                                    </td>
                                    <td class="col-2 text-start">
                                        Destaque
                                    </td>
                                </tr>
                            </thead>
                            <tbody id="output_categoria">

                            </tbody>
                        </table>
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $("#search_categoria").keypress(function() {
                            $.ajax({
                                type: 'POST',
                                url: '../Model/PesquisaConfiguracoesVaga.php?tabela=categoria&coluna_extra=destaque',
                                data: {
                                    name: $("#search_categoria").val(),
                                },
                                success: function(data) {
                                    $("#output_categoria").html(data);
                                }
                            });
                        });
                    });
                    </script>
                    <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        $.ajax({
                            type: 'POST',
                            url: '../Model/PesquisaConfiguracoesVaga.php?tabela=categoria&coluna_extra=destaque',
                            data: {
                                name: $("#search_categoria").val(),
                            },
                            success: function(data) {
                                $("#output_categoria").html(data);
                            }
                        });
                    });
                    </script>
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