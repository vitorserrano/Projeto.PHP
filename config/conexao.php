<?php


class Db
{
    protected static $conexao = null;
    public static function connection()
    {
        try {
            if (self::$conexao === null) {
                self::$conexao = new PDO(
                    "mysql:host=localhost;dbname=projeto;",
                    "root",
                    "",
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") //Se for adicionado manualmente pelo bd, e estiver sem este array, caracteres especiais irão sair com pnto de interrogação
                );
            }
            return self::$conexao;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
