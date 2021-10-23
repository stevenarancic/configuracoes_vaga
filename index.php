<?php
include_once "vendor/autoload.php";

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
</head>

<body>
    <section class="container">
        <h2>Disciplina</h2>
        <button class="btn btn-primary" onclick="hideShowDisciplina()">
            <i class="bi bi-plus-lg"></i>
        </button>
        <div id="div-create-disciplina">
            <form action="App/Controller/CreateDisciplina.php" method="post">
                Nome:
                <input type="text" name="nome-create-disciplina">
                <button class="btn btn-success">
                    <i class="bi bi-check-lg"></i>
                </button>
            </form>
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
                        <form
                            action="App/Controller/UpdateDisciplina.php?id_disciplina=<?=$disciplina['id_disciplina']?>"
                            method="post" name="frm">
                            <input type="text" name="nome-update-disciplina" value="<?=$disciplina['nome']?>">
                            <button type="submit" class="btn btn-success" id="send">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="App/Controller/DeleteDisciplina.php?id_disciplina=<?=$disciplina['id_disciplina']?>"
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
        <h2>Atuação</h2>
        <button class="btn btn-primary" onclick="hideShowAtuacao()">
            <i class="bi bi-plus-lg"></i>
        </button>
        <div id="div-create-atuacao">
            <form action="App/Controller/CreateAtuacao.php" method="post">
                Nome:
                <input type="text" name="nome-create-atuacao">
                <button class="btn btn-success">
                    <i class="bi bi-check-lg"></i>
                </button>
            </form>
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
                        <form action="App/Controller/UpdateAtuacao.php?id_atuacao=<?=$atuacao['id_atuacao']?>"
                            method="post" name="frm">
                            <input type="text" name="nome-update-atuacao" value="<?=$atuacao['nome']?>">
                            <button type="submit" class="btn btn-success" id="send">
                                <i class="bi bi-check-lg"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="App/Controller/DeleteAtuacao.php?id_atuacao=<?=$atuacao['id_atuacao']?>"
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

    <script>
    function hideShowDisciplina() {
        var x = document.getElementById("div-create-disciplina");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function hideShowAtuacao() {
        var x = document.getElementById("div-create-atuacao");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>
</body>

</html>