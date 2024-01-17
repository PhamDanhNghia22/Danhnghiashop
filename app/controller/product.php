<?php 
class product extends DController{
    public function __construct(){
        $data= array();
        parent::__construct();  
    }

    public function index(){
        
        $this->list_product();

                
        
        
    }

    public function list_product(){
        Session::init();
        if(Session::get('login')== true){
            if(Session::get('role_as')==1){
            $this->load->view('cpan/header');
            $this->load->view('cpan/menu');
            // thể loại
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $data['categories']= $Catemodel->category($tbl_categories);
            // sản phẩm
            $Productmodel = $this->load->model('Productmodel');
            $tbl_product = "tbl_product";
            $data['products']= $Productmodel->product($tbl_product);
            $this->load->view('cpan/product/list',$data);
            $this->load->view('cpan/footer');
            }else{
                Session::destroy();
                header("location:".BASE_URL);
            }
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
    }

    

    public function Add_product(){
        Session::init();
        if(Session::get('login')== true){
            if(Session::get('role_as')==1){
        $this->load->view('cpan/header');
        $this->load->view('cpan/menu');
        $Catemodel = $this->load->model('Categorymodel');
        $tbl_categories = "tbl_categories";
        $data['category']= $Catemodel->category($tbl_categories);
        $this->load->view('cpan/product/create',$data);
        $this->load->view('cpan/footer');
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
    }


    public function insert_product(){
        Session::init();
        if(Session::get('login')== true){
            if(Session::get('role_as')==1){
        $Productmodel = $this->load->model('Productmodel');
        $tbl_product = "tbl_product";
        $name_prod =$_POST['name_prod'];
        $price_prod =$_POST['price_prod'];
        $status_prod =$_POST['status_prod'];
        $hot_prod =$_POST['hot_prod'];
        $desc_prod =$_POST['desc_prod'];
        $cate_id =$_POST['cate_id'];
        $create_date = date('Y/m/d');
        $img = $_FILES['img_prod']['name'];
        $target_dir = "./public/upload/";
        $target_file = $target_dir . basename($_FILES["img_prod"]["name"]);
        if (move_uploaded_file($_FILES["img_prod"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
        // $slug_cate = preg_replace('/[^a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+/i','-',trim(strtolower($_POST['name_cate'])));
        $slug_prod = $this->load->replace(trim($_POST['name_prod']));
        // $data = array(
        //     'name_prod'=> $name_prod,
        //     'price_prod'=> $price_prod,
        //     'desc_prod'=> $desc_prod,
        //     'status_prod'=> $status_prod,
        //     'hot_prod'=> $hot_prod,
        //     'slug_prod' => $slug_prod,
        //     'create_date' => $create_date,
        //     'cate_id' => $cate_id,
        //     'img_prod' => $img,
        // );
        $Productmodel->InsertProduct($tbl_product,$name_prod,$price_prod,$status_prod,$hot_prod,$desc_prod,$cate_id,$create_date,$slug_prod,$img);
        echo "thêm thành công";
        header("location:".BASE_URL."product/");
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
    }

    public function edit_prod($id){
        $this->load->view('cpan/header');
        $this->load->view('cpan/menu');
        // thể loại
        $Catemodel = $this->load->model('Categorymodel');
        $tbl_categories = "tbl_categories";
        $categories= $Catemodel->category($tbl_categories);
        // Chi tiết sản phẩm
        $Productmodel = $this->load->model('Productmodel');
        $tbl_product = "tbl_product";
        $cond = "tbl_product.id_prod='$id'";
        $product= $Productmodel->ProductbyId($tbl_product,$cond);
        $this->load->view('cpan/product/edit',compact('product','categories'));
        $this->load->view('cpan/footer');
    }

    public function Update_product($id){
        Session::init();
        if(Session::get('login')== true){
            if(Session::get('role_as')==1){
        $Productmodel = $this->load->model('Productmodel');
        $tbl_product = "tbl_product";
        $cond="tbl_product.id_prod='$id'";
        $name_prod =$_POST['name_prod'];
        $price_prod =$_POST['price_prod'];
        $status_prod =$_POST['status_prod'];
        $hot_prod =$_POST['hot_prod'];
        $desc_prod =$_POST['desc_prod'];
        $cate_id =$_POST['cate_id'];
        $create_date = $_POST['create_date_prod'];
        $update_date =$_POST['update_date_prod'];
        $img = $_FILES['img_prod']['name'];
        $target_dir = "./public/upload/";
        $target_file = $target_dir . basename($_FILES["img_prod"]["name"]);
        if (move_uploaded_file($_FILES["img_prod"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
        // $slug_cate = preg_replace('/[^a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+/i','-',trim(strtolower($_POST['name_cate'])));
        $slug_prod = $this->load->replace(trim($_POST['name_prod']));
        
        $Productmodel->UpdateProduct($tbl_product,$name_prod,$price_prod,$status_prod,$hot_prod,$desc_prod,$cate_id,$create_date,$update_date,$slug_prod,$img,$cond);
        echo "thêm thành công";
        header("location:".BASE_URL."product/");
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
    }

    public function delete_product($id){
        Session::init();
        if(Session::get('login')== true){
            if(Session::get('role_as')==1){
        $Productmodel = $this->load->model('Productmodel');
        $tbl_product = "tbl_product";
        $cond="tbl_product.id_prod='$id'";
        $Productmodel->DeleteProduct($tbl_product,$cond);
        echo "Xoa thanh cong";
        header("location:".BASE_URL."product/");
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
        }else{
            Session::destroy();
            header("location:".BASE_URL);
        }
        
    }

}
?>
