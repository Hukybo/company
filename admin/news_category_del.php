<?php
require_once('init.php');
$id = trim($_POST['id'], ',');
$sql = "delete from news_category where id in ($id)";
$ret = increase_delete_modify($sql);
if ($ret !== false) {
    echo 1;
} else {
    echo 0;
}
