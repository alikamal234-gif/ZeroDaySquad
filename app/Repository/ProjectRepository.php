<?php

require_once __DIR__ . "\BaseModels.php";

class ProjectRepository extends BaseModels{
    public string $table = 'project';
    public function getNumberProject(){
        return $this->getNumber($this->table);
    }

    public function getProjectById($id){
        $sql = "SELECT * FROM $this->table WHERE owner_id = :id";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(":id",$id);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}