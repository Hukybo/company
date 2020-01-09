<?php
    require_once('init.php');
    if (!empty($_SESSION['admin'])) {  // 如果已经登录
        header('location:index.php?m=admin&c=main');die;
    }
    // 调用模板
    $smarty->display($tpl_name);
?>
