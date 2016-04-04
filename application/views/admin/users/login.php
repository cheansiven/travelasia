<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin - Login</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div id="header">
  <div class="page-full-width cf">
    <div id="login-intro" class="fl">
      <h1>Login to Admin Page</h1>
      <h5>Enter your credentials below</h5>
    </div>
    <?php include_once('application/views/admin/logo.php'); ?>
    </div>
</div>
<div id="content">
  <?php $attr_form = array('id' => 'login-form');  ?>
  <?php echo form_open('admin/users/login', $attr_form); ?>
  <fieldset>
    <p> <?php echo form_label('Email Address: ', 'email');  ?> <?php echo form_input('email', set_value('email'), 'id="email" class="round full-width-input" autofocus');  ?> </p>
    <p> <?php echo form_label('Password: ', 'password');  ?> <?php echo form_password('password', set_value('password'), 'id="login-password" class="round full-width-input" autofocus');  ?> </p>
    <p>I've <a href="#">forgotten my password</a>.</p>
    <?php echo form_submit('submit', 'Login', 'class="button round blue image-right ic-right-arrow"'); ?>
    <?php if(validation_errors() != false){?>
    <div class="error-box round" style="margin-bottom: 0px !important; margin-top:18px; padding-top:30px; color: #F00 !important;  font-size: 15px;"> <?php echo validation_errors(); ?> </div>
    <?php }?>
  </fieldset>
  <br/>
  <div class="information-box round">Just click on the "LOG IN" button to continue, no login information required.</div>
  <?php echo form_close(); ?> </div>
<?php include_once('application/views/admin/footer.php'); ?>
</body>
</html>