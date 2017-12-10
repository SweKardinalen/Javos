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
	</head><style>
#recension{
    margin:auto;
	width: 40%;
	border: 1px solid #9b9690;
	text-align:center;
	box-shadow: 2px 2px 1px #9b9690;
	border-radius: 5px;
	background-color: #f4efeb; 


	
	
}

a{ color:black;
margin: 2px;
padding:0px;
font-size: 14px;

}
p{
	font-size: 14px;
	padding: 2px;
	margin:3px;
	
	
}



</style>

	<body>
		<main>
			<?php include("header.php"); ?>

			
			
			<div id="maincontent">
                
                

<div style= "margin-top:30px; ">
     <h1 style="text-align: center;margin-bottom: 15px;">Senaste recensionerna från andra skidåkare</h1>
    <p style ="font-size:18px;">- Sida 2</p>
<?php

    $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	

	
	 foreach($pdo->query( 'SELECT * FROM antal LIMIT 6 OFFSET 7;' ) as $row){
   

	echo" <div id='recension'>";
	
	  echo "<p> ".$row['recension_titel']." ".$row['datum']."</p>";
	 
	 echo" <p> Övergripande helhetsbetyg (1-5):  ".$row['betygsskala']."</p>";

	  
	  echo "<p><a href='#' class='btnToggle'>Läs mer </a></p>
	<span class='hide-at-load toggleElement'>";
	
	 
	 echo" <p> <b>Kommentar: </b>".$row['fritext']."</p>";
	
  
	
	echo "</span>";
	
	
	echo "</p>";
	

	  echo "</div>";
	  
	  echo "</br>";

	  
	
    }

	
?>
    
    <table style= "margin:auto;">
    <tr>
        <td style="border: 1px solid black;">
        <p> Sida 2 av 3</p>
        </td> 
        <td style="border: 1px solid black;">
            <p> <a href='sparrapport.php' style ='color:black;'> <i> << 1 </i> </a></p>
        </td> 
        <td style="border: 1px solid black; background-color:#9b9690; padding-right: 15px; text-align:center;">
            
        <p> <a href='sida2.php' style ='color:black;'> <i> 2 </i> </a></p>
        </td> 
         <td style="border: 1px solid black;">
        <p> <a href='sida3.php' style ='color:black;'> <i> 3 >> </i> </a></p>
        </td> 
        
    </tr>
    
    
    </table>
    
    
</div>

            </div>
        </main>
</body>
</html>