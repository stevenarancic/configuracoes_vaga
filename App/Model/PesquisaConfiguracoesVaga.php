<?php
require_once "../../vendor/autoload.php";

use App\Model\Conexao;

$sql = "SELECT * FROM " . $_GET['tabela'] . " WHERE nome LIKE '%" . $_POST['name'] . "%'";
$statement = Conexao::getInstance()->prepare($sql);
$statement->execute();

if ($statement->rowCount() > 0) {
    foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $categoria) {
        echo "<tr>
        <td>" . $categoria['id_' . $_GET['tabela'] . ''] . "</td>
        <td>" . $categoria['nome'] . "</td>
      </tr>";
    }
} else {
    echo "<tr><td>0 statement's found</td></tr>";
}

// printar isso no categoria
// <td>" . $categoria['destaque'] . "</td>