<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>

<form method="post" action="action.php">
    <p><label>First Name: </label><input type="text" name="fname" /></p>
    <p><label>Last Name: </label><input type="text" name="lname" /></p>
    <p><label>Email: </label><input type="text" name="email" /></p>
	<p><label>City: </label><input type="text" name="city" /></p>
	<p><label>Phone: </label><input type="text" name="phone" /></p>
		<p><label>Country: </label>
	
	<select name="country">
		<option value="Sri Lanka">Sri Lanka</option>
		<option value="India">India</option>
		<option value="Pakistan">Pakistan</option>
		<option value="Nepal">Nepal</option>		
	</select>	
	</p>

	<p><label>Language: </label>
	<select name="language">		
		<option value="English">English</option>
		<option value="Russian">Russian</option>
	</select>
	</p>
	
    <p><input type="submit" name="submit" value="SUBSCRIBE"/></p>
</form>