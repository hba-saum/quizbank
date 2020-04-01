<!DOCTYPE html>
<html>
<head>
	<title>Quiz Bank | Home</title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/header.css" />
	
</head>


<body>
	<!--header-->
	<?php include("header.php"); ?>
	
	<!--body-->
	<div class="body">
		<!-- body Header-->
		<div class="bodyHeader">
			<img src="img/logo.png" />
			<p>An online platform to share and get quizzes.</p>
		</div>
		
		<!--middle-->
		<div class="bodyMiddle">
			<p>
				<b>Quiz Bank</b> is an online platform where people can set quizzes (with MCQ) and others can solve it. User (question setter) can post quizzes of past exams (ex: SSC, HSC) or they can make and post their own questions. As a result, the number of quizzes will grow and everyone can use this platform as a “bank” or “archive”.  
			</p>
			
			<img src="img/study.jpg" />
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