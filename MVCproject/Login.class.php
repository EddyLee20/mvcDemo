<?php
class Login extends User{
    //构造方法
public function __construct($info){
        $this->_username = $info['username'];
        $this->_password = $info['password'];
    }
    
    //执行方法
    public function _query(){
        
        if(empty($this->_username) || empty($this->_password)){
            Tool::error('用户名或密码不能为空');
        }
        $xml = simplexml_load_file('user.xml');
        if($this->_username == $xml->username && $this->_password == $xml->password){
            setcookie('user',$this->_username);
            Tool::success('['.$this->_username.']欢迎回来！', '/index.php?index=index');
        }else{
            Tool::error('用户名或密码错误');
        }
    }
    
    //执行验证
    public function _check(){
        
    }
}
?>