<?php /*%%SmartyHeaderCode:209685aa7cd911f2142-67699008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1520937769,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '209685aa7cd911f2142-67699008',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa7e2257d83e4_40383586',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa7e2257d83e4_40383586')) {function content_5aa7e2257d83e4_40383586($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/index.php?controller=my-account" rel="nofollow">
      Your account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/prestashop/index.php?controller=identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/index.php?controller=history" title="Orders" rel="nofollow">
            Orders
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/index.php?controller=order-slip" title="Credit slips" rel="nofollow">
            Credit slips
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/index.php?controller=addresses" title="Addresses" rel="nofollow">
            Addresses
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
