<!doctype html>
<html>
<head>
	<title>Guest Registration</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="whales.css">
	<style type="text/css">
      /*insert input field styling*/
			#midcol {
					padding: 20px;
					border-radius: 10px;
					box-shadow: 2px 4px 6px 3px rgba(148, 148, 148, 0.3) ;
			}
			h2 {
					padding-top: 12px;
			}
			#input-field {
					width: 50%;
					margin: 2rem auto;
			}
			#input-field > p {
					display: flex;
					justify-content: space-between;
					margin: 1.5rem 0;
			}
			label {
					font-weight: bold;
					margin-top: 4px;  /* -- Size of input border*/
			}
			#fName, #lName, #email {
					width: 50%;
					height: 20px;
			}
	</style>
</head>
<body>
<div id="container">
	<!--Add include statements here-->
	<?php include("includes/header.php") ?>;
	<?php include("includes/nav.php") ?>;
	<div id="midcol">
			<h2>Guest Registration</h2>

			<div id="input-field">
				<p>
				<label for="fName" >First Name </label>
				<input id="fName" type="text" required>
				</p>
				<p>
					<label for="lName" >Last Name </label>
					<input id="lName" type="text" required>
				</p>
				<p>
					<label for="email" >Email Address</label>
					<input id="email" type="email" required>
				</p>
			</div>

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