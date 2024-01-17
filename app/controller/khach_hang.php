<?php 

class khach_hang extends DController {
    
    public function __construct(){
        $message = array();
        $data = array();
        parent::__construct();
    }

   

    public function login(){
        $Catemodel = $this->load->model('Categorymodel');
        $tbl_categories = "tbl_categories";
        $data['categories']= $Catemodel->category($tbl_categories);
        $this->load->view('client/Header',$data);
        $this->load->view('client/login');
        $this->load->view('client/footer');
    }

    


    public function signin(){
        $khachnhangmodel= $this->load->model('khachhangmodel');
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $tbl_customer='tbl_account';
        $count = $khachnhangmodel->login($tbl_customer,$username,$password);
        if($count ==0){
            $message["msg"]= "Username hoặc mật khẩu không đúng";
            header("location:".BASE_URL."khachhang/login");
        }else{
            $result= $khachnhangmodel->getUser($tbl_customer,$username,$password);
            // echo $result[0]['username'];
            Session::init();
            Session::set('login',true);
            Session::set('username', $result[0]['username']);
            Session::set('id', $result[0]['id']);
            Session::set('role_as', $result[0]['role_as']);
            if(Session::get('role_as')==1){
                header("location:".BASE_URL."admin/index");
            }else{
            header("location:".BASE_URL."index");
            }
            
        }
    }


    public function logout(){
        Session::init();
        Session::destroy();
        header("location:".BASE_URL."khach_hang/login");
    }

    public function NotFound(){
        $this->load->view('NotFound');
    }


    
}


?>