<!DOCTYPE HTML>
<!-- HOMEPAGE.PHP -->

<html>
	<body>
		<!-- Heading stuff -->
		<u><h1 style="font-family:Arial;">CS 405 Yard Sale</h1></u>
		<h2 style="font-family:Arial;">Welcome to the yard sale webpage!</h2>
		<p style="font-family:Arial;">Continue by logging in or registering a new account!</p>

			<!-- Table with outline -->
			<fieldset style="width:30%"><legend><p style="font-family:Arial;">Log-in Form</p></legend>
				<table border="0">

					<!-- Log in -->
					<form method="POST" action="post_login.php">
						<tr>
							<td>Email</td>
							<td> <input type="text" name="email"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td> <input type="password" name="pass"></td>
						</tr>
						<tr>
							<td><input id="button" type="submit" name="submit" value="Log in"></td>
						</tr>
					</form>

					<!-- Register -->
					<form method="POST" action="register_form.php">
						<tr>
							<td><input id="button" type="submit" name="submit" value="Register"></td>
						</tr>
					</form>
				</table>
		</fieldset>
		<br><br>
		<p>By Harsh Desai and Steven Penava</p>
	</body>
</html>