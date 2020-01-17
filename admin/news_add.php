<?php

use function PHPSTORM_META\type;

require_once('init.php');
if (!empty($_POST)) {
    $data = $_POST;
    $data['publish_time'] = strtotime($data['publish_time']);
    unset($data['file']);
    if ($data['id'] > 0) {
        $sql = "insert into news (" . implode(',', array_keys($data)) . ") values ('" . implode("','", array_values($data)) . "')";
    } else {
        unset($data['id']);
        $sql = "insert into news (" . implode(',', array_keys($data)) . ") values ('" . implode("','", array_values($data)) . "')";
    }
    $ret = increase_delete_modify($sql);
    if ($ret !== false) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    $id = $_GET['id'];
    if ($id > 0) {
        $row = get_row_data("select * from news where id=$id limit 1");
    } else {
        $row = ['publish_time' => date('Y-m-d H:i:s'), 'read_num' => mt_rand(0, 1000)];
    }
    $category = get_all_data("select id,name from news_category order by sort,id desc");
    $smarty->assign('row', $row);
    $smarty->assign('category', $category);
    $smarty->display($tpl_name);
}
