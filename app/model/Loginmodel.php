<?php 

class Loginmodel extends DModel {

    public function __construct(){

        parent::__construct();
    }

    public function login($tbl_login,$username,$password){
        $sql="SELECT * FROM $tbl_login WHERE username=? AND password=? ";
        return $this->db->affectedRows($sql,$username,$password);
        // echo print_r($result);
    }

    public function getUser($tbl_login,$username,$password){
        $sql="SELECT * FROM $tbl_login WHERE username=? AND password=? ";
        return $this->db->selectUser($sql,$username,$password);
    }


    

}

?>