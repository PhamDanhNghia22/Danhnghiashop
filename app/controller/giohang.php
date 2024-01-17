<?php 

    class giohang extends DController {
        
        public function __construct(){
            $data = array();
            parent::__construct();
            $message = array();
        }

        public function index(){
            $this->giohang();
            
        }

        public function Header(){
            $Catemodel = $this->load->model('Categorymodel');
            $tbl_categories = "tbl_categories";
            $data['categories']= $Catemodel->category($tbl_categories);
            $this->load->view('client/Header',$data);
            
        }

        public function giohang(){
            Session::init();
            $this->Header();
            $this->load->view('client/giohang');
            $this->Footer();
        }

        public function themgiohang(){
            Session::init();
            // Session::destroy();
            if(isset($_SESSION['giohang'])){
                $avaiable = 0;
                foreach($_SESSION['giohang'] as $key=>$value){
                    if($_SESSION['giohang'][$key]['id_prod'] == $_POST['id_prod']){
                        $avaiable++;
                        $_SESSION['giohang'][$key]['quantity_prod']=$_SESSION['giohang'][$key]['quantity_prod'] + $_POST['quantity_prod'];
                    }
                }
                if($avaiable==0){
                    $item = array(
                        'id_prod'=>$_POST['id_prod'],
                        'name_prod'=>$_POST['name_prod'],
                        'price_prod'=>$_POST['price_prod'],
                        'img_prod'=>$_POST['img_prod'],
                        'quantity_prod'=>$_POST['quantity_prod'],
                    );
                    $_SESSION['giohang'][]=$item;
                }
                $message['msg'] = "Thêm giỏ hàng thành công";
            }else{
                // echo $_POST['name_prod'];
                $item = array(
                    'id_prod'=> $_POST['id_prod'],
                    'name_prod'=> $_POST['name_prod'],
                    'price_prod'=> $_POST['price_prod'],
                    'img_prod'=> $_POST['img_prod'],
                    'quantity_prod'=> $_POST['quantity_prod'],
                );

                $_SESSION['giohang'][]=$item;
                $message['msg'] = "Thêm giỏ hàng thành công";
                
            }
            header("location:".BASE_URL."giohang?msg=".urldecode(serialize($message)));
        }

        public function capnhat_giohang(){
            Session::init();
            if(isset($_POST['delete_cart'])){
                if(isset($_SESSION['giohang'])){
                    foreach($_SESSION['giohang'] as $key=>$value){
                        if($value['id_prod'] == $_POST['delete_cart']){
                            unset($_SESSION['giohang'][$key]);
                        }
                    }
                    header('location:'.BASE_URL.'giohang');
                }else{
                    header('location:'.BASE_URL);
                }
            }else{
                foreach($_POST['qty'] as $key=> $qty){
                    foreach($_SESSION['giohang'] as $session=>$value){
                        if($value['id_prod'] == $key && $qty >=1){
                            $_SESSION['giohang'][$session]['quantity_prod']= $qty;
                        }elseif($value['id_prod'] == $key && $qty <=0){
                            unset($_SESSION['giohang'][$session]);
                        }
                        
                    }
                    header('location:'.BASE_URL.'giohang');
                }
                
            }
            

        }

        public function thanh_toan(){
            Session::init();
            $tbl_order = "tbl_order";
            $tbl_order_detail = "tbl_order_detail";
            $Ordermodel = $this->load->model('Ordermodel');
            $Order_code = rand(0,9999);
            $username_order = $_POST['txtHoTen'];
            $phone_order = $_POST['txtDienThoai'];
            $address_order = $_POST['txtDiaChi'];
            $email_order = $_POST['txtEmail'];
            $total_order= $_POST['txtTotal'];
            $data_order = array(
                'order_code'=>$Order_code,
                'username_order'=>$username_order,
                'phone_order'=>$phone_order,
                'address_order'=>$address_order,
                'email_order'=>$email_order,
                'total_order'=>$total_order,
            );
            $result_order = $Ordermodel->InsertOrder($tbl_order,$data_order);
            if(Session::get('giohang') == true){
                foreach(Session::get('giohang')as $key => $value){
                    $data_order_detail = array(
                        'order_code'=>$Order_code,
                        'prod_id'=>$value['id_prod'],
                        'prod_name'=>$value['name_prod'],
                        'prod_price'=>$value['price_prod'],
                        'prod_img'=>$value['img_prod'],
                        'prod_quantity'=>$value['quantity_prod'],
                    );
                    $result_order_detail = $Ordermodel->InsertOrderDetail($tbl_order_detail,$data_order_detail);
                }
                unset($_SESSION['giohang']);
            }

            header('location:'.BASE_URL);

            

        }

        public function Footer(){
            $this->load->view('client/footer');
        }

        public function NotFound(){
            $this->load->view('NotFound');
        }


        
    }

?>