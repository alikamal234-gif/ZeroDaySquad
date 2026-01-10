<?php

$LAB_NAME  = "ssh_lab";
$LAB_IMAGE = "linux_lab";


class Database {
    private $host = "dock-hosting-db";
    private $user = "u_4_7838c5";
    private $password = "eb735ebbbc520db72cec6bad";
    private $dbname = "db_4_ZeroDaySqu_7838c5";
    private $conn;
    private static $instance = null;

    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user , $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(Exception $error){
            die("error de connection");
        }
    }
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }

}

$db = Database::getInstance()->getConnection();
