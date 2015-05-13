<?php /* Smarty version Smarty-3.1.15, created on 2015-05-12 20:02:17
         compiled from "/opt/lbaw/lbaw1464/public_html/frmk/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1398696563553fe82e5151b2-33509341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16913b95e3ce8834f60e7ff4e1da2cb17ef0bae1' => 
    array (
      0 => '/opt/lbaw/lbaw1464/public_html/frmk/templates/common/menu_logged_out.tpl',
      1 => 1431453651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1398696563553fe82e5151b2-33509341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553fe82e522457_09468202',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fe82e522457_09468202')) {function content_553fe82e522457_09468202($_smarty_tpl) {?><ul class ="nav navbar-nav navbar-right">
<li><a href="about_body.php">About</a></li>
<li><a href="contact_us_body.php">Contact us</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/login.php">Login</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a></li>
</ul><?php }} ?>
