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
	<title>Admin|Nytt Konto</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<style>
#footer {
	clear: both;
    position: relative;
    z-index: 10;
    height: 3em;
    margin-top: -3em;
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
            <li><a href="admin_user.php" ><span>Användare</span></a></li>
			<li><a href="register.php" class="active"><span>Nytt konto</span></a></li>
			
			    
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		

		
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				
			
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				<br>
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Skapa ny användare</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="" method="post">
						
						<!-- Form -->
						<div class="form">
                        <form method="post" action="">
                        
                                <?php echo display_error(); ?>
                        
                                <div class="input-group">
                                    <label>Användarnamn</label>
                                    <input type="text" name="username" class="field size1" value="<?php echo $username; ?>">
                                </div>
                                <div class="input-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="field size1" value="<?php echo $email; ?>">
                                </div>
                                <div class="input-group">
                                    <label>Lösenord</label>
                                    <input type="password"  class="field size1" name="password_1">
                                </div>
                                <div class="input-group">
                                    <label>Konfimera Lösenord</label>
                                    <input type="password" class="field size1" name="password_2">
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="btn" name="register_btn">Skapa</button>
									<div id="myModal" class="modal">

									<!-- Modal content -->
									
                                </div>
                                
                            </form>
						</div>
						<!-- End Form -->
						
						
					</form>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
		
			
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