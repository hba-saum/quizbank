<html>
<head>
	<title>Quiz Bank | Home</title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/reg.css" />
</head>

<body>
	<!--header-->
	<div class="header">
		<div class="logo"><a href="index.php"></a><img src="img/logo.png" /></a></div>
		
		<div class="search">
			<form>
				<input type="text" />
				<input type="submit" value="Search" class="searchBtn" />
				
			</form>
		</div>		
		
		<div class="navLink">
			<a href="index.php">Home</a>
			<a href="login.php">Login</a>
			<div id="regBtn" onMouseOver="drpVisible()" onMouseOut="drpHidden()"><a href="#">Register</a>
				<div id="drpMenu">
					<a href="#" class="drpMenua">Quistion Setter</a>
					<a href="#" class="drpMenua">Problem Solver</a>
				</div>
			</div>
		</div>
	</div>
	
	<!--body-->
	<div class="body">
		<div class="regBody">
			<center><h2>Register as Question Setter</h2></center>
			
			<center>
			<div class="regForm">
				<div class="formItem">
				
					<input type="text" placeholder="First Name" name="firstName" />
					<input type="text" placeholder="Last Name" name="lastName" />
				</div>
				
				<div class="formItem">
					<input type="text" placeholder="User Name" name="username" />					
				</div>
				
				<div class="formItem">
					<p>Date of Birth</p>
					<input type="date" name="date" />					
				</div>
						
				<div class="formItem">
					<input type="text" placeholder="Address" name="address" />					
				</div>
				 
				<div class="formItem">
					<input type="text" placeholder="Email" name="email" />					
				</div>
				
				<div class="formItem">
					<input type="text" placeholder="Mobile Number" name="mobNo" />					
				</div>
				
				<div class="formItem">
					<input type="password" placeholder="Password" name="pass" />					
				</div>
				
				<div class="formItem">
					<input type="submit" value="Register"/>					
				</div>
								
			</div>
			</center>
		</div>
		
		
		
	</div>
	
	
	
	<script>
		function drpHidden(){
			document.getElementById("drpMenu").style.display = "none";
		}
		
		function drpVisible(){
			document.getElementById("drpMenu").style.display = "block";
		}

		
	</script>
	
</body>
</html>