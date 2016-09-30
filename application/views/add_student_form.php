<?php



?>
<!DOCTYPE html>
<html>
<head>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title></title>
</head>
<body>


<div class="container">
	
<h2>Registeration Form </h2>
	<form class="form" method="POST" action="<?php echo site_url('registrationcontroller/poststudentregistration');
?>">
		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" name="name">

		</div>

		<div class="form-group">
			<label>Email</label>
			<input class="form-control" type="text" name="email">	
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="text" name="password">	
		</div>
			<div class="form-group">
			<label>Confirm Password</label>
			<input class="form-control" type="text" name="confirm_password">	
		</div>

		<div class="form-group">
			<label>Address</label>
			<input class="form-control" type="text" name="address">	
		</div>

		<div class="form-group">
			<label>Previous College</label>
			<input class="form-control" type="text" name="prev_college">	
		</div>

		<div class="form-group">
			<label>Date of Birth</label>
			<input class="form-control" type="text" name="dob">	
		</div>


		<input class="btn btn-primary" type="submit" value="Submit">

	</form>

</div>

</body>
</html>