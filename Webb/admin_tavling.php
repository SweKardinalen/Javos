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
	<title>Admin|Tävling</title>
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
				<a href="inloggning.php?logout='1'" color:"red">Logga ut</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			<li><a href="admin.php" ><span>Spårrecension</span></a></li>
			<li><a href="admin_tavling.php"class="active"><span>Tävlingar</span></a></li>  
            <li><a href="admin_vallatips.php"  ><span>Valla Tips</span></a></li>
            <li><a href="admin_user.php"><span>Användare</span></a></li>
			<li><a href="register.php"><span>Nytt konto</span></a></li>
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
						<h2 class="left">Kommande Tävlingar</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <?php
                        $con = mysqli_connect("wwwlab.iit.his.se","sqllab","Tomten2009","tavling");
                        // Kollar koppling
                        if (mysqli_connect_errno())
                        {
                            die("Failed to connect to MySQL: " . mysqli_connect_error());
                        }
                        if (!$result = mysqli_query($con,"SELECT * FROM tavlingkalender ORDER BY id DESC"))
                        {
                            die("Error: " . mysqli_error($con));
                        }
                        ?>
                                    
                                        <table>
                                            
                                            <tr>
                                                <th>Datum</th>
                                                <th>Evenemang</th>
                                                <th>Arrangör</th>
                                                <th>Status</th>
                                            </tr>
                        <?php
                        
                        //Hämtar datan ifrån databasen samt skapar en delete funktion
                                while($row = mysqli_fetch_array($result))
                                {
                        ?>
                                <tr>
                                    <td><?php echo $row['datum']; ?></td>
                                    <td><?php echo $row['evenemang']; ?></td>
                                    <td><?php echo $row['arrangor']; ?></td>
                                    <td><?php echo $row['Status2']; ?></td>
                                    <td><a href="delete4.php?id=<?php echo $row['id']; ?>">Delete</a></td>
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
				
                <div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Ny Tävling</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="admin_tavling.php" method="post">
						
						<!-- Form -->
						<div class="form">
                        Datum: <input type="date" rows="4" cols="50" name="datum" class="field size1"/><br>
                        Evenemang: <input type="textarea" rows="4" cols="50" name="evenemang" class="field size1"/><br>
                        Arrangör: <input type="textarea" rows="4" cols="50" name="arrangor" class="field size1"/><br>
                        Status: <input type="textarea" rows="4" cols="50" name="Status2" class="field size1"/><br>
                        <input type="submit" value="Skapa"/>

						</div>
						<!-- End Form -->
                        
                        <?php

                    $servername = "wwwlab.iit.his.se";
                    $username = "sqllab";
                    $password = "Tomten2009";
        
                    $pdo = new PDO("mysql:host=$servername;dbname=tavling", $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		if(isset($_POST['datum'])){
            $datum=htmlentities($_POST['datum']);
            $evenemang=htmlentities($_POST['evenemang']);
            $arrangor=htmlentities($_POST['arrangor']);
            $Status2=htmlentities($_POST['Status2']);


			$querystring='INSERT INTO tavlingkalender (datum, evenemang, arrangor, Status2) VALUES(:datum, :evenemang, :arrangor, :Status2);';
			$stmt = $pdo->prepare($querystring);
			$stmt->bindParam(':datum', $datum);
            $stmt->bindParam(':evenemang', $evenemang);
            $stmt->bindParam(':arrangor', $arrangor);
            $stmt->bindParam(':Status2', $Status2);
			$stmt->execute();
            }
?>


					
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