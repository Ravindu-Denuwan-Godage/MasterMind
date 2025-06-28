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
	<button class="button-24" role="button" onclick="location.href='./level10.php';">Go Back</button>
   </div>

<div align="center">
   <form method="GET" action="" name="form">
   
   <script>
      function lettersOnly(input) {
         var regex = /[^a-z]/gi;
         input.value = input.value.replace(regex, "");
      }

      window.onload = () => {
         const myInput = document.getElementById('myInput');
         myInput.onpaste = e => e.preventDefault();
      }
   </script>

   <label>Enter your name and print it on the page or you can use the following code as well <br><br>
   &lt;form&gt;&lt;button formaction=javascript:alert('Hacked')&gt;click</label><input type="text" name="username" placeholder="Enter your name" id="myInput" onkeyup="lettersOnly(this)"></p>
   <input type="submit" name="submit" value="Submit">
</form>
	</div>
<?php
if(isset($_GET["username"])){
   $name = "Hello! Thanks for playing MasterMind. Your name is ";
   echo '<p style="color: #AFA; text-align: center">'.$name.$_GET["username"].'</p>';

   $userInput = $_GET["username"];
   
   if($userInput === "<form><button formaction=javascript:alert('Hacked')>click") {
      echo '<script>alert("XSS attack is succeeded! Level 10 flag is zxSqpl$912")</script>';
   }
}
?>
</body>
</html>
