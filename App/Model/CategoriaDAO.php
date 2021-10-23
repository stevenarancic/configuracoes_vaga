<?php
namespace App\Model;

use PDO;

class CategoriaDAO
{
    public function createCategoria(Categoria $categoria)
    {
        $sql = "INSERT INTO categoria(nome, destaque) VALUES(:nome, :destaque)";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':nome', $categoria->getNome());
        $statement->bindValue(':destaque', $categoria->getDestaque());

        $statement->execute();
    }
    public function readCategoria()
    {
        $sql = "SELECT * FROM categoria";

        $statement = Conexao::getInstance()->prepare($sql);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo "A consulta não retornou resultados :(";
        }
    }

    public function updateCategoria(Categoria $categoria)
    {
        $sql = "UPDATE categoria SET nome = :nome, destaque = :destaque WHERE id_categoria = :id_categoria";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':id_categoria', $categoria->getIdCategoria());
        $statement->bindValue(':nome', $categoria->getNome());
        $statement->bindValue(':destaque', $categoria->getDestaque());

        $statement->execute();
    }

    public function deleteCategoria($id)
    {
        $sql = "DELETE FROM categoria WHERE id_categoria = :id_categoria";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':id_categoria', $id);

        $statement->execute();
    }
}