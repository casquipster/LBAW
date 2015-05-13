<?php /* Smarty version Smarty-3.1.15, created on 2015-05-12 20:02:17
         compiled from "/opt/lbaw/lbaw1464/public_html/frmk/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110127639255417da6b63952-73143568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de6bd1983b78d61d8cbd4335247084d09ac98740' => 
    array (
      0 => '/opt/lbaw/lbaw1464/public_html/frmk/templates/header.tpl',
      1 => 1431453641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110127639255417da6b63952-73143568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55417da6bb5ca8_24979415',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55417da6bb5ca8_24979415')) {function content_55417da6bb5ca8_24979415($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>STOCKR</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- for jquery-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />-->
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>
  <link rel="stylesheet" href="/css/style.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
  <meta charset = "UTF-8">

</head>

<body>
<header>
<div class = "navbar navbar-inverse navbar-static-top">
    <div class= "container">
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" class="navbar-brand">
				<div class="img" ><img style="margin-top:-25px" src="../../images/logo.png" width="90" height="70"></div></a>
      <button class ="navbar-toggle" data-toggle ="collapse" data-target =".navHeaderCollapse">
        <span class ="icon-bar"></span>
        <span class ="icon-bar"></span>
        <span class ="icon-bar"></span>
      </button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class ="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form navbar-left" role="search">
							<li class="dropdown-list">
								<a class="dropdown" id="dropdown">
									<div id="search_data_div">
										<input id="searchData" type="text" placeholder="Search">
									</div>
								</a>
								<ul class="dropdown-menu">
									<div id = "results">
									</div>
								</ul>
							</li>
						</form>
					</li>
					</ul>
    	
    	<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php }?>
</div>
  	</div>
	</div>
	</header>
	 <div id="error_messages">
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
      <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
    <?php } ?>
    </div>
    <div id="success_messages">
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
      <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
    <?php } ?>
    </div>
<?php }} ?>
