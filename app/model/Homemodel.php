<?php 

class Homemodel extends DbConnect{
    private $db;
    public function __construct(){
        $this->db = new DbConnect();
        
    }
    public function product($tbl_product){
        $sql="SELECT * FROM $tbl_product order by id_prod DESC";
        return $this->db->pdo_query($sql);
        // echo print_r($result);
    }

    public function product_limt_5($tbl_product){
        $sql="SELECT * FROM $tbl_product Order BY id_prod DESC LIMIT 5";
        return $this->db->pdo_query($sql);
    }
    public function ProductbySlug($tbl_product,$cond){
        $sql="SELECT * FROM $tbl_product WHERE $cond";
        return $this->db->pdo_query_one($sql);
        // echo print_r($result);
    }
    public function NewsbySlug($tbl_news,$cond){
        $sql="SELECT * FROM $tbl_news WHERE $cond";
        return $this->db->pdo_query_one($sql);
        // echo print_r($result);
    }

    // sản phẩm theo thể loại
    public function ProductbyCategory($tbl_product,$cond){
        $sql="SELECT * FROM $tbl_product inner join tbl_categories on tbl_product.cate_id = tbl_categories.id_cate where $cond";
        return $this->db->pdo_query($sql);
    }
    // Sản phẩm bán chạy
    public function hot_sellingProduct(){
        $sql="SELECT tbl_product.id_prod,tbl_product.name_prod,tbl_product.price_prod,tbl_product.img_prod,tbl_product.slug_prod,count(tbl_order_detail.prod_id)  FROM tbl_order_detail ";
        $sql.=" left join tbl_product on tbl_product.id_prod = tbl_order_detail.prod_id";
        $sql.=" inner join tbl_order on tbl_order_detail.order_code = tbl_order.order_code";
        $sql.=" group by tbl_product.id_prod order by tbl_product.id_prod";
        return $this->db->pdo_query($sql);
    }
}

?>