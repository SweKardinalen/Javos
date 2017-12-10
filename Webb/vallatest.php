<?php 
	include('functions.php');

$servername = "wwwlab.iit.his.se";
$username = "sqllab";
$password = "Tomten2009";        
    $pdo = new PDO("mysql:host=$servername;dbname=JavosDatabas", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
        echo "<table border=1px>";
        echo "<tr>";
       // echo "<th>valla_id</th>";
        echo "<th>ansvarig</th>";
        echo "<th>tips</th>";
        echo "</tr>";
        echo "<tr>";
        
        //visar valla tips tabellen
        
    foreach($pdo->query("SELECT * FROM valla_tips ORDER BY valla_id DESC LIMIT 1") as $row){
              
          //echo "<td>".$row['valla_id']."</td>";
          echo "<td>".$row['ansvarig']."</td>";
          echo "<td>".$row['tips']."</td>";
          echo "</tr>";      
    }
        

?>