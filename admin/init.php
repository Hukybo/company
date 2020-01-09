<?php
    // 检测是否通过入口访问
    defined('TICKET') or die('访问不正确');

    // 分配样式路径
    define('__STATIC__', 'public/admin/');

    // 除了特定几个页面之外，后台其他页面必须登录才可以访问
    $not_login = ['index', 'login', 'verify'];
    if (!in_array($c, $not_login) && empty($_SESSION['admin'])) {
        header('location:index.php?m=admin&c=index');die;
    }

    $tpl_name = $c.'.html';
?>