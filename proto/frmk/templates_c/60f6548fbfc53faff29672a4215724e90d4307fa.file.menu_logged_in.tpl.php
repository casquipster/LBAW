<?php /* Smarty version Smarty-3.1.15, created on 2015-04-30 03:04:55
         compiled from "/opt/lbaw/lbaw1464/public_html/frmk/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14412471855417fb76f64a5-14489473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60f6548fbfc53faff29672a4215724e90d4307fa' => 
    array (
      0 => '/opt/lbaw/lbaw1464/public_html/frmk/templates/common/menu_logged_in.tpl',
      1 => 1430355343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14412471855417fb76f64a5-14489473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55417fb7771e99_41971540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55417fb7771e99_41971540')) {function content_55417fb7771e99_41971540($_smarty_tpl) {?><ul class ="nav navbar-nav navbar-right"><li><a href="pages/about.php">About</a></li>
<li><a href="pages/contact_us.php">Contact us</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></li>
<li><span class="username"><a href='pages/users/profile.php'><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</a></span></li>
</ul>
<?php }} ?>
