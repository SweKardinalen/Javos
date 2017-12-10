
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
		
	</head>

	<body>
        
		<main>
				<?php include("header.php"); ?>

				
			<div id="bigcontent">
		
                <div id="line">
					<hr>	
				</div>
		<h2> Ändra tävlingsevenemang</h2>
                
                <p>Lägg till nytt evenemang</p>
                

    <form action="program.php" method="post">


            <!--Betyg-->
               <p> Evenemang: </p> <input type="text" name="evenemang">


            <!--Text-->
              <p>  Arrangör: </p> <input type="text" name="arrangor"/>

            <p>  Datum: </p> <input type="date" name="datum"/>
        
        
              <p>  Status:  </p> <input type="text" name="Status2">
           

<input type="submit" onclick="return clicked();" value="Skicka"/>
  
</form> 
    
    


<?php

    $pdo = new PDO('mysql:dbname=tavling;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	

if(isset($_POST['datum'])){

        $Status2=htmlentities($_POST['Status2']);
        $arrangor= htmlentities($_POST['arrangor']);
        $evenemang= htmlentities($_POST['evenemang']);
    
		 $querystring="insert into tavlingkalender (datum, evenemang, arrangor,Status2) values (:datum, :evenemang, :arrangor,:Status2);";
        $stmt = $pdo->prepare($querystring);
		$stmt->bindParam(':datum', $_POST['datum']);
		  $stmt->bindParam(':evenemang', $evenemang);
        $stmt->bindParam(':arrangor', $arrangor);
		$stmt->bindParam(':Status2',  $Status2);
		
       
        $stmt->execute();
    }

                
	?>
                	
                
                <table style="margin:auto; padding:20px; ">
                <tr>
                    <td style="margin-right:55px;"><p><u><b>Datum</b></u></p></td>
                   <td style="margin-right:55px;"><p><u><b>Evenemang</b></u></p></td>
                    <td  style="margin-right:55px;"><p><u><b>Arrangör</b></u></p></td>
                   <td style="margin-right:55px;"><p><u><b>Status </b></u></p></td>
                    <td style="margin-right:55px;"><p><u><b>Radera </b></u></p></td>
                </tr>
                
                 <?php
     $pdo = new PDO('mysql:dbname=tavling;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	
                foreach($pdo->query( ' Select * from tavlingkalender;' ) as $row){
	
                    echo "<tr'>";
         
                    echo "<td><p>".$row['datum']."</p></td>";
	               echo "<td><p>".$row['evenemang']."</p></td>";
                    echo "<td><p>".$row['arrangor']."</p></td>";
                    echo "<td><p>".$row['Status2']."</p></td>";
                 	?>
                    
                     <td><a href="delete.php?id=<?php echo $row['id']; ?>">Radera evenemang</a></td>
                    <?php
                     echo "</tr>";
	
    }
                
                   
                    
                    
                    
             ?>    
                    <p> <i>Uppdatera sidan för att se den uppdaterade versionen av aktuella evenemang </i></p>
              </table> 
				
        
                
            </div>   
              
				
        </main>



			
	</body>
	
	<?php include("footer.php"); ?>
</html>