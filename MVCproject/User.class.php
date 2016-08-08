<?php
abstract class User{
    //成员字段
    protected $_username;
    protected $_password;
    protected $_notpwd;
    protected $_email;
     
    //执行方法 
    abstract function _query();
    
    //执行验证
    abstract function _check();
}
   
?>