<?php
    require_once('init.php');
    $sql = 'SELECT * FROM `news_category`';
    $list = get_all_data($sql);
    $smarty->assign('list', $list);
    $smarty->assign('list_count', count($list));
    $smarty->display($tpl_name);
