<!DOCTYPE html>
<html lang=sv>
 
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<script>

$(function(){
    $(".hide-at-load").hide(); //gömmer divven när sidan laddats
    $(".btnToggle").on("click",function(e){
        e.preventDefault(); //avaktivera vanliga klick-eventet
        $(this).parent().next(".toggleElement").toggle();
    });
});


</script>




</head>

<style>
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

 
<?php

    $pdo = new PDO('mysql:dbname=JavosDatabas;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	

	
	 foreach($pdo->query( 'SELECT * FROM antal LIMIT 6;' ) as $row){
   

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



</body>
</html>