<?php 
session_start(); 
include "../db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: level4.php?error=Please enter the Username");
	    exit();
	}else if(empty($pass)){
        header("Location: level4.php?error=Please enter the Flag");
	    exit();
	}else{
		$sql = "SELECT * FROM level4 WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../level5x173/level5.php");
				echo "Dictionary attack is succeeded. Level 4 flag is bgTewq^231";
		        exit();
            }else{
				header("Location: level4.php?error=Incorrect Username or Flag");
		        exit();
			}
		}else{
			header("Location: level4.php?error=Incorrect Username or Flag");
	        exit();
		}
	}
	
}else{
	header("Location: level4.php");
	exit();
}

?>