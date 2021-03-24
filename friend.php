<?php
        session_start(); 
?>

<html>

<head>

<title>Login Page</title>

</head>

<body>

<h3 align="center"> - Login - </h3>

<form name="myloginForm" method="post" action="loggedin.php">

<table width="300" border="1" align="center" cellpadding="5" cellspacing="0">

<tr> <td style="color:rgb(6,59,118)"><b>Username</b></td>

<td><input name="login" type="text" id="login" /></td> </tr>

<tr> <td style="color:rgb(6,59,118)"><b>Password</b></td>

<td><input name="password" type="password" s/></td> </tr>

<tr> <td colspan="2" align="center">

<input type="submit" name="submit" value="Login" /></td> </tr>

</table>

</body>

</html>
