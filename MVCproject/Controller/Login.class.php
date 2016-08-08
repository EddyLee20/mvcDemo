<?php
class Login extends User{
    public function __construct($_username,$_password){
        $this->_username = $_username;
        $this->_password = $_password;
    }
    //执行方法
    public function _query(){
    }
    
    //执行验证
    public function _check(){
    
    }
}
?>