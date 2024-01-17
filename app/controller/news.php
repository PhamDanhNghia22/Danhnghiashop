<?php 


class news  extends DController{
    public function __construct(){
        $data= array();
        parent::__construct();  
    }

    public function index(){
        $this->list_news();
    }

    public function list_news(){
        $this->load->view('cpan/header');
        $this->load->view('cpan/menu');
        // Thể loại
        $Catemodel = $this->load->model('Categorymodel');
        $tbl_categories = "tbl_categories";
        $data['categories']= $Catemodel->category($tbl_categories);
        // Tin tức
        $Newsmodel = $this->load->model('Newsmodel');
        $tbl_news = 'tbl_news';
        $data['news'] = $Newsmodel->news($tbl_news);
        $this->load->view('cpan/news/list',$data);
        $this->load->view('cpan/footer');
    }


    public function add_news(){
        $this->load->view('cpan/header');
        $this->load->view('cpan/menu');
        $Catemodel = $this->load->model('Categorymodel');
        $tbl_categories = "tbl_categories";
        $data['category']= $Catemodel->category($tbl_categories);
        $this->load->view('cpan/news/create',$data);
        $this->load->view('cpan/footer');
    }

    public function insert_news(){
        $Newsmodel = $this->load->model('Newsmodel');
        $tbl_news = 'tbl_news';
        $title_news = $_POST['title_news'];
        $summary_news = $_POST['summary_news'];
        $status_news = $_POST['status_news'];
        $cate_id_news = $_POST['cate_id_news'];
        $desc_news = $_POST['desc_news'];
        $img_news = $_FILES['img_news']['name'];
        $target_dir = "./public/upload/";
        $target_file = $target_dir . basename($_FILES["img_news"]["name"]);
        if (move_uploaded_file($_FILES["img_news"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
        $Slug_news = $this->load->replace(trim($_POST['title_news']));
        $create_date_news = date('Y/m/d');
        $data_news = array(
            'title_news'=>$title_news,
            'summary_news'=>$summary_news,
            'img_news'=>$img_news,
            'Slug_news'=>$Slug_news,
            'status_news'=>$status_news,
            'description_news'=>$desc_news,
            'cate_id_news'=>$cate_id_news,
            'create_date_news'=>$create_date_news,
        );
        $result = $Newsmodel->InsertNews($tbl_news,$data_news);
        header("location:".BASE_URL."news");
    }

    public function edit_news($id){
        $this->load->view('cpan/header');
        $this->load->view('cpan/menu');
        // Thể loại
        $Catemodel = $this->load->model('Categorymodel');
        $tbl_categories = "tbl_categories";
        $data['category']= $Catemodel->category($tbl_categories);
        // Chi tiết Tin 
        $Newsmodel = $this->load->model('Newsmodel');
        $tbl_news = 'tbl_news';
        $cond = "tbl_news.id_news='$id'";
        $data['news'] = $Newsmodel->NewsbyId($tbl_news,$cond);
        $this->load->view('cpan/news/edit',$data);
        $this->load->view('cpan/footer');
    }

    public function Update_news($id){
        $Newsmodel = $this->load->model('Newsmodel');
        $tbl_news = 'tbl_news';
        $cond = "tbl_news.id_news ='$id'";
        $title_news = $_POST['title_news'];
        $summary_news = $_POST['summary_news'];
        $status_news = $_POST['status_news'];
        $cate_id_news = $_POST['cate_id_news'];
        $desc_news = $_POST['desc_news'];
        $img_news = $_FILES['img_news']['name'];
        $target_dir = "./public/upload/";
        $target_file = $target_dir . basename($_FILES["img_news"]["name"]);
        if (move_uploaded_file($_FILES["img_news"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
        $Slug_news = $this->load->replace(trim($_POST['title_news']));
        $create_date_news = $_POST['create_date_news'];
        $update_date_news = $_POST['update_date_news'];
        $data_news = array(
            'title_news'=>$title_news,
            'summary_news'=>$summary_news,
            'img_news'=>$img_news,
            'Slug_news'=>$Slug_news,
            'status_news'=>$status_news,
            'description_news'=>$desc_news,
            'cate_id_news'=>$cate_id_news,
            'create_date_news'=>$create_date_news,
            'update_date_news'=>$update_date_news
        );
        $result = $Newsmodel->UpdateNews($tbl_news,$data_news,$cond);
        header("location:".BASE_URL."news");

    }

    public function delete_news($id){
        $Newsmodel = $this->load->model('Newsmodel');
        $tbl_news = 'tbl_news';
        $cond = "tbl_news.id_news ='$id'";
        $Newsmodel->DeleteNews($tbl_news,$cond);
        header("location:".BASE_URL."news");
    }
}

?>