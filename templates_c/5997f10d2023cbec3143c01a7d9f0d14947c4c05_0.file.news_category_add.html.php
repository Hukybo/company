<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-10 17:18:31
  from 'D:\OfficeAndMac\myphp\company\templates\admin\news_category_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1841670c4e50_73442479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5997f10d2023cbec3143c01a7d9f0d14947c4c05' => 
    array (
      0 => 'D:\\OfficeAndMac\\myphp\\company\\templates\\admin\\news_category_add.html',
      1 => 1578647901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5e1841670c4e50_73442479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<article class="page-container">
			<form class="form form-horizontal" id="form-admin-add">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" name="name">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>显示：</label>
					<div class="formControls col-xs-8 col-sm-9 skin-minimal">
						<div class="radio-box">
							<input name="is_show" type="radio" id="show-1" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['is_show'] == 1) {?>checked>
							<?php }?> <label for="show-1">显示</label>
						</div>
						<div class="radio-box">
							<input type="radio" id="show-2" name="is_show" value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['is_show'] == 0) {?>checked>
							<?php }?> <label for="show-2">隐藏</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>排序：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sort'];?>
" name="sort">
					</div>
				</div>
				<div class="row cl">
					<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
						<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
					</div>
				</div>
			</form>
		</article>

		<?php echo '<script'; ?>
 type="text/javascript">
			$(function () {
				$('.skin-minimal input').iCheck({
					checkboxClass: 'icheckbox-blue',
					radioClass: 'iradio-blue',
					increaseArea: '20%'
				});

				$("#form-admin-add").validate({
					rules: {
						name: {
							required: true,
						}
					},
					messages: {
						name: {
							required: '分类名称必须填写'
						}
					},
					onkeyup: false,
					focusCleanup: true,
					success: "valid",
					submitHandler: function (form) {
						$(form).ajaxSubmit({
							type: 'post',
							url: "index.php?m=admin&c=news_category_add",
							success: function (data) {
								if (data == 1) {
									layer.msg('操作成功!', {
										icon: 1,
										time: 1000
									});
									setTimeout(function () {
										// 添加成功后，关闭窗口，刷新上级窗口
										var index = parent.layer.getFrameIndex(window
											.name);
										parent.location.reload();
										parent.layer.close(index);
									}, 2000);

								} else {
									layer.msg('操作失败!', {
										icon: 2,
										time: 1000
									});
								}
							},
							error: function (XmlHttpRequest, textStatus, errorThrown) {
								layer.msg('error!', {
									icon: 1,
									time: 1000
								});
							}
						});
						// var index = parent.layer.getFrameIndex(window.name);
						// parent.$('.btn-refresh').click();
						// parent.layer.close(index);
					}
				});
			});
		<?php echo '</script'; ?>
>
		<!--/请在上方写此页面业务相关的脚本-->
	</body>

	</html><?php }
}
