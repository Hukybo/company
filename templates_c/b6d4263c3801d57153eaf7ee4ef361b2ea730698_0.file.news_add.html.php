<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-17 15:54:02
  from 'D:\OfficeAndMac\myphp\company\templates\admin\news_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e21681a5c35b3_19398135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6d4263c3801d57153eaf7ee4ef361b2ea730698' => 
    array (
      0 => 'D:\\OfficeAndMac\\myphp\\company\\templates\\admin\\news_add.html',
      1 => 1579247630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5e21681a5c35b3_19398135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
        <article class="page-container">
            <form class="form form-horizontal" id="form-article-add">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" name="title">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <span class="select-box">
                            <select name="cat_id" class="select">
                                <option value="">==请选择分类==</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                                    </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select> </span> </div> </div> <div class="row cl">
                                        <label class="form-label col-xs-4 col-sm-2">关键词：</label>
                                        <div class="formControls col-xs-8 col-sm-9">
                                            <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];?>
"
                                                placeholder="多个关键词之间请使用半角逗号" name="keywords">
                                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">摘要：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <textarea name="remark" cols="" rows="" class="textarea"
                                onKeyUp="$.Huitextarealength(this,100)"><?php echo $_smarty_tpl->tpl_vars['row']->value['remark'];?>
</textarea>
                            <p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">来源：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['resourec'];?>
" name="resourec">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">阅读量：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['read_num'];?>
" name="read_num">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">发布日期：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss' })"
                                name="publish_time" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['publish_time'];?>
" readonly class="input-text Wdate">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">是否置顶：</label>
                        <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                            <div class="check-box">
                                <input type="checkbox" id="checkbox-moban" name="is_top" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['is_top'] == 1) {?>checked
                                <?php }?>> <label for="checkbox-moban">&nbsp;</label>
                            </div>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <span class="btn-upload form-group">
                                <input class="input-text upload-url" type="text" id="uploadfile" readonly
                                    style="width:200px">
                                <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i
                                        class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                                <input type="file" multiple name="file" class="input-file">
                            </span>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">文章内容：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:400px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

                            <?php echo '</script'; ?>
>
                        </div>
                    </div>
                    <div class="row cl">
                        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                        </div>
                    </div>
            </form>
        </article>

        <!--请在下方写此页面业务相关的脚本-->

        <?php echo '<script'; ?>
 type="text/javascript">
            $(function () {
                $('.skin-minimal input').iCheck({
                    checkboxClass: 'icheckbox-blue',
                    radioClass: 'iradio-blue',
                    increaseArea: '20%'
                });

                //表单验证
                $("#form-article-add").validate({
                    rules: {
                        title: {
                            required: true,
                        },
                        // cat_id: {
                        //     required: true,
                        // }
                    },
                    messages: {
                        title: {
                            required: "必须填写标题",
                        },
                        cat_id: {
                            required: "必须选择分类",
                        }
                    },
                    onkeyup: false,
                    focusCleanup: true,
                    success: "valid",
                    submitHandler: function (form) {
                        $(form).ajaxSubmit({
                            type: 'post',
                            url: "index.php?m=admin&c=news_add",
                            success: function (data) {
                                if (data == 1) {
                                    layer.msg('操作成功!', {
                                        icon: 1,
                                        time: 1000
                                    });
                                    setTimeout(function () {
                                        // 添加成功后，关闭窗口，刷新上级窗口
                                        var index = parent.layer.getFrameIndex(
                                            window
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
                    }
                });
                var ue = UE.getEditor('editor', {
                    "textarea": "content"
                });
            });
        <?php echo '</script'; ?>
>
        <!--/请在上方写此页面业务相关的脚本-->
    </body>

    </html><?php }
}
