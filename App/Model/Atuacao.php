<?php
namespace App\Model;

class Atuacao
{
    private $id_atuacao;
    protected $nome;

    public function __construct($nome)
    {
        $this->setNome($nome);
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
     * Get the value of id_atuacao
     */
    public function getIdAtuacao()
    {
        return $this->id_atuacao;
    }

    /**
     * Set the value of id_atuacao
     *
     * @return  self
     */
    public function setIdAtuacao($id_atuacao)
    {
        $this->id_atuacao = $id_atuacao;

        return $this;
    }
}