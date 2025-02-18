<?php

namespace Migue\Timetrack\Database;

use Migue\Timetrack\Config\DbParameters;

class Conn{
    public static function connect() {
        try {
            $conn = new \PDO('mysql:host=' . DbParameters::$DB_HOST . ';port=' . DbParameters::$DB_PORT . ';dbname=' . DbParameters::$DB_NAME . ';charset=' . DbParameters::$DB_CHARSET, DbParameters::$DB_USER, DbParameters::$DB_PASSWORD);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}

?>