<?php /* Smarty version Smarty-3.1.19, created on 2018-03-13 14:32:19
         compiled from "C:\Users\bleguern\Google Drive\PERSO\DEV\workspace\prestashop\admin630ym9hbo\themes\default\template\controllers\themes_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101935aa7d2e3a948f1-56272954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4b0bec843d9967548b215de525be0c1fd247ca6' => 
    array (
      0 => 'C:\\Users\\bleguern\\Google Drive\\PERSO\\DEV\\workspace\\prestashop\\admin630ym9hbo\\themes\\default\\template\\controllers\\themes_catalog\\content.tpl',
      1 => 1520937759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101935aa7d2e3a948f1-56272954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa7d2e3b700b2_30106659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa7d2e3b700b2_30106659')) {function content_5aa7d2e3b700b2_30106659($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
