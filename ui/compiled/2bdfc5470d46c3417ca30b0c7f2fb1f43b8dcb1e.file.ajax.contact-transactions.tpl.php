<?php /* Smarty version Smarty-3.1.13, created on 2016-07-20 10:52:02
         compiled from "ui\theme\softhash\ajax.contact-transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19840578f9012630501-89799543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bdfc5470d46c3417ca30b0c7f2fb1f43b8dcb1e' => 
    array (
      0 => 'ui\\theme\\softhash\\ajax.contact-transactions.tpl',
      1 => 1453003636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19840578f9012630501-89799543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'tr' => 0,
    'ds' => 0,
    '_c' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_578f9012739f43_99642683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f9012739f43_99642683')) {function content_578f9012739f43_99642683($_smarty_tpl) {?><div id="no-more-tables">
    <table class="table table-bordered sys_table">
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dr'];?>
</th>
        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
        <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
            <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr']=='0.00'){?>warning <?php }else{ ?>info<?php }?>">
                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['type']);?>
</td>

                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['amount'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['dr'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['cr'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['bal']<0){?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['bal'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span></td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
<?php }} ?>