<?php
    function show_message($msg, $url=null) {
        if (!empty($url)) {
            die("<script>alert('$msg'); location.href='$url';</script>");  // 跳转到指定页面
        } else {
            die("<script>alert('$msg'); history.go(-1);</script>");  // 返回上一页
        }

    }
    function verify() {
        // 随机获取4个英文和数字字符串
        function verification_code() {
            $arr = array_merge(range('a','z'), range('A','Z'), range(0,9));
            shuffle($arr);
            $subarr = array_slice($arr, 0, 4);
            return implode($subarr);
        }
        $code = verification_code();
        $_SESSION['verify'] = strtolower($code);  // 存储小写验证码
        header('content-type:image/png;');  // 告诉浏览器这是个图片
        $im = imagecreatetruecolor(100,42);  // 画布
        $blue = imagecolorallocate($im,121,178,209);  // 颜色
        imagefill($im,0,0, $blue);  // 填充画布颜色
        for ($i = 0; $i < strlen($code); $i++) {
            $random_color = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));  // 随机颜色
            for ($num = 0; $num < 50; $num++) {
                imagesetpixel($im, mt_rand(0, 80), mt_rand(0, 30), $random_color);  // 干扰点
            }
            imageline($im, mt_rand(0, 80), mt_rand(0, 30), mt_rand(0, 80), mt_rand(0, 30), $random_color);  // 干扰线段
            imageline($im, mt_rand(0, 80), mt_rand(0, 30), mt_rand(0, 80), mt_rand(0, 30), $random_color);  // 干扰线段
            // 验证码字符串
            imagettftext($im,18, mt_rand(-10, 10),18 * $i + 10, mt_rand(20, 25),$random_color, 'fonts/msyh.ttc', $code[$i]);
        }
        imagepng($im);  // 显示图像
        imagedestroy($im);  // 销毁图像
        echo $code;
    }
?>