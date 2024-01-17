<?php 

class khachhangmodel extends DModel {

    public function __construct(){

        parent::__construct();
    }

    public function login($tbl_customer,$username,$password){
        $sql="SELECT * FROM $tbl_customer WHERE username=? AND password=? ";
        return $this->db->affectedRows($sql,$username,$password);
        // echo print_r($result);
    }

    public function getUser($tbl_customer,$username,$password){
        $sql="SELECT * FROM $tbl_customer WHERE username=? AND password=? ";
        return $this->db->selectUser($sql,$username,$password);
    }


    

}

?>