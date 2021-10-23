<?php
namespace App\Model;

use PDO;

include_once "../../vendor/autoload.php";

class AtuacaoDAO
{
    public function createAtuacao(Atuacao $atuacao)
    {
        $sql = "INSERT INTO atuacao(nome) VALUES(:nome)";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':nome', $atuacao->getNome());
        $statement->execute();
    }

    public function readAtuacao()
    {
        $sql = "SELECT * FROM atuacao";

        $statement = Conexao::getInstance()->prepare($sql);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo "A consulta não retornou resultados :(";
        }
    }

    public function updateAtuacao(Atuacao $atuacao)
    {
        $sql = "UPDATE atuacao SET nome = :nome WHERE id_atuacao = :id_atuacao";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':id_atuacao', $atuacao->getIdAtuacao());
        $statement->bindValue(':nome', $atuacao->getNome());

        $statement->execute();

    }

    public function deleteAtuacao($id)
    {
        $sql = "DELETE FROM atuacao WHERE id_atuacao = :id_atuacao";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':id_atuacao', $id);

        $statement->execute();
    }
}