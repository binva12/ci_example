<h3>Form register</h3>
<style>
	div.error {
		color: red;
	}
</style>
<?php echo form_open(site_url("signup-process"), array(
	"method" => "post",
	"id" => "authenticate_user",

)); ?>
<div class="form-group">
	<input type="text" placeholder="user name" name="username">
	<?php echo form_error("username", "<div class='error'>", "</div>") ?>
</div>
<div class="form-group">
	<input type="email" placeholder="email" name="email">
	<?php echo form_error("email", "<div class='error'>", "</div>")	?>
</div>
<div class="form-group">
<input type="password" placeholder="password" name="password">
<?php echo form_error("password", "<div class='error'>", "</div>")	?>
</div>
<input type="submit">
<?php echo form_close(); ?>
