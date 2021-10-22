<?php
include_once "vendor/autoload.php";

$disciplinaDAO = new \App\Model\DisciplinaDAO();

$disciplina = new \App\Model\Disciplina("teste 3");
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

    <title>Configurações</title>
</head>

<body>
    <section class="container">
        <h2>Disciplina</h2>
        <button class="btn btn-success">
            <i class="bi bi-plus-lg"></i>
        </button>
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
                        <input type="text" name="nome" value="<?=$disciplina['nome']?>" required>
                        <button id="submit_button">teste</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php
}
?>
            </tbody>
        </table>
    </section>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#submit_button").hide();

        $('.required').on('keyup', function() {
            var showBtn = true;
            // Check all inputs
            $('.required').each(function() {
                showBtn = showBtn && ($(this).val() !== "");
            }); //Edited
            // Hide or show the button according to the boolean value
            $("#submit_button").toggle(showBtn);
        });
    });
    </script>
</body>

</html>