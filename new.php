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
<h1 align="center">NEW SESSION TUTORIAL 2012</h3>
<br>
<br>
<h3 align="center"> Part-2</h3>

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br><br><br>

<p align="center"> Apart from sessions other mechanism to pass<br></p>
<p align="center">variables accross PHP scripts are:<br><br><br></p>
<p align="center">1. Get Method<br></p>
<p align="center">2. POST Method<br></p>
<p align="center">3. Cookies<br></p>
<p align="center">4. Files<br></p>
<p align="center">5. Databases<br></p>
<div style="text-align:center">  
    <input type="submit" value="Back"   />  
</div>  

</body>

</html>
