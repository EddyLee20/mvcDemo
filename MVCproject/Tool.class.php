<?php
final class Tool{
    private $_msg;
    private $_url;
    //成功跳转
    static function success($_msg,$_url){
        echo '<script type="text/javascript">alert("'.$_msg.'");location.href="'.$_url.'";</script>';
    }
    //失败跳转
    static function error($_msg){
        echo '<script type="text/javascript">alert("'.$_msg.'");history.back();</script>';
    }
}
?>