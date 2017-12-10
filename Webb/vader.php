
<!DOCTYPE html>
<html>
	<head>
		<title>Hem</title>
		<link rel="stylesheet" href="css/main.css">
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

		
	</head>

	<body>


	
<form action="vader.php" method="post">

<p> Ändra val av ort:</p>

<select name="vald_ort" required>
  <option value="1">Hedemora</option>
  <option value="2">Norrhyttan</option>
  <option value="3">Bondhyttan</option>
  <option value="4">Bommansbo</option>
  <option value="5">Smedjebacken</option>
  <option value="6">Björsö</option>
  <option value="7">Grängesberg</option>
</select>

 <input type="submit"  value="Välj"/>
  
</form> 
	
	<?php


    $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	




	if(isset($_POST['vald_ort'])){

		 $querystring=" CALL SET_NEW_vader (:vald_ort);";
        $stmt = $pdo->prepare($querystring);
        $stmt->bindParam(':vald_ort', $_POST['vald_ort']);  
        $stmt->execute();
    }
	
	
	
	foreach($pdo->query( 'SELECT * FROM vader where vald_ort ="1"' ) as $row){


	?>	
<iframe src="https://www.meteoblue.com/en/weather/widget/three/hedemora_sweden_2706982?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=bright"  frameborder="0"  allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 460px;height: 592px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/forecast/week/hedemora_sweden_2706982?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>	
	  <?php
    }
	
	
	foreach($pdo->query( 'SELECT * FROM vader where vald_ort ="2" ' ) as $row){

	 ?>
	   
	   
	   
	   <iframe src="https://www.meteoblue.com/en/weather/widget/three/norrhyttan_sweden_2688371?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=bright"  frameborder="0" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 460px;height: 592px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/forecast/week/norrhyttan_sweden_2688371?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>
	  	  <?php
    }
	
	
	foreach($pdo->query( 'SELECT * FROM vader where vald_ort ="3" ' ) as $row){
		
		 ?>
	   <iframe src="https://www.meteoblue.com/en/weather/widget/three/bondhyttan_sweden_2720546?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=bright"  frameborder="0" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 460px;height: 592px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/forecast/week/bondhyttan_sweden_2720546?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>
	  	  <?php
	  
    }
	
	
	foreach($pdo->query( 'SELECT * FROM vader where vald_ort ="4" ' ) as $row){

 ?>
	   <iframe src="https://www.meteoblue.com/en/weather/widget/three/bommarsbo_sweden_2720624?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=bright"  frameborder="0" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 460px;height: 592px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/forecast/week/bommarsbo_sweden_2720624?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>
	  	  <?php
	  
	  
    }
	
	
	foreach($pdo->query( 'SELECT * FROM vader where vald_ort ="5" ' ) as $row){

	 ?>
	   <iframe src="https://www.meteoblue.com/en/weather/widget/three/smedjebacken_sweden_2676586?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=bright"  frameborder="0" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 460px;height: 591px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/forecast/week/smedjebacken_sweden_2676586?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>
	  	  <?php
	  
	  
    }
	
	
	foreach($pdo->query( 'SELECT * FROM vader where vald_ort ="6" ' ) as $row){

	 ?>
	   
	   <p> Lägg till väder för Björsö </p>
	   
	   
	   
	   
	  	  <?php
	  
	  
    }
	
	foreach($pdo->query( 'SELECT * FROM vader where vald_ort ="7" ' ) as $row){

	 ?>
	   <iframe src="https://www.meteoblue.com/en/weather/widget/three/gr%c3%a4ngesberg_sweden_2711256?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=bright"  frameborder="0" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 460px;height: 591px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/forecast/week/gr%c3%a4ngesberg_sweden_2711256?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>
	  	  <?php
	  
    }
	
	
	
	
	
	

	?>
	
	

	</body>
	
	
</html>