<!DOCTYPE html>
<html>
	<head>
		<title>Hem</title>
		<link rel="stylesheet" href="css/main.css">
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
		
		<script language="JavaScript">
 
 </script>
 
 <script>
		function clicked() {
    return confirm('Tack för ditt köp! En faktura kommer till din valda e-postadress inom kort.');
}


</script>
	</head>

	<body>
		<main>
			<?php include("header.php"); ?>

				
				
<div id="maincontent">	



	<h2> Köp dagsspårkort </h2>
	<p> Observera, gäller endast samma dag som kortet köptes </p>

	<form action="sparkart.php" method="post"> 

<p> Antal spårkort:</p> <input type="text" name="antal" />
 
 <p>Fyll i mailadressen som biljetterna skall skickas till: </p> <input type="text" name="mail" />
 
  <input type="submit"  value="Beställ"/>
        
       
</form> 

<p> Biljetterna skickas när en swishbetalning eller en fakturaanmälning har fyllts i och skickats</p>




				<div id="columnone">
					<h2>Betala med Swish</h2>
					
				</BR>
 
				<p> Scanna QR koden  </br>
			</BR>

 				<img  src="swish.png" height="323" />
 




				</div>




				<div id="columntwo">
					<h2>Betala med faktura</h2>
	

					<form action="sparkart.php" method="post">

					<p>För och efternamn </p> 
					
					<input type="text" name="antal" placeholder=" Skriv in namn"/>
					
					<p>E-postadress </p> 
					<input type="email" name="mail" placeholder=" e-postadress"/>

					<p>Personnummer </p> 
					<input type="text" name="ssn" placeholder=" XXXXXX-XXXX"/>
					
					<input type="submit" onclick="return clicked();" value="Skicka mig en faktura"/>
  
					</form> 

					<p> 14 dagars betalningstid </p>

<?php

       $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	

if(isset($_POST['antal'])){

		 $querystring="INSERT INTO faktura (antal, mailadress, personnummer) VALUES (:antal, :mail, :ssn);";
        $stmt = $pdo->prepare($querystring);
        $stmt->bindParam(':antal', $_POST['antal']);
        $stmt->bindParam(':mail', $_POST['mailadress']);
         $stmt->bindParam(':ssn', $_POST['personnummer']);
        $stmt->execute();
    }

	?>


				<br/>
				</div>


 
				
				</div>
				
			
			
					
				
			
		</main>
	</body>
	
	<?php include("footer.php"); ?>
</html>