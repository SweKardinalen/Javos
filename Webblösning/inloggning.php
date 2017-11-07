<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="css/main.css">
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	</head>

	<body>
		<main>
			<!--Hämtar Header filer-->
			<?php include("header.php"); ?>

			<!--Kopplingar till db saknas-->
			
			<div id="maincontent">
				<div id="inloggcontent">

					<form action="" method="POST">
						<h2>Logga in för att ladda upp dagens Vallatips</h2>
						<h3>Användarnamn:</h3>
						<input type="text" name="username">
						<h3>Lösenord:</h3>
						<input type="password" name="password">
						<input type="submit" value="Logga in">
						
						
					<!--Lägg in koppling till inloggnings fil-->

					</form>
				</div>
			</div>

		</main>
	</body>
	<!--Hämtar footer filer-->
	<?php include("footer.php"); ?>
</html>
