<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Login</title>
		
		<meta charset="utf-8">
	<style>
	
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


button[type=submit] {
    width: 100%;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}



	body{text-align:center;}
	</style>
</head>
<body>

	<div class="header">
		
	</div>
	<div id="inloggcontent">
	<form method="post" action="login.php">
		
		<?php echo display_error(); ?>
		<h2>Logga In</h2>
		<div class="input-group">
			<label>Användarnamn</label>
			<input type="text" name="username" class="field size1" >
		</div>
		<div class="input-group">
			<label>Lösenord</label>
			<input type="password" name="password" class="field size1">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		
	</form>
	</div>

</body>
</html>