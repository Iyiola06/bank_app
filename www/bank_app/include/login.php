<?php
session_start();
include'../include/db.php';

if(isset($_POST['submit'])){
	$error = array();
	
	if(empty($_POST['email'])){
		$error['hash'] = "Enter Email";
	}
	
	if(empty($_POST['hash'])){
		$error['hash']= "Enter Password";
	}
	
	
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<?php if(isset($error['email'])){
	echo $error['email'];
}
?>
<p> Email: <input type="email" name="email" /></p><br />


<?php if(isset($error['email'])){
	echo $error['email'];
}
?>


<p>Password: <input type="password" name="hash" /></p>
<input type="submit" name="submit" value="Login" />

</form>
</body>
</html>