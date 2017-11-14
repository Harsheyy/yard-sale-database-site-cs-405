<!DOCTYPE HTML>
<!-- DASHBOARD.PHP -->

<html>
	<body>
		<!-- Heading stuff -->
		<u><h1 style="font-family:Arial;">CS 405 Yard Sale</h1></u>
		<!-- Log in form -->
		
		<!-- Table with outline -->
		<fieldset style="width:30%"><legend><p style="font-family:Arial;">User Dashboard</p></legend>
			<table border="0">
				<tr>
					<!-- Create -->
					<td>
						<form method="POST" action="sale_form.php"><input id="button" type="submit" name="submit" value="Create Yard Sale"></td></form>
					</td>
	
					<!-- Sign out -->
					<td>
						<form method="POST" action="index.php"><input id="button" type="submit" name="submit" value="Sign Out"></td></form>
					</td>
				</tr>
			</table>
		</fieldset>
	</body>
</html>