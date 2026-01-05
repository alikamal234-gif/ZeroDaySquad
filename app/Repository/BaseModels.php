<?php
require_once __DIR__ . "/../../config/Database.php";

class BaseModels
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();

    }

    public function getReports()
    {
        $sql = "SELECT
                r.id            AS report_id,
                r.issue         AS report_issue,
                r.description   AS report_description,
                r.cearted_at    AS report_created_at,
                t.id            AS tester_id,
                u.id            AS user_id,
                u.name          AS tester_name,
                u.email         AS tester_email
                FROM reports AS r
                JOIN tester AS t
                  ON t.id = r.tester_id
                JOIN users AS u
                  ON u.id = t.id;
                ";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getNumber($table)
    {
        $sql = "SELECT
                COUNT(*) from $table
                ";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $result = $stm->fetchColumn();
        return $result;
    }
}