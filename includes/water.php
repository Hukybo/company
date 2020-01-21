<?php
function water_text($filename, $text)
{
    // 文字水印
    $image = imagecreatefromstring(file_get_contents($filename));
    $grizzle = imagecolorallocate($image, 200, 200, 200);
    list($src_w, $src_h) = getimagesize($filename);  // 获取图片大小
    $font_size = 22;
    imagettftext($image, $font_size, 0, $src_w - (mb_strlen($text) + 1) * $font_size - (mb_strlen($text) - 1) * 7.2, $src_h - $font_size, $grizzle, 'msyh.ttc', $text);
    $suffix = strtolower(strchr($filename, '.'));
    switch ($suffix) {
        case '.jpg':
            $func = 'imagejpeg';
            break;
        case '.jpeg':
            $func = 'imagejpeg';
            break;
        case '.png':
            $func = 'imagepng';
            break;
        case '.gif':
            $func = 'imagegif';
            break;
    }
    $path = dirname($filename);  // 获取文件目录
    $water = $path . "/" . date('YmdHis');
    $func($image, $water . $suffix);  // 生成目标图片
    imagedestroy($image);
    return $water;
}

function water_image($filename, $water_filename)
{
    // 图片水印
    $dst_im = imagecreatefromstring(file_get_contents($filename));
    $scr_im = imagecreatefromstring(file_get_contents($water_filename));
    list($src_w, $src_h) = getimagesize($filename);  // 获取图片大小
    list($water_w, $water_h) = getimagesize($water_filename);  // 获取图片大小
    imagecopymerge($dst_im, $scr_im, $src_w - $water_w - 50, $water_h - 50, 0, 0, $water_w, $water_h, 100);
    $suffix = strtolower(strchr($filename, '.'));
    switch ($suffix) {
        case '.jpg':
            $func = 'imagejpeg';
            break;
        case '.jpeg':
            $func = 'imagejpeg';
            break;
        case '.png':
            $func = 'imagepng';
            break;
        case '.gif':
            $func = 'imagegif';
            break;
    }
    $path = dirname($filename);  // 获取文件目录
    $water = $path . "/" . date('YmdHis');
    $func($dst_im, $water . $suffix);  // 生成目标图片
    imagedestroy($dst_im);
    imagedestroy($scr_im);
    return $water;
}

// $filename = 'images/2.jpg';
// $text = '荣耀归于上帝';
// water_text($filename, $text);
// $filename = 'images/2.jpg';
// $water_filename = 'images/3.jpg';
// water_image($filename, $water_filename);
