{include file='header.tpl'}

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

{include file='common/footer.tpl'}