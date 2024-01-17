<?php 

class Newsmodel extends DModel {

    public function __construct(){

        parent::__construct();
    }

    public function news($tbl_news){
        $sql="SELECT * FROM $tbl_news";
        return $this->db->select($sql);
        // echo print_r($result);
    }

    public function news_update($tbl_news){
        $sql="SELECT * FROM $tbl_news Order BY id_news DESC LIMIT 5";
        return $this->db->select($sql);
    }


    public function NewsbyId($tbl_news,$cond){
        $sql="SELECT * FROM $tbl_news WHERE $cond";
        return $this->db->select($sql);
        // echo print_r($result);
    }

    // public function ProductbySlug($tbl_product,$cond){
    //     $sql="SELECT * FROM $tbl_product WHERE $cond";
    //     return $this->db->select($sql);
    //     // echo print_r($result);
    // }

    public function InsertNews($tbl_news,$data){
        return $this->db->insert($tbl_news,$data);
    }

    public function UpdateNews($tbl_news,$data,$cond){
        return $this->db->update($tbl_news,$data,$cond);
    } 
    
    public function DeleteNews($tbl_news,$cond){
        return $this->db->delete($tbl_news,$cond);
    }

}

?>