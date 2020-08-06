<?php

namespace App\model;

use Src\classes\ClassConnection;

class User extends ClassConnection
{
    /** @var  $conn Connection*/
    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function create($obj)
    {
        try{
            $pdo = $this->getConnection();
            $stmt = $pdo->prepare("INSERT INTO users_2 VALUES(default, :email, :password)");
            $stmt->execute(array(
                ":email" => $obj->email,
                ":password" => $obj->password
            ));

            return true;

        }catch (\PDOException $e){
            return json_encode([
                "error" => $e->getCode(),
                "message" => $e->getMessage()
            ]);
        }
    }

    /** @return list of all users. */
    public function read(): string
    {
        try{
            $consult = $this->conn->query('SELECT * FROM users_2');

            $result = $consult->fetchAll(\PDO::FETCH_ASSOC);

            return json_encode([
                'data' => $result,
                'count' => count($result)
            ]);
        }catch (\Exception $e){
            return json_encode([
                "error" => $e->getCode(),
                "message" => $e->getMessage()
            ]);
        }
        //return $this->conn->errorInfo();
    }

    public function show($id): string // Já retorna em formato json
    {
        try{
            $stmt = $this->conn->prepare("SELECT * FROM users_2 WHERE id= :id");

            $stmt->bindValue(':id', $id);

            $stmt->execute();
            
            if($stmt->rowCount() < 1){
                return json_encode([
                    "error" => "User not found"
                ]);
            }
            
            return json_encode($stmt->fetch(\PDO::FETCH_ASSOC));
        }catch (\Exception $e){
            return json_encode([
                "error" => $e->getCode(),
                "message" => $e->getMessage()
            ]);
        }
    }

    public function update($id, $obj)
    {
        try{
            $stmt = $this->conn->prepare("UPDATE users_2 SET email= :email WHERE id= :id");
            $stmt->execute(array(
                ':id'   => $id,
                ':email' => $obj->email
            ));

            if($stmt->rowCount() < 1){
                return json_encode([
                    "error" => "User not found"
                ]);
            }

            return json_encode([
                "response" => true
            ]);

        }catch (\PDOException $e){
            return json_encode([
                "error" => $e->getCode(),
                "message" => $e->getMessage()
            ]);
        }

    }

    public function delete($id)
    {
        try{
            $stmt = $this->conn->prepare("DELETE FROM users_2 WHERE id= :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            if($stmt->rowCount() < 1){
                return json_encode([
                    "error" => "User not found"
                ]);
            }

            return json_encode([
                "response" => true
            ]); 

        }catch (\PDOException $e){
            return json_encode([
                "error" => $e->getCode(),
                "message" => $e->getMessage()
            ]);
        }
    }
}
