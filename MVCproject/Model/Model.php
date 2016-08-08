<?php
class Model{
    var $dao;
    //! 构造函数
    /**
     * 构造一个新的Model对象
     * @param $dao是一个DataAccess对象
     * 该参数以地址传递（&$dao）的形式传给Model
     * 并保存在Model的成员变量$this->dao中
     * Model通过调用$this->dao的fetch方法执行所需的SQL语句
     */
    function __construct($dao){
        $this->dao = $dao;
    }
    
    function listNote() {
        $this->dao->fetch("SELECT * FROM note");
    }
    
    function postNote($name,$content){
        $sql = "INSERT INTO `test`.`note`(`id`,`name`,`content`,`ctime`)VALUES(null,$name,$content,time())";
        $this->dao->fetch($sql);
    }
    
    function deleteNote($id){
        $sql = "DELETE FROM test`.`note` WHERE `id`=$id";
        $this->dao->fetch($sql);
    }
    
    function getNote() {
        if ($note = $this->dao->getRow()){
            return $note;
        }else{
            return false;
        }
    }
}
?>