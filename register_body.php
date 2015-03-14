<?php include 'templates/header.php' ?>

<div class="container" style="margin-top:40px">
   <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong> Registration</strong>
          </div>
           <div class="panel-body">
            <form role="form" action="register.php" method="POST">
              <fieldset>
                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-briefcase"></i>
                        </span> 
                        <input class="form-control" placeholder="Real Name" name="realname" type="text" autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
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
                    <div>
						<h3 class="dark-grey">Terms and Conditions</h3>
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






			
		

<?php include 'templates/footer.php' ?>