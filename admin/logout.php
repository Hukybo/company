<?php
    require_once('init.php');
    unset($_SESSION['admin']);
    header('location:index.php?m=admin&c=index');
?>