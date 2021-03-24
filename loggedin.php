<?php
        session_start(); 
	$login = $_POST['login']; 
	$password = $_POST['password']; 
		if(!isset($_SESSION['countdown'])){
    		$_SESSION['countdown'] = 20;
    		$_SESSION['time_started'] = time();
	}
	$now = time();
	$timeSince = $now - $_SESSION['time_started'];
	$remainingSeconds = abs($_SESSION['countdown'] - $timeSince);

	if($remainingSeconds < 1){
		echo '<a href="friend.php">Your session has expired!</a>';
	}
	else if(($remainingSeconds >= 1) && ($login == $_SESSION['username'] && $password ==$_SESSION['pass']))
	{ 
	echo 'You are now logged in!!';
	} 
	else{ 
		session_destroy();
		include('friend.php'); 
		echo '<br><center>Incorrect Username or Password !!!<center>'; 
		exit(); 
	}	
?>

<html>

<head>


</head>

<body>

<form name="new" method="post" action="new.php">
<h1 align="center">NEW SESSION TUTORIAL 2012</h3>
<br>
<br>
<h3 align="center">Part-1</h3>

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br><br><br>

<p align="center">1. Sessions are mechanisms for variable passing.<br></p>
<p align="center">2. Individual user's sessions are identified by session id.<br></p>
<p align="center">3. Session variables are stored on WebServer.<br></p>
<p align="center">4. Session access is started by session_start() function.<br></p>
<p align="center">5. Sessions variables are destroyed by session_destroy.<br></p>

<div style="text-align:center">  
    <input type="submit" value="Next"/>  
</div>  
</form>
</body>

</html>
