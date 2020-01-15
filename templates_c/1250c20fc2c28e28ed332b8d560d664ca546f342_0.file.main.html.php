<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-15 15:18:29
  from 'D:\OfficeAndMac\myphp\company\templates\admin\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1ebcc56fd973_11770194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1250c20fc2c28e28ed332b8d560d664ca546f342' => 
    array (
      0 => 'D:\\OfficeAndMac\\myphp\\company\\templates\\admin\\main.html',
      1 => 1579072708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5e1ebcc56fd973_11770194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<header class="navbar-wrapper">
			<div class="navbar navbar-fixed-top">
				<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs"
						href="/aboutHui.shtml">Tencent 腾讯管理系统</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs"
						href="/aboutHui.shtml">H-ui</a>
					<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>

					<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
						<ul class="cl">
							<li>
								<?php echo $_SESSION['admin']['nickname'];?>

							</li>
							<li class="dropDown dropDown_hover">
								<a href="#" class="dropDown_A">
									<?php echo $_SESSION['admin']['username'];?>
<i class="Hui-iconfont">&#xe6d5;</i>
								</a>
								<ul class="dropDown-menu menu radius box-shadow">
									<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
									<li><a href="index.php?m=admin&c=logout">退出</a></li>
								</ul>
							</li>
							<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i
										class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
							<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;"
									class="dropDown_A" title="换肤"><i class="Hui-iconfont"
										style="font-size:18px">&#xe62a;</i></a>
								<ul class="dropDown-menu menu radius box-shadow">
									<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
									<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
									<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
									<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
									<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
									<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<aside class="Hui-aside">
			<div class="menu_dropdown bk_2">
				<dl id="menu-article">
					<dt><i class="Hui-iconfont">&#xe616;</i> 新闻中心<i
							class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
					<dd>
						<ul>
							<li><a data-href="index.php?m=admin&c=news_category" data-title="新闻分类"
									href="javascript:void(0)">新闻分类</a></li>
							<li><a data-href="index.php?m=admin&c=news_list" data-title="新闻列表"
									href="javascript:void(0)">新闻列表</a></li>
						</ul>
					</dd>
				</dl>
				<dl id="menu-product">
					<dt><i class="Hui-iconfont">&#xe620;</i> 产品中心<i
							class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
					<dd>
						<ul>
							<li><a data-href="product-category.html" data-title="产品分类"
									href="javascript:void(0)">产品分类</a></li>
							<li><a data-href="product-list.html" data-title="产品列表" href="javascript:void(0)">产品列表</a>
							</li>
						</ul>
					</dd>
				</dl>
				<dl id="menu-admin">
					<dt><i class="Hui-iconfont">&#xe62d;</i> 权限管理<i
							class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
					<dd>
						<ul>
							<li><a data-href="admin-role.html" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
							<li><a data-href="admin-permission.html" data-title="权限管理"
									href="javascript:void(0)">权限管理</a></li>
							<li><a data-href="admin-list.html" data-title="管理员列表" href="javascript:void(0)">管理员列表</a>
							</li>
						</ul>
					</dd>
				</dl>
				<dl id="menu-system">
					<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i
							class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
					<dd>
						<ul>
							<li><a data-href="system-base.html" data-title="系统设置" href="javascript:void(0)">系统设置</a>
							</li>
							<li><a data-href="system-category.html" data-title="轮播图" href="javascript:void(0)">轮播图</a>
							</li>
							<li><a data-href="system-data.html" data-title="前台导航" href="javascript:void(0)">前台导航</a>
							</li>
						</ul>
					</dd>
				</dl>
			</div>
		</aside>
		<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);"
				onClick="displaynavbar(this)"></a></div>
		<section class="Hui-article-box">
			<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
				<div class="Hui-tabNav-wp">
					<ul id="min_title_list" class="acrossTab cl">
						<li class="active">
							<span title="我的桌面" data-href="index.php?m=admin&c=welcome">我的桌面</span>
							<em></em></li>
					</ul>
				</div>
				<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S"
						href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next"
						class="btn radius btn-default size-S" href="javascript:;"><i
							class="Hui-iconfont">&#xe6d7;</i></a></div>
			</div>
			<div id="iframe_box" class="Hui-article">
				<div class="show_iframe">
					<div style="display:none" class="loading"></div>
					<meta name="description"
						content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
					<iframe scrolling="yes" frameborder="0" src="index.php?m=admin&c=welcome"></iframe>
				</div>
			</div>
		</section>

		<div class="contextMenu" id="Huiadminmenu">
			<ul>
				<li id="closethis">关闭当前 </li>
				<li id="closeall">关闭全部 </li>
			</ul>
		</div>


		<!--请在下方写此页面业务相关的脚本-->
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __STATIC__;?>
lib/jquery.contextmenu/jquery.contextmenu.r2.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function () {
				$("#min_title_list li").contextMenu('Huiadminmenu', {
					bindings: {
						'closethis': function (t) {
							console.log(t);
							if (t.find("i")) {
								t.find("i").trigger("click");
							}
						},
						'closeall': function (t) {
							alert('Trigger was ' + t.id + '\nAction was Email');
						},
					}
				});
			});
			/*个人信息*/
			function myselfinfo() {
				layer.open({
					type: 1,
					area: ['300px', '200px'],
					fix: false, //不固定
					maxmin: true,
					shade: 0.4,
					title: '查看信息',
					content: '<div>管理员信息</div>'
				});
			}
		<?php echo '</script'; ?>
>


	</body>

	</html><?php }
}
