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
	<title>Admin|Användare</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<style>
.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
</style>
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
			<li><a href="admin.php" ><span>Spårrecension</span></a></li>
			<li><a href="admin_tavling.php"><span>Tävlingar</span></a></li> 
            <li><a href="admin_vallatips.php" ><span>Valla Tips</span></a></li>
            <li><a href="admin_user.php" class="active"><span>Användare</span></a></li>
			<li><a href="register.php"><span>Nytt konto</span></a></li>  
        </ul>
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
						<h2 class="left">Aktuella Konton</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
                    <?php
                    
                    $servername = "wwwlab.iit.his.se";
                    $username = "sqllab";
                    $password = "Tomten2009";
                            
                        $pdo = new PDO("mysql:host=$servername;dbname=Javos_login",$username, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    ?>
                    
                            <!--tarfram alla kontonamn-->
                            
                            <table>
                            <tr>
							<th>Konto ID</th>
                            <th>Användarkonton</th>
                            <th>Mail Adresser</th>
                            </tr>
                            <tr>
                            
                            <!--visar visar de valda attributen-->
                            <?php
                        foreach($pdo->query("SELECT users.id, users.username, users.email  FROM users") as $row){
							  
							  echo "<td>".$row['id']."</td>";
                              echo "<td>".$row['username']."</td>";
							  echo "<td>".$row['email']."</td>";?>
							  <td><a href="delete3.php?id=<?php echo $row['id']; ?>">Delete</a></td>
							 
							  <?php echo "</tr>";      
                        }
                    
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
			
			<!-- Box -->
			<div class="box">
				
				<!-- Box Head -->
				<div class="box-head">
					<h2>Viktigt</h2>
				</div>
				<!-- End Box Head-->
				
				<div class="box-content">
					
					<div class="cl">&nbsp;</div>
					
					<h3> Ta ej bort Admin-Konto</h3>
					</div>
					<!-- End Sort -->
					
				</div>
			</div>
			<!-- End Box -->
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