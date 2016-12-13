<?php
	require_once "unPOSTer.class.php";
	
	$unpost = new unPOSTer();
	$unpost->active(1);
	$unpost->keepPOST(1);
	$unpost->unPOST();
?>

<form action='' method=POST>
	<input type=text name=fname placeholder="First Name">
	<input type=text name=lname placeholder="Last Name">
	<input type=submit name=send value=Send>
</form>
<?php 
	if (isset($_POST["send"])) {
		echo $_POST["fname"]." ".$_POST["lname"];
	}
?>

