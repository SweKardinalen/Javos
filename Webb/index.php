<!DOCTYPE html>
<html>
	<head>
		<title>Hem</title>
		<link rel="stylesheet" href="css/main.css">
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">		
		<script language="JavaScript"></script>		
	</head>
	<body>
		<header>
		<?php include("header.php"); ?>
		</header>
			<main>


				<div id="maincontent">
						<div id="columnone">
						<h2>►SPÅRRECENSIONER</h2>
						<p> Klicka <a href="sparrapport.php" style ="color:black;"> <b>här </b>  </a>  för att lämna din recension över dagens spår, eller ta del av andra besökares.</p><br/>
				</div>


				<div id="columntwo">
					<h2>►RAPPORTERA ÄRENDE</h2>
					<p> Har du uppäckt ett hinder i spåret?	<a href="arende.php" style ="color:black;"> <b>Klicka här </b>  </a> för att skicka en inrapportering till Skidloppet AB. </p>
					<br/>
				</div>

				<div id="line">
					<hr>	
				</div>
				
			<div id="bigcontent">
		

		
					<?php include("sparstatus.php"); ?>

					
				<div id="line">
					<hr>	
				</div>
                
            <h1>Senaste spårningen</h1>
                <?php include("sparning.php"); ?>
                <p> <b>Grönt =</b> spårat under de senaste 24 timmarna | <b>orange</b> = spårat för mer än 24 timmar sedan</p>
				
				<div id="line">
					<hr>	
				</div>
				
					<h1>Dagens valla-tips </h1>

			
	
<?php
     $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	

	 foreach($pdo->query( 'Select * from valla_tips ORDER BY valla_id DESC LIMIT 1;' ) as $row){
		echo "<p>";
		echo "<i>";
		echo "<p>Tips: ".$row['tips']."</p>";
    
	  echo "</i>";
	echo "</p>";
	
	
	echo "<p>";
	 echo "<p>Skrivet av: ".$row['ansvarig']."</p>";
	  echo "</p>";

    }
	

?>


				
					
				</div>

			</div>
		</main>
	</body>


<?php include("footer.php"); ?>

</html>