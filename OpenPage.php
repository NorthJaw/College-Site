<!DOCTYPE html>

<html>

	<head>
		
			<link type="text/css" rel="stylesheet" href="OpenPage.css">
		
	</head>
	
	<body>
		
		<img id="Image1" src="http://indiangraduate.in/wp-content/uploads/Engineering/Tamil-Nadu/35299-Sri-Venkateswara-College-of-Engineering.jpg">
			
			
				
		<h2><span id="SiteName">*Website Name?*</span><h2>
					
		<h2><span id="ButtonSpan">
					
		<input type="button" class="Button" value="Login" />
		<input type="button" class="Button" value="Signup" />
		
		</span><h2>
					
		<h3><span id="NoLogin"><a href="www.google.co.in" class="Button" id="NoLog">
			Continue without logging in
		</a></span></h3>
				
			
			
			
			
		<div id="Login" class="Register">
				
			<form action="OpenPage.php" method="POST">
					
				<h2>Login</h2>
				Enter reg. no:<br>
				<input type="text" class="Text" name="ID"><br><br><br>
				Enter password:<br>
				<input type="password" class="Text" name="password"><br><br><br>
					
				<input type="submit" class="SubmitButton" name="submit" value="submit">
			</form>
				
		</div>
		
		
		<div id="Signup1" class="Register">
				
			<form action="OpenPage.php" method="POST">
				
					<h2>Signup</h2>
					Enter reg. no:<br>
					<input type="text" class="Text" name="ID"><br><br><br>
					Enter DOB:<br>
					<input type="text" class="Text" name="ID"><br><br><br>
					<input type="Button" class="SubmitButton" id="NextButton" name="Next" value="Next">
					
			</form>
		</div>
		
				
		<div class="Register" id="Signup2">
			
			<form action="OpenPage.php" method="POST">
				<h2>Signup</h2>
					Enter password:<br>
					<input type="password" class="Text" name="password"><br><br><br>
					Re-Enter password:<br>
					<input type="password" class="Text" name="password"><br><br><br>	
					<input type="submit" class="SubmitButton" name="submit" value="submit">
				
			</form>
				
		</div>
		
			
		
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="OpenPage.js"></script>
		
	</body>
	
</html>