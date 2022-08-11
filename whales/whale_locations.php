<!doctype html>
<html>
<head>
	<title>Whale Locations</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="whales.css">
	<style type="text/css">
		table {
			width: 400px;
			background:white;
			color: black;
			border: 1px black solid;
			border-collapse: collapse;
			margin: auto;
		}
		td {
			border: 1px black solid;
			padding: 1px 0 1px 4 px;
			text-align: left;
		}
	</style>
</head>
<body>
	<div id="container">
		<!--Add include statements here-->
		<?php include("includes/header.php") ?>;
		<?php include("includes/nav.php") ?>;
		
		<div id="midcol">
				<h2>Locations Table Information</h2>
				<p>
					<!--Add the table here-->
					<?php
						// This script retrieves all the records from the whales table
						require ('mysqli_connect.php');
						// Make the query
						$query = "SELECT whale_name, locations.location_id, locations.location_name FROM whales, locations WHERE whales.location_id = locations.location_id ORDER BY location_id; ";
						$result = @mysqli_query($dbcon, $query);
						if ($result) {
							echo '<table cellpadding="5">
								<tr>
									<td align="left"><b>Whale Name</b></td>
									<td align="left"><b>Location Name</b></td>
								</tr>';

							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								echo '
								<tr>
									<td align="left">'.$row['whale_name'].'</td>
									<td align="left">'.$row['location_name'].'</td>
								</tr>';
							}
							echo '</table>';		// close the table
							mysqli_free_result($result);		// Free up the resources
						} else {
							// Message
							echo '<p>This location could not be retrieved.
							Please accept our apology for any inconvenience</p>';

							// Debugging Message
							echo '<p>'.mysqli_error($dbcon).'<br /><br />Query: '.$query.'</p>';
							// End of if ($result)
						}
						mysqli_close($dbcon)
					?>
					
					
				</p>
		</div>
	</div>
	<!--Add footer here-->
	<div id="footer">
		<footer>
			<?php include ("includes/footer.php")?>;
		</footer>
	</div>
	

</body>
</html>