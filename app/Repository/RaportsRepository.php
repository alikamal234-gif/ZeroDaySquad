<?php

require_once __DIR__ . "\BaseModels.php";

class RaportsRepository extends BaseModels{
    public string $table = 'reports';
    public function getNumberReports(){
        return $this->getNumber($this->table);
    }

    public function getNumberReportById($id){
        $sql = "SELECT COUNT(*) FROM reports r JOIN project p ON p.id = r.project_id JOIN users u ON u.id = :id";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(':id' ,$id);
        $stm->execute();
        $result = $stm->fetchColumn();
        return $result;
    }
}


