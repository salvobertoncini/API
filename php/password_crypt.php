<?php
	
	//$dbpass = password_hash('abcd1234', PASSWORD_DEFAULT, ['cost' => 12]);
	$dbpass = '$2y$12$SUpH3MymDVlHwzOfbk98feG3ykTT6R3GZ1JVjtTFrUPFlwJfFv4Zu';

	if(isset($_POST["password"]))
	{
		if(password_verify($_POST["password"], $dbpass))
			echo 'Ok ;)<br>';
		else
			echo 'OPS. Something went wrong :(<br>';
	}
?>

<h2>Password test</h2>

<form action='password_crypt.php' method='post'>
	<input type="text" placeholder="Insert password" name="password" ></input>
	<input type="submit" value="Submit"></input>
</form>
