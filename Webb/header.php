
<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		
		<script type="text/javascript" src="JS/script.js"></script>
		<script type="text/javascript" src="JS/jquery.min.js"></script>

		<link href="css/java.css" type="text/css" rel="stylesheet" />
		<script src="JS/jquery.flexslider.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>

		

<header>

<div id="box">



	<h2> Skidloppet AB </h2>
	<img src="Logga.JPG"  height="70" alt="Logotyp"
	title="Skidloppet AB Logotyp" />
	
	

</div>

	
<div id="slidecontainer">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="ved.jpg" />
								<div id="headlinecontainer">
									<h2>Passa på att ta en paus</h2>
									<p>Besök våra vindskydd- vi står för veden!</p>
								</div>
							</li>
							<li>
								<img src="bild2.jpg" />
								<div id="headlinecontainer">
									<h2>Köp dagskort här!</h2>
									<p href=sparkart.php>80 kr/dag</p>
								</div>
							</li>
							
						</ul>
						
					</div>
					
	</div>	
	
	

				
	<ul>
		<li>
			<a class="<?php echo ($current_page == 'index.php' || $current_page == '') ? '' : NULL ?>" href="index.php">HEM</a>
		</li>
	<li>
			<a class="<?php echo ($current_page == 'sparkart.php' || $current_page == '') ? '' : NULL ?>" href="sparkart.php">KÖP DAGSKORT</a>
		</li>

		<li>
			<a class="<?php echo ($current_page == 'vaderdemo.php' || $current_page == '') ? '' : NULL ?>" href="vaderdemo.php">VÄDER</a>
		</li>

		<li>
			<a class="<?php echo ($current_page == 'arende.php' || $current_page == '') ? '' : NULL ?>" href="arende.php">RAPPORTERA ÄRENDE</a>
		</li>


		<li>
			<a class="<?php echo ($current_page == 'sparrapport.php' || $current_page == '') ? '' : NULL ?>" href="sparrapport.php"> SPÅRRECENSIONER</a>
		</li>

		<li>
			<a class="<?php echo ($current_page == 'inloggning.php' || $current_page == '') ? '' : NULL ?>" href="inloggning.php">INLOGGNING</a>
		</li>
		
	</ul>
</header>


</html>