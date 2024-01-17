<?php 

class Main{

    public $url;
    public $ControllerName="trangchu";
    public $methodName ="index";
    public $ControllerPath="app/controller/";
    public $controller;
    public function __construct(){
        $this->getUrl();
        $this->loadController();
        $this->callMethod();
    }

    public function getUrl(){
        $this->url = isset( $_GET['url']) ? $_GET['url'] : NULL;
        if($this->url != NULL){
            $this->url = rtrim($this->url, '/');
            $this->url = explode('/',filter_var($this->url, FILTER_SANITIZE_URL));
        }else{
            unset($this->url);
        }
    }

    public function loadController(){
        if(!isset($this->url[0])){
            include $this->ControllerPath.$this->ControllerName.".php";
            $this->controller = new $this->ControllerName();
        }else{
            $this->ControllerName = $this->url[0];
            $fileName = $this->ControllerPath.$this->ControllerName.".php";
            if(file_exists($fileName)){
                include $fileName;
                if(class_exists($this->ControllerName)){
                    $this->controller = new $this->ControllerName();
                }else{

                }
            }else{

            }
        }
    }

    public function callMethod(){
        if(isset($this->url[2])){
            $this->methodName= $this->url[1];
            if(method_exists($this->controller,$this->methodName)){
                $this->controller->{$this->methodName}($this->url[2]);
            }else{
                header("location:".BASE_URL."/index/NotFound");
                // ob_end_flush();
            }
        }else{
            if(isset($this->url[1])){
                $this->methodName= $this->url[1];
                if(method_exists($this->controller,$this->methodName)){
                    $this->controller->{$this->methodName}();
                }else{
                    header("location:".BASE_URL."/index/NotFound");
                    // ob_end_flush();
                }
            }else{
                if(method_exists($this->controller, $this->methodName)){
                    $this->controller->{$this->methodName}();
                }else{
                    header("location:".BASE_URL."/index/NotFound");
                    // ob_end_flush();
                }
            }
        }
    }

}

?>
