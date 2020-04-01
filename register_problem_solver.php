<!DOCTYPE html>
<html>
<head>
	<title>Quiz Bank | Register</title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/reg.css" />
	<link rel="stylesheet" href="css/header.css" />
</head>

<body>
	<!--header-->
	<?php include("header.php"); ?>
	
	<!--body-->
	<div class="body">
		<div class="regBody">
			<center><h2>Register as	Problem Solver</h2></center>
			<hr />
			<br />
			<center>
			<form action="" method="post">
				
				<div class="regForm">
				<div class="formItem">
				
					<input type="text" placeholder="First Name" name="firstName" required />
					<input type="text" placeholder="Last Name" name="lastName" required />
				</div>
				
				<div class="formItem">
					<input type="text" placeholder="User Name" name="username" required />					
				</div>
				
				<div class="formItem">
					<p>Date of Birth</p>
					<input type="date" name="date" required />					
				</div>
						
				<div class="formItem">
					<input type="text" placeholder="Address" name="address" required />					
				</div>
				 
				<div class="formItem">
					<input type="text" placeholder="Email" name="email" required />					
				</div>
				
				<div class="formItem">
					<input type="text" placeholder="Mobile Number" name="mobNo" required />					
				</div>
				
				<div class="formItem">
					<input type="password" placeholder="Password" name="pass" required />					
				</div>
				
				<div class="formItem">
					<input type="password" placeholder=" Confirm Password" name="pass_conf" required />					
				</div>
												
				<div class="formItem">
					<input type="submit" value="Register" required/>					
				</div>
								
			</div>			
			
			</form><br />

			</center>
		</div>
		
		
		
	</div>
	
	
	
	<script>

		
	</script>
	
</body>
</html>