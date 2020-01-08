<?php
    /*
     * 项目入口
     */
    session_start();  // 建立浏览器与服务器连接
    error_reporting(E_ALL ^ E_NOTICE);  // 禁用E_NOTICE之外的所有错误报告

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

    // 产生一个凭证，使用常量（定义之后不能修改），用于网站单入口模式
    define('TICKET', 1);

    // 执行代码
    require_once('includes/function.php');
    require_once('includes/db.php');
    require_once('smarty/Smarty.class.php');

    $smarty = new Smarty;  // 启动Smarty模板引擎
    // 更改smarty部分配置
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";
    $smarty->template_dir = array('./templates/'.$m.'/');

    $filename = './'.$m.'/'.$c.'.php';
    if (file_exists($filename)) {
        include_once($filename);  // 运行指定文件
    } else {
        header('location:404.html');
    }
?>
