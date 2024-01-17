<?php 

class Categorymodel extends DbConnect {
    protected $db;
    public function __construct(){
        $this->db = new DbConnect();
        
    }

    public function category($tbl_categories){
        $sql="SELECT * FROM $tbl_categories";
        return $this->db->pdo_query($sql);
        // echo print_r($result);
    }


    public function categorybyId($tbl_categories,$cond){
        $sql="SELECT * FROM $tbl_categories WHERE $cond";
        return $this->db->pdo_query_one($sql);
        // echo print_r($result);
    }
    public function categorybySlug($tbl_categories,$cond){
        $sql="SELECT * FROM $tbl_categories WHERE $cond";
        return $this->db->pdo_query_one($sql);
        // echo print_r($result);
    }

    public function InsertCate($tbl_categories,$name_cate,$desc_cate,$status_cate,$slug_cate){
        $sql="INSERT INTO $tbl_categories(name_cate,desc_cate,status_cate,slug_cate) values('$name_cate','$desc_cate','$status_cate','$slug_cate')";
        return $this->db->pdo_execute($sql);
    }

    public function UpdateCate($tbl_categories,$name_cate,$desc_cate,$status_cate,$slug_cate,$cond)
    {
        $sql="Update $tbl_categories set name_cate='".$name_cate."', desc_cate='".$desc_cate."', status_cate='".$status_cate."',slug_cate='".$slug_cate."' where $cond ";
        return $this->db->pdo_execute($sql);
    } 
    
    public function DeleteCategory($tbl_categories,$cond){
        $sql="DELETE FROM $tbl_categories WHERE $cond";
        return $this->db->pdo_execute($tbl_categories,$cond); 
    }

}

?>