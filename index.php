<?php
    /*
     * 项目入口
     */
    if (isset($_GET['m'])) {
        $m = $_GET['m'];
    } else {
        $m = 'home';
    }

    if (isset($_GET['c'])) {
        $c = $_GET['c'];
    } else {
        $c = 'index';
    }

    // 产生一个凭证，使用常量（定义之后不能修改）
    define('TICKET', 1);

    require_once('smarty/Smarty.class.php');
    $smarty = new Smarty;

    // 更改smarty部分配置
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";
    $smarty->template_dir = array('./templates/'.$m.'/');

    $filename = './templates/'.$m.'/'.$c.'.php';
    if (file_exists($filename)) {
        include_once($filename);
    } else {
        header('location:404.html');
    }
?>
