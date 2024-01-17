<?php 

class DbConnect{
    protected $conn;
    public function __construct(){
        $server ="mysql:host=localhost;dbname=watchshop;charset=utf8";
        $username="root";
        $password="";
        $this->conn = new PDO($server,$username,$password);
        // $this->db1= new DbConnect($server,$username,$password);
    }
    public function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($sql_args);


        }catch(PDOException $e){
            throw $e;
        }finally{
            unset($conn);
        }

    }
    public function pdo_query($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($sql_args);
            // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch(PDOException $e){
            throw $e;

        }finally{
            unset($conn);
        }

    }

    public function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }catch(PDOException $e){
            throw $e;

        }finally{
            unset($conn);
        }

    }

}
?>