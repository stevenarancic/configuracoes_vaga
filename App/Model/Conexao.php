<?php
namespace App\Model;

use PDO;
use PDOException;

class Conexao
{
    private static $instance;

    public static function getInstance()
    {
        try {
            if (!isset(self::$instance)) {
                $dsn = "mysql:host=localhost;dbname=bemfacil;charset=utf8";
                $user = "root";
                $pass = "";

                self::$instance = new PDO($dsn, $user, $pass);
            }
            return self::$instance;
        } catch (PDOException $e) {
            return "Erro ao tentar se conectar com o banco de dados! <br> Erro: " . $e->getMessage();
        }
    }
}