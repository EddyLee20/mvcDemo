<?php 
class Reg extends User{
    //构造方法
    public function __construct($info){
        $this->_username = $info['username'];
        $this->_password = $info['password'];
        $this->_notpwd = $info['notpwd'];
        $this->_email = $info['email'];
    }
    //执行方法
    public function _query(){
       
        if($this->_password != $this->_notpwd){
            Tool::error('两次密码不一致');
        }else{
        $xml = <<<_xml
<?xml version="1.0" encoding="UTF-8"?>
<user>
    <username>$this->_username</username>
    <password>$this->_password</password>
    <email>$this->_email</email>
</user>
_xml;
      
        $simple = new SimpleXMLElement($xml);
        if($simple->asXML('user.xml')) Tool::success(恭喜您，注册成功, '/');
        }
    }
    
    //执行验证
    public function _check(){
        
    }
}
?>