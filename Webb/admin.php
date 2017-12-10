<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin|Spårrecention</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />


</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Skidloppet AB | ADMIN</a></h1>
			<div id="top-navigation">
				Välkommen <a href="#"><strong>Admin</strong></a>
				
				<span>|</span>
				<a href="inloggning.php?logout='1'">Logga ut</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			<li><a href="admin.php"  class="active"><span>Spårrecension</span></a></li>
			<li><a href="admin_tavling.php"><span>Tävlingar</span></a></li>  
            <li><a href="admin_vallatips.php" ><span>Valla Tips</span></a></li>
            <li><a href="admin_user.php" ><span>Användare</span></a></li>
			<li><a href="register.php" ><span>Nytt konto</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Spårrecensioner</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">

								<?php 
								
								$con = mysqli_connect("wwwlab.iit.his.se","sqllab","Tomten2009","JavosDatabas");
								// Kollar koppling
								if (mysqli_connect_errno())
								{
									die("Failed to connect to MySQL: " . mysqli_connect_error());
								}
								
								if (!$result = mysqli_query($con,"SELECT * FROM sparrecension ORDER BY id DESC LIMIT 22"))
								{
									die("Error: " . mysqli_error($con));
								}
								?>

						<?php

							//Hämtar datan ifrån databasen samt skapar en delete funktion
								while($row = mysqli_fetch_array($result))
									{
							?>

								<tr>
										<td><?php echo $row['id']; ?></td>
										<td ><?php echo $row['recension_titel']; ?></td>
										<td><?php echo $row['betygsskala']; ?></td>
										<td><?php echo $row['fritext']; ?></td>
										<td><?php echo $row['datum']; ?></td>
										<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
								</tr>
						<?php
							}
						mysqli_close($con);			
						?>	

						</table>
		
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
		
					</form>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2017 - Skidloppet AB</span>
		
	</div>
</div>
<!-- End Footer -->

</body>
</html>