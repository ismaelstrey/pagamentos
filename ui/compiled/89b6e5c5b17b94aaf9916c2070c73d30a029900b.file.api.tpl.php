<?php /* Smarty version Smarty-3.1.13, created on 2016-07-20 10:39:17
         compiled from "ui\theme\softhash\api.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25995578f8d15d283e2-22606610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b6e5c5b17b94aaf9916c2070c73d30a029900b' => 
    array (
      0 => 'ui\\theme\\softhash\\api.tpl',
      1 => 1453003636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25995578f8d15d283e2-22606610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'api_url' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_578f8d15ddbf00_76334377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f8d15ddbf00_76334377')) {function content_578f8d15ddbf00_76334377($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Application URL'];?>
:</label>
            <input type="text" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add API Access'];?>
</h5>

            </div>
            <div class="ibox-content" id="ibox_form">


                <form class="form-horizontal" method="post" id="tform" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_post/">



                    <div class="form-group">
                        <label for="label" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Label'];?>
</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="label" name="label">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



</div>

<div class="row">


    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Access'];?>
</h5>

            </div>
            <div class="ibox-content">

                <table class="table table-bordered sys_table">
                    <thead>
                    <tr>
                        <th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Label'];?>
</th>
                        <th width="60%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Key'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['ds']->value['label'];?>
 </td>
                            <td><input class="form-control input-sm" type="text" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['apikey'];?>
"></td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_regen/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-xs"><i class="fa fa-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Re Generate Key'];?>
</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                </td>
                        </tr>

                        <?php }
if (!$_smarty_tpl->tpl_vars['ds']->_loop) {
?>
                        <tr>

                            <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
 </td>

                        </tr>
                    <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

<input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>