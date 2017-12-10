<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

		<title>Spårrecension</title>
		<link rel="stylesheet" href="css/main.css">
		
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
		
			 <script>
		function clicked() {
    return confirm('Tack för din recension');
}


</script>
	</head>

	<body>
		<main>
			<?php include("header.php"); ?>

			
			
			<div id="maincontent">

								
<h1> Rapportera in spårrecension</h1>

    <form action="sparrapport.php" method="post">


            <!--Betyg-->
               <p> Övergripande betyg: </p> <input type="number" name="betygsskala" min="1" max="5">


            <!--Text-->
              <p>  Kommentar: </p> <input type="text" name="fritext"/>


            <!--Datum genereras automatiskt-->
              <p>  Datum:  </p> <input type="date" name="datum">
            <!--Skript för datum-->
              


            <!--Spårkod-->
			<p> Välj delsträcka: </p>
                <select name="recension_titel" required>
                <option value="Hedemora- Norrhyttan"> <p> Hedemora-Norrhyttan </p> </option>
                <option value="Norrhyttan- Bondhyttan"> <p>Norrhyttan-Bondhyttan </p> </option>
                <option value="Bondhyttan- Bommansbo"> <p>Bondhyttan-Bommansbo </p></option>
                <option value="Bommansbo- Smedjebacken"><p> Bommansbo-Smedjebacken </p></option>
                <option value="Smedjebacken- Björsö"><p> Smedjebacken-Björsjö </p></option>
                <option value="Björsö- Grängesberg"> <p>Björsjö-Grängesberg</p></option>
                </select>   





<input type="submit" onclick="return clicked();" value="Skicka"/>
  
</form> 
    
    


<?php

    $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	

if(isset($_POST['fritext'])){

		 $querystring="insert into sparrecension (recension_titel, betygsskala, fritext, datum) values (:recension_titel, :betygsskala, :fritext, :datum);";
        $stmt = $pdo->prepare($querystring);
		 $stmt->bindParam(':recension_titel', $_POST['recension_titel']);
		  $stmt->bindParam(':fritext', $_POST['fritext']);
        $stmt->bindParam(':betygsskala', $_POST['betygsskala']);
		$stmt->bindParam(':datum', $_POST['datum']);
       
        $stmt->execute();
    }

	?>
                <div id="line">
					<hr>	
				</div>
                
                <h2 style="text-align: center;margin-top: 3px; margin-bottom: 15px;">Senaste recensionerna från andra skidåkare</h2>
					
                <?php include("recension.php"); ?>

               
				
			</div>

		</main>
	</body>
	
	<?php include("footer.php"); ?>
</html>
