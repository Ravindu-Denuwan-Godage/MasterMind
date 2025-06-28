<?php include "sidebar.html"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>MasterMind</title>
	<link rel="stylesheet" type="text/css" href="../css/levels.css">
</head>
<body>
	 <body oncontextmenu="return false;" >
     <form action="login.php" method="post">
     	<h2>Welcome to Level 2</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username is level_2"><br>
		
     	<label>Flag</label>
     	<input type="password" name="password" placeholder="Enter the flag"><br>
		<!-- Level 02 flag is qaZplm(673 -->
     	<button type="submit">Login</button>
		<button type="button" name="homeButton" onclick="location.href='../helpPages/InformationLeakage/index.php';">Stuck? Let's Talk</button>
     </form>
	 
	 <div id="particles-js"></div>
	 <script type="text/javascript" src="../particles.js"></script>
	 <script type="text/javascript" src="../app.js"></script>
</body>
</html>