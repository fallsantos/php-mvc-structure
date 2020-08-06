<?php

namespace Src\classes;

use function Sentry\captureException;

class ClassConnection
{
    # Conexão com o banco
    protected function getConnection(): object
    {
        try{
            $conn = new \PDO("mysql:host=" . DATABASE['host'] . ";dbname=" . DATABASE['name'], DATABASE['user'], DATABASE['pass'], DATABASE['options']);
            //\PDO("mysql:host=" . DATABASE['host'] . ";dbname=" . DATABASE['name'],DATABASE['user'],DATABASE['pass'], $options);
            return $conn;
        }catch (PDOException $erro){
            return (object) [
                "error" => $erro->getCode(),
                "message" => $erro->getMessage()
            ];
        }
    }
}