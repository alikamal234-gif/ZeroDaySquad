<?php
session_start();
require_once __DIR__ . "/BaseModels.php";

class UserRepository extends BaseModels{
    public string $table = 'users';
    public function getNumberUser(){
        return $this->getNumber($this->table);
    }

    public function ValidationLogin($email,$password){
        $sql = "SELECT * FROM $this->table WHERE email = :email";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(':email',$email);
        $stm->execute();
        $result = $stm->fetch();
        if(!$result){
            echo "login was failed";
            return;
        }
        if(password_verify($password,$result['password'])){
            $_SESSION['role_login'] = $result['role'];
            $_SESSION['id_login'] = $result['id'];
            switch ($result['role']) {
                case 'admin':
                    header('Location: ../Dashboard/admin.php');
                    break;
                case 'owner':
                    header('Location: ../Dashboard/owner.php');                 
                    break;
                case 'tester':
                    header('Location: ../Dashboard/hacker/index.php');
                    break;
                
                default:
                    
                    break;
            }
        }

    }


    public function transformeCV($data){
        $columns = "";
        $values = "";

        foreach($data AS $key => $value){
            $columns .= "$key ,";
            $values .= ":$key ,";
        }

        $columns = rtrim($columns,", ");
        $values = rtrim($values,", ");
        return $this->ValidationSignup($columns,$values,$data);
    }

    public function ValidationSignup($columns,$values,$data){
        $sql = "INSERT INTO $this->table ($columns) VALUES ($values)";
        $stm = $this->db->prepare($sql);
        $stm->execute($data);
        header('Location: login.php');
    }
}