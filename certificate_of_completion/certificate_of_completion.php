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
            margin-right: 5px;
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

        .download-btn{
            background-color: DodgerBlue;
            color: white;
			border-radius: 6px;
			box-sizing: border-box;
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
			vertical-align: middle;
        }

        .download-btn:hover {
            background-color: RoyalBlue;
        }
	</style>
</head>
<body>
   <div style="padding:15px;">
	<button class="button-24" role="button" onclick="location.href='../#home';">Home</button>
    <a href="./certificate_of_Completion.pdf" download='Certificate of Completion' class="download-btn">Download Certificate
    </a>
   </div>

<div align="center">
   <form method="GET" action="" name="form">
   <label><strong>Congratulations!</strong></label><br><br>
   <label>You’ve successfully completed all 10 levels of MasterMind. To download your certificate of completion, simply click the <strong>"Download"</strong> button above.</label><br><br>
   <label>Thank you for playing and learning with MasterMind!</label>
   </form>
   </div>
</body>
</html>
