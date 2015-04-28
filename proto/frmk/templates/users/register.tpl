{include file='common/header.tpl'}

<section id="register">
  <h2>Register</h2>

  <form action="{$BASE_URL}actions/users/register.php" method="post" enctype="multipart/form-data">
    <label>Full name:<br> 
      <input type="text" name="name" value="{$FORM_VALUES.name}"> 
      <span class="field_error">{$FIELD_ERRORS.username}</span>
    </label>
    <br>
    <label>Email:<br> 
      <input type="text" name="email" value="{$FORM_VALUES.realname}"> 
      <span class="field_error">{$FIELD_ERRORS.username}</span>
    </label>
    <br>
    <label>Username:<br> 
      <input type="text" name="username" value="{$FORM_VALUES.username}">
    </label>
    <br>
    <label>Password:<br> 
      <input type="password" name="password" value="{$FORM_VALUES.password}">
    </label>
    <br>
    <label>Gender:<br> 
      <input type="radio" name="gender" value="{$FORM_VALUES.gender}">Male<br>
<input type="radio" name="gender" value="{$FORM_VALUES.gender}">Female
    </label>
    <label>Mobile number:<br> 
      <input type="text" name="phonenumber" value="{$FORM_VALUES.phonenumber}">
    </label>
     <label>Date of Birth:<br> 
      <input type="date" name="birthday" value="{$FORM_VALUES.birthday}">
    </label>

    <input type="submit" value="Register">
  </form>

</section>

{include file='common/footer.tpl'}
