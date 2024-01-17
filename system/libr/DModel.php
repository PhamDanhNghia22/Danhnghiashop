<?php 
// use PDO;
class DModel{
    protected $db = array();
    public function __construct(){
        $server ="mysql:host=localhost;dbname=watchshop;charset=utf8";
        $username="root";
        $password="";
        $this->db = new Database($server,$username,$password);
        // $this->db1= new DbConnect($server,$username,$password);
    }
    
}

?>