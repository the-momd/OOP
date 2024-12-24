<?php

class baseModel {
    protected $db;
    protected $table;
    protected $primaryKey = 'id';
    
    public function __construct(){
        try {
            $this->db = new PDO("mysql:dbname=task_project;host=localhost",'root','');
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
            
        }
    }

    public function find($id){
    $sql = "SELECT * FROM {$this->table} where {$this->primaryKey} = :id ";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update($data){
        # code for update a model
    }
    public function create($data){
        # code for create a model
    }
    public function delete($id){
    $sql = "DELETE  FROM {$this->table} where {$this->primaryKey} = :id ";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->rowCount();
    }
}


