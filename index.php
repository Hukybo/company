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

    $filename = $m.'/'.$c.'.php';
    if (file_exists($filename)) {
        include_once($filename);
    } else {
        header('location:404.html');
    }
?>
