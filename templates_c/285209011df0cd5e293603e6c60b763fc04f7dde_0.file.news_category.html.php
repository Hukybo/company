<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 16:42:35
  from 'D:\OfficeAndMac\myphp\company\templates\admin\news_category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1d7efb3bc9c3_66072147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '285209011df0cd5e293603e6c60b763fc04f7dde' => 
    array (
      0 => 'D:\\OfficeAndMac\\myphp\\company\\templates\\admin\\news_category.html',
      1 => 1578991352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5e1d7efb3bc9c3_66072147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 新闻中心 <span
				class="c-gray en">&gt;</span> 新闻分类 <a class="btn btn-success radius r"
				style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);"
				title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		<div class="page-container">
			<div class="cl pd-5 bg-1 bk-gray">
				<span class="l">
					<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i
							class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
					<a class="btn btn-primary radius"
						onclick="show_window('添加分类', 'index.php?m=admin&c=news_category_add')" href="javascript:;">
						<i class="Hui-iconfont">&#xe600;</i> 添加分类
					</a>
				</span>
				<span class="r">共有数据：<strong id="total">
						<?php echo $_smarty_tpl->tpl_vars['list_count']->value;?>

					</strong> 条</span>
			</div>
			<div class="mt-20">
				<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">ID</th>
							<th width="80">分类</th>
							<th width="80">排序</th>
							<th width="60">显示</th>
							<th width="60">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
							<tr class="text-c">
								<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="del[]"></td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>

								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>

								</td>
								<td class="td-status">
									<?php if ($_smarty_tpl->tpl_vars['v']->value['is_show'] == 1) {?>
										<span class="label label-success radius">显示</span>
										<?php } else { ?>
											<span class="label label-danger radius">隐藏</span>
											<?php }?> </td> <td class="f-14 td-manage">
												<a style="text-decoration:none" class="ml-5"
													onClick="show_window('修改分类','index.php?m=admin&c=news_category_add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')"
													href="javascript:;" title="编辑"><i
														class="Hui-iconfont">&#xe6df;</i></a>

												<a style="text-decoration:none" class="ml-5"
													onClick="article_del(this,'<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" href="javascript:;"
													title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
								</td>
							</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </tbody> </table> </div> </div> <!--请在下方写此页面业务相关的脚本-->
								<?php echo '<script'; ?>
 type="text/javascript">
									/*资讯-删除*/
									function article_del(obj, id) {
										layer.confirm('您确认要删除吗？', function (index) {
											$.ajax({
												type: 'POST',
												url: 'index.php?m=admin&c=news_category_del',
												data: {
													id: id
												},
												dataType: 'json',
												success: function (data) {
													if (data == 1) {
														var total = parseInt($.trim($("#total").text()));
														total--
														$(obj).parents("tr").remove();
														$('#total').text(total);
														layer.msg('删除成功!', {
															icon: 1,
															time: 1000
														});
													} else {
														layer.msg('删除失败!', {
															icon: 2,
															time: 1000
														});
													}

												},
												error: function (data) {
													console.log(data.msg);
												},
											});
										});
									}

									function datadel() {
										var id = '';
										$("input[name='del[]']:checked").each(function () {
											id = id + $(this).val() + ',';
										})
										if (id == '') {
											layer.msg('请选择删除项', {
												icon: 2,
												time: 1000
											});
											return false;
										}
										layer.confirm('您确认要删除吗？', function (index) {
											$.ajax({
												type: 'POST',
												url: 'index.php?m=admin&c=news_category_del',
												data: {
													id: id
												},
												dataType: 'json',
												success: function (data) {
													if (data == 1) {
														var total = parseInt($.trim($("#total").text()));
														$("input[name='del[]']:checked").each(function () {
															$(this).parents("tr").remove();
															total--;
														})
														$('#total').text(total);
														layer.msg('删除成功!', {
															icon: 1,
															time: 1000
														});
													} else {
														layer.msg('删除失败!', {
															icon: 2,
															time: 1000
														});
													}
												},
												error: function (data) {
													console.log(data.msg);
												},
											});
										});
									}
								<?php echo '</script'; ?>
>
	</body>

	</html><?php }
}
