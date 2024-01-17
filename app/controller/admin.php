<?php 

class admin extends DController {
    
    public function __construct(){
        $message = array();
        $data = array();
        parent::__construct();
    }

    public function index(){
        // Session::checkSession();
        Session::init();
        if(Session::get('login')== true){
            if(Session::get('role_as')==1){
                $this->load->view('cpan/header');
                $this->load->view('cpan/menu');
                $this->dashboard();
                $this->load->view('cpan/footer');
            }else{
                Session::destroy();
                header("location:".BASE_URL);
            }
           
        }
        
        
    }

    // public function login(){
    //     Session::init();
    //     if(Session::get('login')==true){
    //         header("location:".BASE_URL."/admin/dashboard");
            
    //     }
    //     $this->load->view('cpan/login');
    // }

    public function dashboard(){
        // Session::init();
        // Session::checkSession();
        $Dashboard = $this->load->model('Dashboardmodel');
        $tbl_product = "tbl_product";
        $data['thongkedmSP'] = $Dashboard->ListThongkeDanhMucsp($tbl_product);
        $this->load->view('cpan/dashboard',$data);
        
    }


    // public function authenticationLogin(){
    //     $username = $_POST['username'];
    //     $password = md5($_POST['password']);
    //     $tbl_login='tbl_account';
    //     $loginmodel= $this->load->model('Loginmodel');
    //     $count = $loginmodel->login($tbl_login,$username,$password);
    //     if($count ==0){
    //         $message["msg"]= "Username hoặc mật khẩu không đúng";
    //         header("location:".BASE_URL."/khachhang/login");
    //     }else{
    //         $result= $loginmodel->getUser($tbl_login,$username,$password);
    //         // echo $result[0]['username'];
    //         Session::init();
    //         Session::set('login',true);
    //         Session::set('username', $result[0]['username']);
    //         Session::set('id', $result[0]['id']);
    //         header("location:".BASE_URL."/admin/dashboard");
    //     }
    // }


    public function logout(){
        Session::init();
        Session::destroy();
        header("location:".BASE_URL);
    }

    public function NotFound(){
        $this->load->view('NotFound');
    }


    
}


?>