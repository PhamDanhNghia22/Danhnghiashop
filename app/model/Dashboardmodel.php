<?php 

class Dashboardmodel extends DbConnect {
    protected $db;
    public function __construct(){
        $this->db = new DbConnect();
        
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

    public function ListThongkeDanhMucsp($tbl_product){
        $sql="SELECT tbl_categories.id_cate ,tbl_categories.name_cate, count(tbl_product.id_prod) as countsp  FROM $tbl_product ";
        $sql.=" left join tbl_categories on tbl_categories.id_cate = tbl_product.cate_id group by tbl_categories.id_cate order by tbl_categories.id_cate desc";
        return $this->db->pdo_query($sql);
        
    }

    // public function InsertOrderDetail($tbl_order_detail,$data){
    //     return $this->db->insert($tbl_order_detail,$data);
    // }

    // public function UpdateCate($tbl_categories,$data,$cond){
    //     return $this->db->update($tbl_categories,$data,$cond);
    // } 
    
    // public function DeleteCategory($tbl_categories,$cond){
    //     return $this->db->delete($tbl_categories,$cond);
    // }

}

?>