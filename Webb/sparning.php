<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charset="utf-8">
</head>
<body>


<?php


echo "<table>";

    $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	
	
	
	echo "<tr>";
	
	# foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="1"' ) as $row){
		 echo "<td >"; 
		 
	   echo "<p style= 'color:green; font-weight:400;'> Hedemora - Norrhyttan </p>";
	
     	echo"<p> Datum och tid:</P>";

	  echo "</td>";
	  
  #  }
	

		# foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="2"' ) as $row){
		 echo "<td >"; 
		 
	   echo "<p style= 'color:green; font-weight:400;'> Norrhyttan - Bondhyttan </p>";
	
     	echo"<p> Datum och tid:</P>";

	  echo "</td>";
	  
  #  }
	
# foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="3"' ) as $row){
		 echo "<td >"; 
		 
	   echo "<p style= 'color:green; font-weight:400;'>Bondhyttan - Bommansbo </p>";
	
     	echo"<p> Datum och tid:</P>";

	  echo "</td>";
	  
 #   }

# foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="4"' ) as $row){
		 echo "<td >"; 
		 
	   echo "<p style= 'color:orange; font-weight:400;'> Bommansbo - Smedjebacken </p>";
	
     	echo"<p> Datum och tid:</P>";

	  echo "</td>";
	  
 #   }
 #foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="5"' ) as $row){
		 echo "<td >"; 
		 
	   echo "<p style= 'color:green; font-weight:400;'>Smedjebacken - Björsö </p>";
	
     	echo"<p> Datum och tid:</P>";

	  echo "</td>";
	  
  #  }
 #foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="6"' ) as $row){
		 echo "<td >"; 
		 
	   echo "<p style= 'color:orange; font-weight:400;'> Björsö - Grängesberg</p>";
	
     	echo"<p> Datum och tid:</P>";

	  echo "</td>";
	  
 #   }
	

	echo "</table>";



?>
    </body>
</html>