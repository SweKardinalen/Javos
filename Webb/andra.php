<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
<body>


<h1> Test- se �ppna och st�ngda sp�r </h1>

<h3> V�lj vad som ska �ppnas och st�ngas </h3>


<form action="sparstatus.php" method="post">

 �ppna/st�ng:<br>
 <input type="radio" name="varde" value="1" required > �ppna<br>
 <input type="radio" name="varde" value="0" required> St�ng<br><br>
  
 Delstr�cka: 

  <select name="stracka" required>
    <option value="1">Hedemora - Norrhyttan</option>
    <option value="2">Norrhyttan - Bondhyttan</option>
    <option value="3"> Bondhyttan - Bommansbo</option>
    <option value="4"> Bommansbo - Smedjebacken</option>
	<option value="5"> Smedjebacken - Bj�rs�</option>
	<option value="6"> Bj�rs� - Gr�ngesberg</option>
  </select>

  <input type="submit" />
  
</form> 


 
 

</body>
</html>