<?php 

class Productmodel extends DbConnect {

    protected $db;
    public function __construct(){
        $this->db = new DbConnect();
        
    }


    public function product($tbl_product){
        $sql="SELECT * FROM $tbl_product";
        return $this->db->pdo_query($sql);
        // echo print_r($result);
    }


    public function ProductbyId($tbl_product,$cond){
        $sql="SELECT * FROM $tbl_product WHERE $cond";
        return $this->db->pdo_query_one($sql);
        // echo print_r($result);
    }

    public function ProductbySlug($tbl_product,$cond){
        $sql="SELECT * FROM $tbl_product WHERE $cond";
        return $this->db->pdo_query_one($sql);
        // echo print_r($result);
    }

    public function InsertProduct($tbl_product,$name_prod,$price_prod,$status_prod,$hot_prod,$desc_prod,$cate_id,$create_date,$slug_prod,$img){
        $sql="INSERT INTO $tbl_product(name_prod,price_prod,img_prod,slug_prod,status_prod,hot_prod,create_date,desc_prod,cate_id) VALUES('$name_prod','$price_prod','$img','$slug_prod','$status_prod','$hot_prod','$create_date','$desc_prod','$cate_id')";
        return $this->db->pdo_execute($sql);
    }

    public function UpdateProduct($tbl_product,$name_prod,$price_prod,$status_prod,$hot_prod,$desc_prod,$cate_id,$create_date,$update_date,$slug_prod,$img,$cond){
        $sql="UPDATE $tbl_product SET name_prod='".$name_prod."',price_prod='".$price_prod."', img_prod='".$img."',status_prod='".$status_prod."',hot_prod='".$hot_prod."',desc_prod='".$desc_prod."',cate_id='".$cate_id."',slug_prod='".$slug_prod."',create_date='".$create_date."',update_date='".$update_date."' WHERE $cond ";
        return $this->db->pdo_execute($sql);
    } 
    
    public function DeleteProduct($tbl_product,$cond){
        $sql="DELETE FROM $tbl_product where $cond";
        return $this->db->pdo_execute($sql);
    }

    public function ProductbyCategory($tbl_product,$cond){
        $sql="SELECT * FROM $tbl_product inner join tbl_categories on tbl_product.cate_id = tbl_categories.id_cate where $cond";
        return $this->db->pdo_query($sql);
    }

}

?>