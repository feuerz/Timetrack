<?php
namespace Migue\Timetrack\Models;


use Migue\Timetrack\Database\Conn;

    class Model {
    
        protected $db;
        protected $table;
    
        public function __construct()
        {
            try {
                $this->db = Conn::connect();
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
    
        public function getAll()
        {
            try {
                $sql = 'SELECT * FROM ' . $this->table;
    
                $query = $this->db->prepare($sql);
                $query->setFetchMode(\PDO::FETCH_OBJ);
                $query->execute();
    
                return $query->fetchAll();
            } catch (\PDOException $e) {
                echo '<p class="error">Fallo en la conexión: </p>' . $e->getMessage();
                return null;
            }
        }
    
        public function getById($id)
        {
            try {
                $sql = 'SELECT * FROM ' . $this->table . ' WHERE id = :id';
    
                $query = $this->db->prepare($sql);
                $query->bindParam(':id', $id);
                $query->setFetchMode(\PDO::FETCH_OBJ);
                $query->execute();
    
                return $query->fetch();
            } catch (\PDOException $e) {
                echo '<p class="error">Fallo en la conexión: </p>' . $e->getMessage();
                return null;
            }
        }
    
        public function getByEmail($email)
        {
            try {
                $sql = 'SELECT * FROM ' . $this->table . ' WHERE email = :email';
    
                $query = $this->db->prepare($sql);
                $query->bindParam(':email', $email);
                $query->setFetchMode(\PDO::FETCH_OBJ);
                $query->execute();
    
                return $query->fetch();
            } catch (\PDOException $e) {
                echo '<p class="error">Fallo en la conexión: </p>' . $e->getMessage();
                return null;
            }
        }
    }

    


?>