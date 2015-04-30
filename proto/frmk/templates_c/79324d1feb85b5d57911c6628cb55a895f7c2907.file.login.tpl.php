<?php /* Smarty version Smarty-3.1.15, created on 2015-04-30 02:56:06
         compiled from "/opt/lbaw/lbaw1464/public_html/frmk/templates/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96414301055417da6ae6ec2-66859853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79324d1feb85b5d57911c6628cb55a895f7c2907' => 
    array (
      0 => '/opt/lbaw/lbaw1464/public_html/frmk/templates/users/login.tpl',
      1 => 1430355344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96414301055417da6ae6ec2-66859853',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55417da6b63956_68254245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55417da6b63956_68254245')) {function content_55417da6b63956_68254245($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container" style="margin-top:40px">
   <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong> Login</strong>
          </div>
           <div class="panel-body">
            <form role="form" action="../../actions/users/login.php" method="post" enctype="multipart/form-data">
              <fieldset>
                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-briefcase"></i>
                        </span> 
                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                      </div>
                    </div>
                    <div>
           
                    <div class="form-group">
                      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
      </div>
    </div>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
