<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

		<title>Ärende</title>
		<link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="JS/koordinater.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
		 <script>
		function clicked() {
    return confirm('Tack för din hjälp');
}


</script>
	</head>

	<body>
		<main>
			<?php include("header.php"); ?>

			
			
			<div id="maincontent">




<h1> Rapportera in ärende</h1>


<p><button onclick="geoFindMe()">Visa mina koordinater</button></p>
<div id="out"></div>

<form action="arende.php" method="post">


<p> Kommentar: </p> <input type="text" name="fritext" placeholder= "Skriv en förklaring om vad du upptäckt" required/>

<p> Bifoga gärna en bild (ej obligatoriskt) </p>   <input type="file" name="fileToUpload" id="fileToUpload">

<p> Plats (vid inrapporteringar i efterhand): </p> <input type="text" name="plats" />

<input type="submit" onclick="return clicked();" value="Skicka"/>
  
</form> 






<?php
    $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	


if(isset($_POST['fritext'])){


		 $querystring="INSERT INTO arenden (fritext, plats) VALUES (:fritext, :plats);";
        $stmt = $pdo->prepare($querystring);
        $stmt->bindParam(':fritext', $_POST['fritext']);
		$stmt->bindParam(':plats', $_POST['plats']);
		
       
        $stmt->execute();
    }

	?>






				
			</div>

		</main>
	</body>
	
	<?php include("footer.php"); ?>
</html>





