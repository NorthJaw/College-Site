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

				<h2>Login</h2><br>
				<input type="text" name="RegNo" class="LoginField" placeholder="Register No."><br><br><br>
				<input type="password" name="Password" class="LoginField" placeholder="Password"><br><br><br>

				<input type="submit" class="SubmitButton" name="Submit" value="submit">
			</form>

		</div>


		<div id="Signup" class="Register">

			<form action="#" method="POST">

					<h2>Signup</h2>
					
					<div class="Rows">
						<div class="NameRow">
							<input type="text" name="FirstName" placeholder="First Name" class="Name">
						</div>
						<div class="NameRow">
							<input type="text" name="LastName" placeholder="Last Name" class="Name"><br><br>
						</div>
					</div>
					
					<input type="text" name="RegNo" placeholder="Register No." class="SignupInput">	<br>		
					
					<input type="password" name="Password" placeholder="Password" class="SignupInput"><br>
					
					
					<input type="text" name="DOB" placeholder="Date of Birth" class="SignupInput">	<br>
					
					<input type="password" name="RePassword" placeholder="Re-enter Password" class="SignupInput">
					
					<h2><input type="submit" class="SubmitButton" name="submit" value="submit"></h2>

			</form>
		</div>


		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="OpenPage.js"></script>

	</body>

</html>
