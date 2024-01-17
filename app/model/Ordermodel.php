<?php 

class Ordermodel extends DModel {

    public function __construct(){

        parent::__construct();
    }

    // public function category($tbl_categories){
    //     $sql="SELECT * FROM $tbl_categories";
    //     return $this->db->select($sql);
    //     // echo print_r($result);
    // }


    // public function categorybyId($tbl_categories,$cond){
    //     $sql="SELECT * FROM $tbl_categories WHERE $cond";
    //     return $this->db->select($sql);
    //     // echo print_r($result);
    // }

    public function InsertOrder($tbl_order,$data){
        return $this->db->insert($tbl_order,$data);
    }

    public function InsertOrderDetail($tbl_order_detail,$data){
        return $this->db->insert($tbl_order_detail,$data);
    }

    // public function UpdateCate($tbl_categories,$data,$cond){
    //     return $this->db->update($tbl_categories,$data,$cond);
    // } 
    
    // public function DeleteCategory($tbl_categories,$cond){
    //     return $this->db->delete($tbl_categories,$cond);
    // }

}

?>