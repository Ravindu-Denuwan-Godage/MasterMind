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
	<button class="button-24" role="button" onclick="location.href='./level4.php';">Go Back</button>
	</div>

	<div align="center">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
        <label>Use Burp Suite or OWASP ZAP for performing the attack and examine the responses!</label>
	</form>
	</div>
</body>
</html>
