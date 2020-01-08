<?php
    require_once('init.php');
    $username = $_POST["username"];
    $password = $_POST["password"];
    $online = $_POST["online"];
    $code = strtolower($_POST["code"]);
    if (empty($username) || empty($password)) {
        show_message('账号或密码为空');
    }
    // if (empty($code)) {
    //     show_message('验证码为空');
    // }
    // if ($code != $_SESSION['verify']) {
    //     show_message('验证码错误', 'index.php?m=admin&c=index');
    // }

    $sql = "select * from user";
    $row = get_row_data($sql);
    if ($row['username'] == $username && $row['password'] == md5($password)) {
        echo 'OK';
    } else {
        show_message('用户名不存在或密码错误', 'index.php?m=admin&c=index');
    }
    header('location:index.php?m=admin&c=main');
?>