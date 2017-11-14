

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
					<td>
						<p><u>My Yard Sales</u></p>
					</td>
				</tr>

						
				<!-- populate table -->
				<!-- SELECT COUNT(user_email) FROM yardsale WHERE user_email LIKE "steven.penava@gmail.com" -->
				<?php 
					session_start();
					$user_email = $_SESSION['email'];
					
					$servername="localhost";
					$username="root";
					$password="55Ozzie99!";
					$dbname="YardsaleDB";
					$mysqli = new mysqli($servername, $username, $password, $dbname);
					
					if ($mysqli->connect_errno) {
					    echo "Could not connect to database \n";
					    echo "Error: ". $mysqli->connect_error . "\n";
					    exit;
					} else {
						$get_count_sql = "SELECT * FROM yardsale WHERE user_email LIKE '$user_email';";
					    if (!$result = $mysqli->query($get_count_sql)) {
					        echo "Query failed: ". $mysqli->error. "\n";
					        exit;
					    } else {
					    	$counter = 0;
					    	if(mysqli_num_rows($result) > 0) {
					    		
					    		echo "<tr><td>";

					    		
					    		
					    		
					    		while($row = mysqli_fetch_assoc($result)) {
					    			$counter += 1;
					    			echo "<b>Yardsale " . $counter . "<br></b>";
					    			echo "Address: " . $row["address"] . "<br>City: " . $row["city"] . "<br>State: " . $row["state"] . "<br>Zip: " . $row["zipcode"] . "<br>Date: " . $row["date"] . "<br>Time: " . $row["time"] . "<br><br>";
					    		}
					    		
					    		echo "</td></tr>";
					    	} else {

					    	}
					    }
					}
				?>

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