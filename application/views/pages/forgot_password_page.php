<h3>Please Enter your email here</h3>
<?php echo form_open(site_url("sent-email"), array(
	"method" => "post",
))?>
<input type="email" name="email">
<input type="submit">
<?php echo form_close()?>
