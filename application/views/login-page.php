<h3>Form login</h3>
<?php echo form_open(site_url("login-process"), array(
	"method" => "post",
	"id" => "authenticate_user",

));?>

<input type="text" placeholder="user name/email" name="username_or_email">
<p>user admin name: binva12 or email: quocdat3b@yahoo.com.vn</p>
<input type="password" placeholder="password" name="user_password">
<p>user admin password: 123</p>
<input type="submit">
<?php echo form_close();?>
<a href="<?php echo site_url("signup-page")?>">Signup</a>
<a href="<?php echo site_url("forgot-password")?>">forgot the password</a>
