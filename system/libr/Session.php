<?php

class Session{

    public static function init(){
        session_start();
    }

    public static function set($key,$val){
        $_SESSION[$key]= $val;
    }

    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }

    public static function checkSession(){
        Session::init();
        if(Session::get('login') == true){
            if(Session::get('role_as') == 1){
                header("location:".BASE_URL."/admin/index");
            }else{
                Session::destroy();
                header("location:".BASE_URL."/index");
            }
           
        }else{
            Session::destroy();
            header("location:".BASE_URL."/khach_hang/login");

                


        }
    }

    public static function destroy(){
        session_destroy();
    }

    public static function unset($key){
        session_unset($key);
    }

}


?>