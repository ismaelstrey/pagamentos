<?php /* Smarty version Smarty-3.1.13, created on 2016-07-19 22:20:05
         compiled from "ui\theme\softhash\pl-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5184578edfd54485d6-01886142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79743f3561b72e8a4816ebb886649dcf80cdf59b' => 
    array (
      0 => 'ui\\theme\\softhash\\pl-list.tpl',
      1 => 1453003638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5184578edfd54485d6-01886142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
    '_L' => 0,
    'pl_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_578edfd5486de2_60561288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578edfd5486de2_60561288')) {function content_578edfd5486de2_60561288($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default" id="uploading_inside">
                <div class="panel-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugin_upload/" class="dropzone" id="upload_container">

                        <div class="dz-message">
                           <h3> <i class="fa fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['plugin_drop_help'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['plugin_upload_help'];?>
</span>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
</h5>

            </div>
            <div class="ibox-content">

                <div class="project-list mt-md">
                    <div id="progressbar">
                    </div>

                    <div id="sysfrm_ajaxrender"><table class="table table-hover">
                            <tbody>
                            <?php echo $_smarty_tpl->tpl_vars['pl_html']->value;?>

                            </tbody>
                        </table></div>


                </div>
            </div>
        </div>
    </div>
</div>


<input type="hidden" id="_msg_unzipping" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Unzipping'];?>
 ...">
<input type="hidden" id="_msg_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>