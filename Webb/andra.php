<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
<body>


<h1> Test- se öppna och stängda spår </h1>

<h3> Välj vad som ska öppnas och stängas </h3>


<form action="sparstatus.php" method="post">

 Öppna/stäng:<br>
 <input type="radio" name="varde" value="1" required > Öppna<br>
 <input type="radio" name="varde" value="0" required> Stäng<br><br>
  
 Delsträcka: 

  <select name="stracka" required>
    <option value="1">Hedemora - Norrhyttan</option>
    <option value="2">Norrhyttan - Bondhyttan</option>
    <option value="3"> Bondhyttan - Bommansbo</option>
    <option value="4"> Bommansbo - Smedjebacken</option>
	<option value="5"> Smedjebacken - Björsö</option>
	<option value="6"> Björsö - Grängesberg</option>
  </select>

  <input type="submit" />
  
</form> 


 
 

</body>
</html>