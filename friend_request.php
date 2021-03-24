<?php

session_start();

$_SESSION['username'] = 'nishant';

$_SESSION['pass'] = 12345;

?>

<html>

<head>

<title>SignIn Page</title>

</head>

<body>

<h3 align="center"> - SignIn - </h3>

<form name="mysigninForm" method="post" action="friend.php">

<table width="300" border="1" align="center" cellpadding="5" cellspacing="0">

<tr> <td style="color:rgb(6,59,118)"><b>Username</b></td>

<td><input name="login" type="text" id="login" /></td> </tr>

<tr> <td style="color:rgb(6,59,118)"><b>Password</b></td>

<td><input name="password" type="password" s/></td> </tr>

<tr> <td colspan="2" align="center">

<input type="submit" name="submit" value="SignIn" /></td> </tr>

</table>

</body>

</html>
