<?php /* Smarty version Smarty-3.1.19, created on 2018-03-13 14:36:49
         compiled from "C:\Users\bleguern\Google Drive\PERSO\DEV\workspace\prestashop\admin630ym9hbo\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:294705aa7d3f1dd15e5-19254217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '159ae28b86fd229cc2034a7daeadb0c97579ec83' => 
    array (
      0 => 'C:\\Users\\bleguern\\Google Drive\\PERSO\\DEV\\workspace\\prestashop\\admin630ym9hbo\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1520937762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294705aa7d3f1dd15e5-19254217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa7d3f200a249_68568659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa7d3f200a249_68568659')) {function content_5aa7d3f200a249_68568659($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="delete">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
