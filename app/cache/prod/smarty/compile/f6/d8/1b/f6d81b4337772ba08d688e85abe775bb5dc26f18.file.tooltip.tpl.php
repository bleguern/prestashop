<?php /* Smarty version Smarty-3.1.19, created on 2018-03-13 14:13:13
         compiled from "C:\Users\bleguern\Google Drive\PERSO\DEV\workspace\prestashop\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64355aa7ce69af38c4-40480223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6d81b4337772ba08d688e85abe775bb5dc26f18' => 
    array (
      0 => 'C:\\Users\\bleguern\\Google Drive\\PERSO\\DEV\\workspace\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1520937765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64355aa7ce69af38c4-40480223',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa7ce69b11cb0_33603453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa7ce69b11cb0_33603453')) {function content_5aa7ce69b11cb0_33603453($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
