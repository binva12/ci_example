<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listing All Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<h3><?php echo $print_hello_world; ?></h3>
<div class="container" style="margin-top:4%">
	<a href="<?php echo site_url('login-page')?>" class="btn btn-primary pull-right">Back to login</a>
  <h2>List All Users</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>Name</th>
		<th>Email</th>
		<th>user admin</th>
		<th>phone_number</th>
      </tr>
    </thead>
    <tbody>

		<?php
			
			if(count($all_users) > 0) {

				$user_count = 1;
				foreach($all_users as $index => $user) {
					?>
					<tr>
        				<td><?php echo $user_count++; ?></td>
        				<td><?php echo $user->user_name ?></td>
        				<td><?php echo $user->user_email ?></td>
						<td><?php echo $user->user_admin ?></td>  
						<td><?php echo $user->phone_number ?></td>  
					
					</tr> 
					<?php
				}
			}
		?>
           
     
    </tbody>
  </table>
</div>

</body>
</html>

