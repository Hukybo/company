<?php
    $link = @mysqli_connect('localhost', 'root', 'Hkb871226+', 'company') or die(mysqli_connect_errno());  // 连接MySQL，并且屏蔽错误
    mysqli_set_charset($link, 'utf8') or die(mysqli_error($link));  // 设置编码
    
    // 增删改
    function increase_delete_modify($sql) {
        global $link;
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));  // 执行语句
        if ($result) {
            return mysqli_affected_rows($link);
        }
        return false;
    }

    // 查询多行数据
    function get_all_data($sql) {
        global $link;
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        $list = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);  // 如果是查询语句，需要释放
        return $list;
    }

    // 查询一行数据
    function get_row_data($sql) {
        global $link;
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        $list = mysqli_fetch_assoc($result);
        mysqli_free_result($result);  // 如果是查询语句，需要释放
        return $list;
    }

    // 查询一个数据
    function get_one_data($sql) {
        global $link;
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        $list = mysqli_fetch_row($result);
        mysqli_free_result($result);  // 如果是查询语句，需要释放
        return $list[0];
    }

    // 分页
    function page($totalRows, $listRows=5) {
        $pageStr = '';
        $totalPages = ceil($totalRows/$listRows);
        $nowPage = isset($_GET['p']) && intval($_GET['p']) > 0 ? intval($_GET['p']) : 1;
        $nowPage = min($nowPage, $totalPages);
        if ($nowPage > 1) {
            $prevPage = $nowPage - 1;
            $pageStr .= '<a href="?p=1">首页</a>';
            $pageStr .= '<a href="?p='.$prevPage.'">上一页</a>';

        }
        for ($i = 2; $i > 0; $i--) {
            $page = $nowPage = $i;
            if ($page > 0) {
                $pageStr .= '<a href="?p='.$page.'">'.$page.'</a>';
            }
        }
        $pageStr .= "<a class='current'>{$nowPage}</a>";
        for ($i = 1; $i <= 2; $i++) {
            $page = $nowPage + $i;
            if ($page <= $totalPages) {
                $pageStr .= '<a href="?p='.$page.'">'.$page.'</a>';
            }
        }
        if ($nowPage < $totalPages) {
            $nextPage = $nowPage + 1;
            $pageStr .= '<a href="?p='.$nextPage.'">下一页</a>';
            $pageStr .= '<a href="?p='.$totalPages.'">尾页</a>';
        }
        $firstRow = ($nowPage - 1) * $listRows;
        return ['firstRow'=>$firstRow, 'listRows'=>$listRows, 'pageStr'=>$pageStr];
    }
?>