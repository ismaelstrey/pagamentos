<?php /* Smarty version Smarty-3.1.13, created on 2016-07-19 22:21:15
         compiled from "ui\theme\softhash\feature-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284578ee01b4df6f4-30913623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72398d113670c57baf3b85fa33202cd21653f06' => 
    array (
      0 => 'ui\\theme\\softhash\\feature-settings.tpl',
      1 => 1453003636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284578ee01b4df6f4-30913623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_578ee01b53d302_89279572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578ee01b53d302_89279572')) {function content_578ee01b53d302_89279572($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-md-6">






        <div class="ibox float-e-margins" id="ui_settings">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</h5>


            </div>
            <div class="ibox-content">
                <table class="table table-hover">
                    <tbody>

                    <tr>
                        <td width="80%"><label for="config_accounting"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Accounting'];?>
 </label></td>
                        <td> <input type="checkbox" <?php if (get_option('accounting')=='1'){?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_accounting"></td>
                    </tr>

                    <tr>
                        <td width="80%"><label for="config_invoicing"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Invoicing'];?>
 </label></td>
                        <td> <input type="checkbox" <?php if (get_option('invoicing')=='1'){?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_invoicing"></td>
                    </tr>

                    <tr>
                        <td width="80%"><label for="config_quotes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Quotes'];?>
 </label></td>
                        <td> <input type="checkbox" <?php if (get_option('quotes')=='1'){?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_quotes"></td>
                    </tr>

                    
                        
                        
                    

                    </tbody>
                </table>



            </div>
        </div>


    </div>



</div>




<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>