<!DOCTYPE html>
<html>
	<head>
		<title>

		</title>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body>
	<div class="row header"></div>
	<div class="container">
			<div class="row">
				<h3>Student List</h3>
			
				

					<table class="table">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Address</th>
						


					</tr>

					<?php


						foreach ($abc as $key ) {?>
							<tr>
							<td>
								<?php echo $key->id;?>
								
							</td>
							<td>
								<?php echo $key->name;?>
									
							</td>
							<td>
								<?php echo $key->address;?>
								
							</td>

							</tr>
						<?php }
					?>

					</table>
			</div>



	</div>
	<div class="row footer">
		
<span style="text-align:center">@footer</span>

	</div>

		



	</body>
</html>