<?php
namespace Core;

use PDO;

class Conexao {
    private static $instancia;

    public static function getInstancia() {
        if (!isset(self::$instancia)) {
            self::$instancia = new PDO('mysql:host=localhost;dbname=feedback_db;charset=utf8', 'root', '');
            self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instancia;
    }
}
