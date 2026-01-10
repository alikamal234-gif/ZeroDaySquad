<?php

require_once __DIR__ . "/BaseModels.php";

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

    public function getAllProject(){
        $sql = "SELECT
  p.id            AS project_id,
  p.name          AS project_name,
  p.address       AS project_address,
  p.photoAddress  AS project_photo,
  p.description   AS project_description,
  p.owner_id      AS owner_user_id,
  p.price         AS project_price,
  u.id            AS owner_id,
  u.name          AS owner_name,
  u.email         AS owner_email,
  u.role          AS owner_role

FROM project AS p
JOIN users AS u
  ON u.id = p.owner_id;
  
";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getAllProjectById($id){
        $sql = "SELECT
  p.id            AS project_id,
  p.name          AS project_name,
  p.address       AS project_address,
  p.photoAddress  AS project_photo,
  p.description   AS project_description,
  p.owner_id      AS owner_user_id,
  p.price         AS project_price,
  u.id            AS owner_id,
  u.name          AS owner_name,
  u.email         AS owner_email,
  u.role          AS owner_role

FROM project AS p
JOIN users AS u
  ON u.id = p.owner_id
  WHERE p.id = :id
  
";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(":id",$id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}