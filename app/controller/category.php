<?php 

    class category extends DController {
        
        public function __construct(){
            $data = array();
            parent::__construct();
        }


        public function index(){
            $this->list_category();
        }

        public function list_category(){
            Session::init();
            if(Session::get('login')== true){
                if(Session::get('role_as')==1){
            $this->load->view('cpan/header');
            $this->load->view('cpan/menu');
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $data['category']= $Catemodel->category($tbl_categories);
            $this->load->view('cpan/category/list',$data);
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

        public function categorybyId($id){
            Session::init();
            if(Session::get('login')== true){
                if(Session::get('role_as')==1){
                $Catemodel = $this->load->model('Categorymodel');
                $tbl_categories = "tbl_categories";
                $data['categorybyId']= $Catemodel->categorybyId($tbl_categories,$id);
                }else{
                    Session::destroy();
                    header("location:".BASE_URL);
                }
            }else{
                Session::destroy();
                header("location:".BASE_URL);
            }
        }


        public function Add_category(){
            Session::init();
            if(Session::get('login')== true){
                if(Session::get('role_as')==1){
                    $this->load->view('cpan/header');
                    $this->load->view('cpan/menu');
                    $this->load->view('cpan/category/addCategory');
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

        public function insert_Category(){
            Session::init();
            if(Session::get('login')== true){
                if(Session::get('role_as')==1){
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $name_cate =$_POST['name_cate'];
            $desc_cate =$_POST['desc_cate'];
            $status_cate =$_POST['status_cate'];
            // $slug_cate = preg_replace('/[^a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+/i','-',trim(strtolower($_POST['name_cate'])));
            $slug_cate = $this->load->replace(trim($_POST['name_cate']));
            $Catemodel->InsertCate($tbl_categories,$name_cate,$desc_cate,$status_cate,$slug_cate);
            echo "thêm thành công";
            header("location:".BASE_URL."category/");
            }else{
                Session::destroy();
                header("location:".BASE_URL);
            }
            }else{
                Session::destroy();
                header("location:".BASE_URL);
            }
        }

        public function edit_cate($id){
            Session::init();
            if(Session::get('login')== true){
                if(Session::get('role_as')==1){
            $this->load->view('cpan/header');
            $this->load->view('cpan/menu');
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $cond = "tbl_categories.id_cate='$id'";
            $category= $Catemodel->categorybyId($tbl_categories,$cond);
            $this->load->view('cpan/category/editCategory',compact('category'));
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

        public function update_Category($id){
            Session::init();
            if(Session::get('login')== true){
                if(Session::get('role_as')==1){
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $cond = "tbl_categories.id_cate='$id'";
            $name_cate =$_POST['name_cate'];
            $desc_cate =$_POST['desc_cate'];
            $status_cate =$_POST['status_cate'];
            $slug_cate = $this->load->replace(trim($_POST['name_cate']));

            // $data = array(
            //     'name_cate'=> $name_cate,
            //     'desc_cate'=> $desc_cate,
            //     'status_cate'=> $status_cate,
            // );
            $Catemodel->UpdateCate($tbl_categories,$name_cate,$desc_cate,$status_cate,$slug_cate,$cond);
            echo "Cập nhật thành công";
            header("location:".BASE_URL."category/");
            }else{
                Session::destroy();
                header("location:".BASE_URL);
            }
            }else{
                Session::destroy();
                header("location:".BASE_URL);
            }
        }

        
        public function delete_Category($id){
            Session::init();
            if(Session::get('login')== true){
                if(Session::get('role_as')==1){
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $cond = "tbl_categories.id_cate='$id'";
            $Catemodel->DeleteCategory($tbl_categories,$cond);
            echo "Xoa thanh cong";
            header("location:".BASE_URL."category/");
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