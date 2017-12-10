<?php 
	session_start();

	// Databaskopplingen
	$db = mysqli_connect('wwwlab.iit.his.se', 'sqllab', 'Tomten2009', 'Javos_login');

	// Deklarerar Variabler
	$username = "";
	$email    = "";
	$errors   = array(); 

	// Tillkalla register() funktionen om register_btn klickas (Registrera knappen)
	if (isset($_POST['register_btn'])) {
		register();
	}

	// Tillkalla login() funktionen om login_btn klickas (Logga in knappen)
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: inloggning.php");
	}

	// REGISTRERA ANV�NDARE
	function register(){
		global $db, $errors;

		require_once('password-policy.php');
		// TAREMOT INFORMATIONEN IFRåN FORM
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);
		//Lösen test!//
		 $rules['min_length'] = 8;
		 $rules['max_length'] = 64;

		 $policy = new PasswordPolicy($rules);
    
		// Rules defined on object
		

		// FORM VALIDATION: F�RS�KRAR ATT FORMEN FYLLS I KORREKT
		if (empty($username)) { 
			array_push($errors, "Användarnamn Saknas"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email Saknas"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Lösenord Saknas"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "De två lösenorden matchar inte!");
		}
		//print_r($_POST);
		// INGA ERRORS F�REKOMMIT I FORMEN
		if (count($errors) == 0) {

			$password = $password_1;
			// Tillåtna lösenord
			$characters = "/(!?=.*[A-Za-z])(?=.*[0-9])(?=.*[^a-zA-Z0-9])/";
			//Split into array to check each character
			$chars = str_split($characters);
			
			//Set wrong password by default and check for correct characters
			$correctPassword = false;
			
			//Check each character
			foreach($chars as $char){
				//If characters have been found, set password as correct
				if (strpos($password, $char))
				{
					$correctPassword = true;
				}
			}
			
			//Also check for length, equal or greater then 6, smaller or equal to 20
			if ( ($correctPassword) && ( strlen($password) >= 6 )  && ( strlen($password) <= 20 ) )
			{
				$password = md5($password);//SKAPAR KRYPTERAT L�SENORD
				
							if (isset($_POST['user_type'])) {
								$user_type = e($_POST['user_type']);
								$query = "INSERT INTO users (username, email, user_type, password) 
										  VALUES('$username', '$email', '$user_type', '$password')";
								mysqli_query($db, $query);
								$_SESSION['success']  = "Användare skapad!!";
								header('location: admin.php');
							}else{
								$query = "INSERT INTO users (username, email, user_type, password) 
										  VALUES('$username', '$email', 'user', '$password')";
								mysqli_query($db, $query);
				
								// H�MTAR ID P� ANV�NDAREN
								$logged_in_user_id = mysqli_insert_id($db);
				
								$_SESSION['user'] = getUserById($logged_in_user_id); // PLACERAR ANV�NDAREN I LOGIN SESSION
								$_SESSION['success']  = "Du är nu inloggad!";
								array_push($errors, "Konto Skapat!");
								header('location: ');				
							}
				
			}
			else
			{
				array_push($errors, "Lösenordet ska innehålla minst 6 tecken, varav en stor bokstav och minst en siffra!");
			}
			
		}
		
	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// INLOGGNING ANV�NDARE
	function login(){
		global $db, $username, $errors;

		// TA FORM V�RDEN
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// KONTROLLERAR ATT FORM FYLLS KORREKT
		if (empty($username)) {
			array_push($errors, "Användarnamn saknas!");
		}
		if (empty($password)) {
			array_push($errors, "Lösenord saknas!");
		}

		// F�RS�K INLOGG OM INGA FEL INTR�FFAT
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // ANV�NDARE HITTAD
				// KONTROLLERAR USER_TYPE (ADMIN / USER)
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "Du är nu inloggad!";
					header('location: admin.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "Du är nu inloggad!";

					header('location: user_page.php');
				}
			}else {
				array_push($errors, "Fel Användarnamn/Lösenord");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// ESCAPE_STRING KONTROLLERAR ATT DET �R S�KERT ATT SKICKA SQL QUERYN
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>