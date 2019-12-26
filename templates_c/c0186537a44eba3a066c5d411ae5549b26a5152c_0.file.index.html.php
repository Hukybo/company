<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 17:46:38
  from 'D:\OfficeAndMac\myphp\company\templates\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e04817ebf2355_21046849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0186537a44eba3a066c5d411ae5549b26a5152c' => 
    array (
      0 => 'D:\\OfficeAndMac\\myphp\\company\\templates\\admin\\index.html',
      1 => 1577353594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04817ebf2355_21046849 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __STATIC__;?>
lib/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __STATIC__;?>
lib/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <link href="<?php echo __STATIC__;?>
static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo __STATIC__;?>
static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo __STATIC__;?>
static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo __STATIC__;?>
lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __STATIC__;?>
lib/DD_belatedPNG_0.0.8a-min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>DD_belatedPNG.fix('*');<?php echo '</script'; ?>
>
    <![endif]-->
    <title>后台登录 - H-ui.admin v3.1</title>
</head>
<body>
<div class="header"></div>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <form class="form form-horizontal" action="index.php?m=admin&c=login" method="post">
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input id="" name="username" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input id="" name="password" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input class="input-text size-L" name = "code" type="text" placeholder="验证码" value="" style="width:150px;">
<!--                    <img src="/?m=admin&c=verify" id="verify"> <a id="kanbuq" href="javascript:;">看不清，换一张</a> </div>-->
                    <a class="kanbuq" href="javascript:;"><img src="/?m=admin&c=verify" id="verify"></a>
                    <a class="kanbuq" href="javascript:;">看不清，换一张</a> </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <label for="online">
                        <input type="checkbox" name="online" id="online" value="1">
                        使我保持登录状态</label>
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin v3.1</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __STATIC__;?>
lib/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __STATIC__;?>
static/h-ui/js/H-ui.min.js"><?php echo '</script'; ?>
>
<!--更换验证码-->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        // 给点击事件一个函数
        $('.kanbuq').click(function () {
            // 更换src的路径，加一个随机数是为了兼容IE浏览器
            $('#verify').attr('src', $('#verify').attr('src') + '&' + Math.random())
        })
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
