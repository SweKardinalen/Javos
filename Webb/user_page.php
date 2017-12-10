<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>


<style type="text/css">
body
{
	text-align:center;
}
img
{
	height: 75px;
	width:200px;
}



.form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
    border-radius: 8px;
}
.form-style-6 h1{
    background: grey;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
    border-radius: 8px;
}
.form-style-6 input[type="text"],
.form-style-6 textarea,
.form-style-6 select
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
    border-radius: 8px;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: grey;
    border-bottom: 2px grey;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;   
    color: #fff;
    border-radius: 8px;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: lightgrey;
}
</style>
<meta charset="UTF-8">
	<title>Valla Tips</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body>
	<div class="header">
		
		<img src="bilder/Logga.JPG" alt="Logga" size="20px">
		
	</div>
	<div class="content">
	

<!--
					<form action="user_page.php" method="post">
					Dagens Valla Tips: <input type="textarea" rows="4" cols="50" name="tips"/><br>
					Ansvarig: <input type="textarea" rows="4" cols="50" name="ansvarig"/><br>
					<input type="submit" value="Skicka Tips"/>
					</form> -->

<div class="form-style-6">
<h1>Dagens Valla tips</h1>
<form action="user_page.php" method="post">
<input type="text" name="ansvarig" placeholder="Ansvarig" />

<textarea name="tips" placeholder="Valla Tips"></textarea>
<input type="submit" value="Skicka" />
</form>
</div>

<?php
$servername = "wwwlab.iit.his.se";
$username = "sqllab";
$password = "Tomten2009";
        
    $pdo = new PDO("mysql:host=$servername;dbname=JavosDatabas", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		if(isset($_POST['tips'])){
            $tips=htmlentities($_POST['tips']);
            $ansvarig=htmlentities($_POST['ansvarig']);


			$querystring='INSERT INTO valla_tips (tips, ansvarig) VALUES(:tips, :ansvarig);';
			$stmt = $pdo->prepare($querystring);
			$stmt->bindParam(':tips', $tips);
			$stmt->bindParam(':ansvarig', $ansvarig);
			$stmt->execute();
			}
?>

<a href="inloggning.php?logout='1'" style="color: red;">logout</a>
				

				
			</div>
		</div>
	</div>
</body>
</html>