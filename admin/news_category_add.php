<?php

use function PHPSTORM_META\type;

require_once('init.php');
if (!empty($_POST)) {
    $name = $_POST['name'];
    $sort = $_POST['sort'];
    $is_show = !empty($_POST['is_show']) ? intval($_POST['is_show']) : 0;
    $id = $_POST['id'];
    if ($id > 0) {
        $sql = "update news_category set name='$name',is_show='$is_show',sort='$sort' where id=$id";
    } else {
        $sql = "insert into news_category(name,is_show,sort) values('$name','$is_show','$sort')";
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
        $row = get_row_data("select * from news_category where id=$id limit 1");
    }
    $smarty->assign('row', $row);
    $smarty->display($tpl_name);
}
