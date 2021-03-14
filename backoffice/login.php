<?php 
	require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>เข้าสู่ระบบ | Goodup</title>
  <link href="assets/login/css/fontface.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/login/css/reset.min.css">
  <link rel="stylesheet" href="assets/login/css/style.css">
	<link rel="shortcut icon" type="../assets/img/png" href="../assets/img/fav.jpg"/>

</head>
<body>
<!-- partial:index.partial.html -->
<!--
  This was created based on the Dribble shot by Deepak Yadav that you can find at https://goo.gl/XRALsw
  I'm @hk95 on GitHub. Feel free to message me anytime.
-->

<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
				<img class="brand-img" src="assets/images/logo.png" alt="..."><br><br>
        <h2 class="user_unregistered-title">Back Office Goodup</h2>
        <p class="user_unregistered-text">Copyright © 2021 All RIGHT RESERVED</p>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="forms_form" method="post">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Username" name="username" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" name="password" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
			<input type="hidden" id="is_login" name="is_login" value="1" />
            <button type="submit" class="forms_buttons-action">Log In</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- partial -->
  <script  src="assets/login/js/script.js"></script>

</body>
</html>
