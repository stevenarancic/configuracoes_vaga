<?php
namespace App\Model;

class Categoria
{
    private $idCategoria;
    private $nome;
    private $destaque;

    public function __construct($nome, $destaque)
    {
        $this->setNome($nome);
        $this->setDestaque($destaque);
    }

    /**
     * Get the value of idCategoria
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @return  self
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of destaque
     */
    public function getDestaque()
    {
        return $this->destaque;
    }

    /**
     * Set the value of destaque
     *
     * @return  self
     */
    public function setDestaque($destaque)
    {
        $this->destaque = $destaque;

        return $this;
    }
}