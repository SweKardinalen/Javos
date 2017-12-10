<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charset="utf-8">
</head>
<body>

 <table style="margin-left:40px;">
<?php


echo "<h3> Öppna och stängda spår </h3>";

    $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	
	
	
	echo "<tr>";
	
	 foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="1" and varde="1";' ) as $row){
		 echo "<td >"; 
		 
		 
		
	echo"<img src='gron.png' height='70' />";
	
     
	  echo "</td>";
	  
    }
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="1" and varde="0";' ) as $row){
  	 echo "<td >"; 
	echo"<img src='rod.png' height='70' />";

     
	  echo "</td>";
	  
    }
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="2" and varde="1";') as $row){
      echo "<td >"; 
	echo"<img src='gron.png' height='70' />";
	
     
	  echo "</td>";
	
    }
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="2" and varde="0";' ) as $row){
      echo "<td >"; 
		echo"<img src='rod.png' height='70' />";	
	
     
	  echo "</td>";
	  
    }
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="3" and varde="1";') as $row){
     echo "<td >"; 
echo"<img src='gron.png' height='70' />";	
     
	  echo "</td>";
    }
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="3" and varde="0";' ) as $row){
     echo "<td >"; 
		echo"<img src='rod.png' height='70' />";	

     
	  echo "</td>";
    }
	
	
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="4" and varde="1";' ) as $row){
    echo "<td >"; 
echo"<img src='gron.png' height='70' />";	
     
	  echo "</td>";
	
    }
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="4" and varde="0";' ) as $row){
   echo "<td >"; 
		echo"<img src='rod.png' height='70' />";	

     
	  echo "</td>";
	
    }
	
	
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="5" and varde="1";') as $row){
     echo "<td >"; 
	echo"<img src='gron.png' height='70' />";	
     
	  echo "</td>";
    }
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="5" and varde="0";' ) as $row){
     echo "<td >"; 
		echo"<img src='rod.png' height='70' />";	
	 
	  echo "</td>";
	  
    }
	
	
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="6" and varde="1";' ) as $row){
  echo "<td >"; 
echo"<img src='gron.png' height='70' />";	
     
	  echo "</td>";
	
    }
	
	foreach($pdo->query( 'SELECT * FROM sparstatus where stracka ="6" and varde="0";' ) as $row){
    echo "<td >"; 
			echo"<img src='rod.png' height='70' />";	
	
     
	  echo "</td>";
	
    }
	
	
	echo "</tr>";
	

	echo "<tr>";
	
	echo "<td> <p> Hedemora - Norrhyttan </p></td>";

	
	echo "<td> <p>Norrhyttan - Bondhyttan </p></td>";

	
	echo "<td> <p>Bondhyttan - Bommansbo </p></td>";
	
	
	
	echo "<td> <p>Bommansbo - Smedjebacken </p></td>";
	
	
	echo "<td> <p> Smedjebacken - Björsö</p>";
	
	
	
	echo "<td><p>  Björsö - Grängesberg</p></td>";


		echo "</br>";

	

?>




 </table>
 
 <p style="margin-top: 40px;"> Information om nedstängda spår </p>


<?php


    $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	

	foreach($pdo->query( ' SELECT * from   sparstatus where varde = 0 and stracka= 1 ' ) as $row){
		echo "<p> <b> ";
		echo "Hedemora - Norrhyttan: ";
		 echo"</b>";
	 echo $row['kommentar'];
	  echo "</br></p>";
}

	foreach($pdo->query( ' SELECT * from  sparstatus where varde = 0 and stracka = 2 ' ) as $row){
   
	 	echo "<p> <b> ";
		echo "Norrhyttan - Bondhyttan: ";
		 echo"</b>";
	 echo $row['kommentar'];
	 echo "</br></p>";

}
	foreach($pdo->query( ' SELECT * from  sparstatus where varde = 0 and stracka = 3 ' ) as $row){
   
		echo "<p> <b> ";
		echo "Bondhyttan - Bommansbo: ";
		 echo"</b>";
	 echo $row['kommentar'];
	  echo "</br></p>";

}
	foreach($pdo->query( ' SELECT * from  sparstatus where varde = 0 and stracka = 4 ' ) as $row){
   
		echo "<p> <b> ";
		echo "Bommansbo - Smedjebacken: ";
		 echo"</b>";
	 echo $row['kommentar'];
	  echo "</br></p>";

}
	foreach($pdo->query( ' SELECT * from  sparstatus where varde = 0 and stracka = 5 ' ) as $row){
   
		echo "<p> <b> ";
		echo "Smedjebacken - Björsö: ";
		echo"</b>";
		echo $row['kommentar'];
		echo "</br></p>";

	
}
	foreach($pdo->query( ' SELECT * from  sparstatus where varde = 0 and stracka = 6' ) as $row){
   
	 	echo "<p> <b> ";
		echo "Björsö - Grängesberg: "; 
		echo"</b>";
		echo $row['kommentar'];
		echo "</br></p>";
}



?>

 

</body>
</html>