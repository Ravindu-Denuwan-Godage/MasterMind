<!DOCTYPE html>
<html>
<head>
	<title>MasterMind</title>
	<link rel="stylesheet" type="text/css" href="../css/database.css">

	<style>
		.button-24 {
			background: #FF4742;
			border: 1px solid #FF4742;
			border-radius: 6px;
			box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
			box-sizing: border-box;
			color: #FFFFFF;
			cursor: pointer;
			display: inline-block;
			font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
			font-size: 16px;
			font-weight: 800;
			line-height: 16px;
			min-height: 40px;
			outline: 0;
			padding: 12px 14px;
			text-align: center;
			text-rendering: geometricprecision;
			text-transform: none;
			user-select: none;
			-webkit-user-select: none;
			touch-action: manipulation;
			vertical-align: middle;
		}

		.button-24:hover,
		.button-24:active {
			background-color: initial;
			background-position: 0 0;
			color: #FF4742;
		}

		.button-24:active {
			opacity: .5;
		}
	</style>
</head>
<body>
	<div style="padding:15px;">
	<button class="button-24" role="button" onclick="location.href='./level9.php';">Go Back</button>
	</div>

	<div align="center">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
        <label>Enter the user's first name and get the surname</label><br><br>
		<label>Ex: Ravindu => Denuwan </label>: <input type="text" name="firstname" placeholder="Enter First Name">
		<input type="submit" name="submit" value="Submit">
	</form>
	</div>


<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "mastermind";

	// Creating connection
	$conn = mysqli_connect($servername,$username,$password,$db);

	// Checking connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	} 
	//echo "Connected successfully";
	
	if(isset($_POST["submit"])){
		$firstname = $_POST["firstname"];
		$sql = "SELECT lastname FROM sqlinjection WHERE firstname='$firstname'";//String
		$result = mysqli_query($conn,$sql);
		
		if (mysqli_num_rows($result) > 0) {
        // output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
				echo '<p style="color: #AFA; text-align: center">'.$row["lastname"].'</p>';
    		}
		} else {
			echo '<p style="color: #AFA; text-align: center">0 results</p>';
		}
	}
 ?>
</body>
</html>
