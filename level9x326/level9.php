<?php include "sidebar.html"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>MasterMind</title>
	<link rel="stylesheet" type="text/css" href="../css/levels.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Welcome to Level 9</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username is level_9"><br>
		
     	<label>Flag</label>
     	<input type="password" name="password" placeholder="Enter the flag"><br>

     	<button type="submit">Login</button>
		<button type="button" name="homeButton" onclick="location.href='database.php';">Users Database</button>
		<button type="button" name="homeButton" onclick="location.href='../helpPages/SQLInjection/index.php';">Stuck? Let's Talk</button>
     </form>
	 
	 <div id="particles-js"></div>
	 <script type="text/javascript" src="../particles.js"></script>
	 <script type="text/javascript" src="../app.js"></script>
</body>
</html>