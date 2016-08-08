<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<?php 
//自动加载
function __autoload($_className){
    require './'.$_className.'.class.php';
}
//实例化主类
if (isset($_GET['index'])){
    $_main = new Main($_GET['index']);
}else{
    $_main = new Main();
}
//运行
$_main->_run();
?>
</html>