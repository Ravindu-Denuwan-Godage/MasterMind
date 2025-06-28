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
	<button class="button-24" role="button" onclick="location.href='./level7.php';">Go Back</button>
	</div>

<div align="center">
<form action="" method="post" enctype="multipart/form-data">
   <br>
   <label>Upload your image here:</label> 
    <input type="file" name="file" id="file" style="border: solid; border-color: #D7DBDD; width:190px; color: #fff;">
    <input type="submit" value="Submit" name="submit">
</form>
</div>
<?php

// Moving the uploaded file of the player to the "uploads" directory and displaying the uploaded path with the uploaded file name to the player
if(isset($_POST["submit"])) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	
	$print = "File uploaded to /uploads/";
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
	echo '<p style="color: #AFA; text-align: center">'.$print.$_FILES["file"]["name"].'</p>';
}
?>
</body>
</html>
