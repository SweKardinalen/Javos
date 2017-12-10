<!DOCTYPE html>
<html>
	<head>
		<title>Väder</title>
		<link rel="stylesheet" href="css/main.css">
        <meta charset="utf-8">
        
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">		
		<script language="JavaScript">
 
 </script>

<style>
input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}

/* -------------------- Page Styles (not required) */
div { margin: auto; }

/* -------------------- Select Box Styles: bavotasan.com Method (with special adaptations by ericrasch.com) */
/* -------------------- Source: http://bavotasan.com/2011/style-select-box-using-only-css/ */
.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
}

.styled-select select {
   background: transparent;
   border: none;
   font-size: 14px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
}

.styled-select.slate {
   background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
   height: 34px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}

.semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
}

/* -------------------- Colors: Background */

.blue    { background-color: #3b8ec2; }


/* -------------------- Colors: Text */

.blue select    { color: #fff; }



/* -------------------- Select Box Styles: danielneumann.com Method */
/* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */
#mainselection select {
   border: 0;
   color: #EEE;
   background: transparent;
   font-size: 20px;
   font-weight: bold;
   padding: 2px 10px;
   width: 378px;
   *width: 350px;
   *background: #58B14C;
   -webkit-appearance: none;
}

#mainselection {
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}


/* -------------------- Select Box Styles: stackoverflow.com Method */
/* -------------------- Source: http://stackoverflow.com/a/5809186 */
select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

select#soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: #779126;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
</style>


	</head>

	<body>
		<main>
                <?php include("header.php"); ?>
        


                <div text-align:'center' margin:'auto';>
				<h1>Veckans Väder</h1>
<?php
				// This checks to ensure the form has been submitted
				if( isset( $_POST['submitBtn'] ) ){

					$dropdownValue = $_POST['myDropdown'];
					
					if( empty( $dropdownValue ) || $dropdownValue == "null" ){
						include("Vader/Hedemora.php");

					}
						// If there isn't a value for the dropdown, or they've selected the option
						// that reads "Please select one" then return an error
						
					
					if( $dropdownValue == "Hedemora" ){
					// Hanterar Hedemora
						include("Vader/Hedemora.php");
						echo "<br>";
					}
										
					if( $dropdownValue == "Norrhyttan" ){
					// Hanterar Norrhyttan
						include("Vader/Norrhyttan.php");
						echo "<br>";
					}
					
					if( $dropdownValue == "Bondhyttan" ){
					// Hanterar Bondhyttan
						include("Vader/Bondhyddan.php");
						echo "<br>";
					}
															
					if( $dropdownValue == "Bommarsbo" ){
					// Hanterar Bommansbo
						include("Vader/Bommarsbo.php");
						echo "<br>";
					}
										
					if( $dropdownValue == "Smedjebacken" ){
					// Hanterar Smedjebacken
						include("Vader/Smedjebacken.php");
						echo "<br>";
					}
					
					if( $dropdownValue == "Björsjö" ){
					// Hanterar Björsjö
						include("Vader/Bjorsjo.php");
						echo "<br>";

					}
					if( $dropdownValue == "Grangesberg" ){
					// Hanterar Grängesberg
						include("Vader/Grangesberg.php");
						echo "<br>";
					}																					
				}
?>
		
    
					<!-- Skapar en form som hanterar Väder-->
					<form action="vaderdemo.php" method="post" enctype="multiparty/form-data">
						<div class="styled-select blue semi-square">
							
								<select name="myDropdown" >
									<option value="null">Välj en ort...</option>
									<option value="Hedemora">Hedemora</option>
									<option value="Norrhyttan">Norrhyttan</option>
									<option value="Bondhyttan">Bondhyttan</option>
									<option value="Bommarsbo">Bommarsbo</option>
									<option value="Smedjebacken">Smedjebacken</option>
									<option value="Björsjö">Björsjö</option>
									<option value="Grangesberg">Grängesberg</option>
								</select>
								</div>
								<br>
									<input type="submit" name="submitBtn" value="Visa"/>
							
						
					</form>
		

					
        



        </main>

	</body>
	
        <?php include("footer.php"); ?>


</html>