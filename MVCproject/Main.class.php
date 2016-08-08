<?php
class Main{
    private $_index;
    private $_send;
    
    public function __construct($_index = '') {
        $this->_index = $_index;
        if (isset($_POST['send'])){
            $this->_send = htmlspecialchars($_POST['send']);
        }
        
    }
    //程序运行
    public function _run(){
        //载入数据
        $this->_send();
        //载入界面
        include $this->_UI();
    }
    //显示模板页面
    private function _UI(){
        if (empty($this->_index) || !file_exists('./Tpl/'.$this->_index.'.tpl.html')){
            $this->_index = 'star';
        }
        return './Tpl/'.$this->_index.'.tpl.html';
    }
    //创建方法传递数据
    private function _send(){
        switch ($this->_send){
            case '注册':
                $this->_exec(new Reg($_POST['info']));
                break;
            case '登录':
                $this->_exec(new Login($_POST['info']));
                break;
            default:
                return false;
        }
    }
    private function _exec($_class){
        $_class->_query();
    }
}

?>