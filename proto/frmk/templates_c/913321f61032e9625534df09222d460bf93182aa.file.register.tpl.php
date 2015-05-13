<?php /* Smarty version Smarty-3.1.15, created on 2015-05-12 20:16:31
         compiled from "/opt/lbaw/lbaw1464/public_html/frmk/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:737176119553fe7bb443637-00926684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '913321f61032e9625534df09222d460bf93182aa' => 
    array (
      0 => '/opt/lbaw/lbaw1464/public_html/frmk/templates/users/register.tpl',
      1 => 1431454589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '737176119553fe7bb443637-00926684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553fe7bb520732_25979656',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fe7bb520732_25979656')) {function content_553fe7bb520732_25979656($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container" style="margin-top:40px">
   <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong> Registration</strong>
          </div>
           <div class="panel-body">
            <form role="form" action="../../actions/users/register.php" method="post" enctype="multipart/form-data">
              <fieldset>
                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-briefcase"></i>
                        </span> 
                        <input class="form-control" placeholder="Full Name" name="name" type="text" autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
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
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input class="form-control" placeholder="Repeat Password" name="passwordcheck" type="password" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <input class="form-control" placeholder="E-mail" name="email" type="e-mail" autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input class="form-control" placeholder="Address" name="address" type="text" autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Phone Number" name="phonenumber" type="tel" autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Date of Birth" name="birthday" type="date" autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        Gender
                        <div class="radio">
                        <label><input name="gender" type="radio" value="m" autofocus>Male</label>
                        </div>
                        <div class="radio">
                        <label><input name="gender" type="radio" value="f" autofocus>Female</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                      Type of registration
                      <div class="radio">
                        <label><input name="type" type="radio" value="0" autofocus>Client</label>
                        </div>
                        <div class="radio">
                        <label><input name="type" type="radio" value="1" autofocus>Administrator</label>
                        </div>
                      </div>
                    </div>

                    <div>
            <h3 id="termscond" class="dark-grey">Terms and Conditions</h3>
              <p>
                By clicking on "Register" you agree to Stockr's Terms and Conditions
              </p>
            <p>
              While rare, prices are subject to change based on exchange rate fluctuations - 
              should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price.
            </p>
            <p>
              Should there be an error in the description or pricing of a product, we will provide you with a full refund.
            </p>
            <p>
              Acceptance of an order by us is dependent on our suppliers ability to provide the product. 
            </p>
                    <div class="form-group">
                      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Register">
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
