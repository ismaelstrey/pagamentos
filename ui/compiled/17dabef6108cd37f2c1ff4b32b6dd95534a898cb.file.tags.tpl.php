<?php /* Smarty version Smarty-3.1.13, created on 2016-07-20 10:39:05
         compiled from "ui\theme\softhash\tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20314578f8d09b77d97-10152247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17dabef6108cd37f2c1ff4b32b6dd95534a898cb' => 
    array (
      0 => 'ui\\theme\\softhash\\tags.tpl',
      1 => 1453003638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20314578f8d09b77d97-10152247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_578f8d09c8d355_51526945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f8d09c8d355_51526945')) {function content_578f8d09c8d355_51526945($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
 </h5>
    </div>
    <div class="ibox-content">

        <table class="table table-bordered table-hover sys_table">
            <thead>
            <tr>

                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tag'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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

                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['text'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>