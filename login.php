<?php include 'templates/header.php' ?>

<div class="container">
    <div class="jumbotron text-center">
      <h1>Login</h1>
        <div class="ink-grid">

        <div class="large-30 medium-40 small-100 push-center top-space">
          <form class="ink-form" action="admin.html">
            <fieldset>
              <div class="control-group required">
                <div class="control">
                  <input id="username" type="text" placeholder="username">
                </div>
              </div>
              <div class="control-group required">
                <div class="control">
                  <input id="password" type="password" placeholder="password">
                </div>
              </div>

        <? /* <div class="control-group">
        <ul class="control unstyled">
        <li>
        <input id="remember" type="checkbox">
        <label for="remember">Lembrar</label>
        </li>
        </ul>
        </div>*/ ?>

              <div class="control-group">
                <div class="control">
                  <input type="submit" value="Entrar">
                </div>
              </div>
      </fieldset>
    </form>
  </div>
</div>
<?php include 'templates/footer.php' ?>
