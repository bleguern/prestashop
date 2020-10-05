<?php /* Smarty version Smarty-3.1.19, created on 2018-03-13 14:15:26
         compiled from "C:\Users\bleguern\Google Drive\PERSO\DEV\workspace\prestashop\admin630ym9hbo\themes\new-theme\template\components\layout\information_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72965aa7ceeeebe7a3-63078205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d90b26833fb7b74377c12584458867a26d30315' => 
    array (
      0 => 'C:\\Users\\bleguern\\Google Drive\\PERSO\\DEV\\workspace\\prestashop\\admin630ym9hbo\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1520937758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72965aa7ceeeebe7a3-63078205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informations' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa7ceeef2f386_82339524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa7ceeef2f386_82339524')) {function content_5aa7ceeef2f386_82339524($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
