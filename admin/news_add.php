<?php

use function PHPSTORM_META\type;

require_once('init.php');
if (!empty($_POST)) {
    $data = $_POST;
    print_r(array_keys($data));
    $sql = "insert into news (" . implode(',', array_keys($data)) . ")";
} else {
    $id = $_GET['id'];
    if ($id > 0) {
        $row = get_row_data("select * from news where id=$id limit 1");
    } else {
        $row = ['publish_time' => date('Y-m-d H:i:s'), 'read_num' => mt_rand(0, 1000)];
    }
    $category = get_all_data("select id,name from news_category order by sort,id desc");
    $smarty->assign('row', $row);
    $smarty->display($tpl_name);
}
