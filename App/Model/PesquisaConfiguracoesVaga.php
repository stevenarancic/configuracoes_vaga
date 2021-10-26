<?php
require_once "../../vendor/autoload.php";

use App\Model\Conexao;

$sql = "SELECT * FROM " . $_GET['tabela'] . " WHERE nome LIKE '%" . $_POST['name'] . "%'";
$statement = Conexao::getInstance()->prepare($sql);
$statement->execute();

if ($statement->rowCount() > 0) {
    foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $item) {
        $select = "";
        if (isset($_GET['coluna_extra'])) {
            switch ($item['destaque']) {
                case 'Sim':
                    $select = "
                    <select class=\"form-select\ col-2\" aria-label=\"Default select example\" name=\"destaque_update_categoria\">
                        <option selected>" . $item['destaque'] . "</option>
                        <option value=\"Não\">Não</option>
                    </select>";
                    break;
                case 'Não':
                    $select = "
                    <select class=\"form-select\ col-2\" aria-label=\"Default select example\" name=\"destaque_update_categoria\">
                        <option selected>" . $item['destaque'] . "</option>
                        <option value=\"Sim\">Sim</option>
                    </select>";
                    break;
            }
        }
        ;
        echo "
        <tr class=\"row\">
            <td class=\"col-2\">
                " . $item['id_' . $_GET['tabela'] . ''] . "
            </td>
        <td class=\"col-10\">
            <form class=\"d-flex\" action=\"../Controller/Update" . $_GET['tabela'] . ".php?id_" . $_GET['tabela'] . "=" . $item['id_' . $_GET['tabela'] . ''] . "\"method=\"post\" name=\"frm\">
                <input type=\"text\" name=\"nome_update_" . $_GET['tabela'] . "\" value=\"" . $item['nome'] . "\" class=\"form-control\">
                $select
                <button type=\"submit\" class=\"btn btn-success ms-3\" id=\"send\">
                    <i class=\"bi bi-check-lg\"></i>
                </button>
                <a href=\"../Controller/Delete" . $_GET['tabela'] . ".php?id_" . $_GET['tabela'] . "=" . $item['id_' . $_GET['tabela'] . ''] . "\"class=\"btn btn-danger ms-3\">
                    <i class=\"bi bi-trash\"></i>
                </a>
            </form>
        </td>
        </tr>
        ";
    }
} else {
    echo "
    <tr>
        <td>Nada encontrado :(</td>
    </tr>
    ";
}

// printar isso no item
// <td>" . $item['destaque'] . "</td>