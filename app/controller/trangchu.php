<?php 
    
    class trangchu extends DController {
        
        public function __construct(){
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->Header();
            $this->Banner();
            $this->homepage();
            $this->Footer();
        }

        public function Header(){
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $data['categories']= $Catemodel->category($tbl_categories);
            $this->load->view('client/Header',$data);
        }

        

        public function homepage(){
            $Homemodel = $this->load->model('Homemodel');
            $tbl_product = "tbl_product";
            $data['products']= $Homemodel->product_limt_5($tbl_product);
            $data['HotSellingProduct'] = $Homemodel->hot_sellingProduct();
            $this->load->view('client/Home',$data);
        }

        public function sanpham(){
            $this->Header();
            $Homemodel = $this->load->model('Homemodel');
            $tbl_product = "tbl_product";
            $data['products']= $Homemodel->product($tbl_product);
            $this->load->view('client/tatcasanpham',$data);
            $this->Footer();
        }
        public function ChiTietTin(string $slug){
            $this->Header();
            $Homemodel = $this->load->model('Homemodel');
            $tbl_news = "tbl_news";
            $cond = "tbl_news.Slug_news='$slug'";
            $news= $Homemodel->NewsbySlug($tbl_news,$cond);
            $this->load->view('client/chitiettin',compact('news'));
            $this->Footer();
        }

        public function ChiTietSp(string $slug){
            $this->Header();
            $Homemodel = $this->load->model('Homemodel');
            $tbl_product = "tbl_product";
            $cond = "tbl_product.slug_prod='$slug'";
            $product= $Homemodel->ProductbySlug($tbl_product,$cond);
            $this->load->view('client/chi_tiet_sp',compact('product'));
            $this->Footer();
        }

        public function Footer(){
            $this->load->view('client/footer');
        }

        public function NotFound(){
            $this->load->view('NotFound');
        }


        public function Banner(){
            $Newsmodel = $this->load->model('Newsmodel');
            $tbl_news = 'tbl_news';
            $data['news'] = $Newsmodel->news_update($tbl_news);
            $this->load->view('client/banner',$data);
        }

        public function the_loai_san_pham(String $slug){
            $cond = "tbl_categories.slug_cate='$slug'";
            // THE LOAI
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $data['categories']= $Catemodel->category($tbl_categories);
            $category= $Catemodel->categorybySlug($tbl_categories,$cond);
            // SAN PHAM THEO THE LOAI 
            $Homemodel = $this->load->model('Homemodel');
            $tbl_product = "tbl_product";
            $product = $Homemodel->ProductbyCategory($tbl_product,$cond);
            $this->load->view('client/Header',$data);
            $this->load->view('client/sanpham',compact('product','category'));
            $this->load->view('client/footer');
            
        }


        
    }

?>