<?php
namespace App\Model;

use PDO;

class DisciplinaDAO
{
    public function createDisciplina(Disciplina $disciplina)
    {
        $sql = "INSERT INTO disciplina(nome) VALUES(:nome)";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':nome', $disciplina->getNome());
        $statement->execute();
    }

    public function readDisciplina()
    {
        $sql = "SELECT * FROM disciplina";

        $statement = Conexao::getInstance()->prepare($sql);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo "A consulta não retornou resultados :(";
        }
    }

    public function updateDisciplina(Disciplina $disciplina)
    {
        $sql = "UPDATE disciplina SET nome = :nome WHERE id = :id";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':id', $disciplina->getId());
        $statement->bindValue(':nome', $disciplina->getNome());

        $statement->execute();
    }

    public function deleteDisciplina($id)
    {
        $sql = "DELETE FROM disciplina WHERE id_disciplina = :id";

        $statement = Conexao::getInstance()->prepare($sql);

        $statement->bindValue(':id', $id);

        $statement->execute();
    }
}