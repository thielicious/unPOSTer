<?php
	require_once "unPOSTer.class.php";
	
	$unpost = new unPOSTer("KEEP_POST");
	$unpost->unPost();
?>
<script>
	clearVal=()=> {
		var c=document.querySelectorAll("input[type='text']");
		c.forEach((k,v)=>{
			c[v].setAttribute("value","");
		});
	}
</script>
<form action='' method=POST>
	<input type=text name=fname value="<?php echo $unpost->retrieve("fname"); ?>" placeholder="First Name">
	<input type=text name=lname value="<?php echo $unpost->retrieve("lname"); ?>" placeholder="Last Name">
	<input type=submit name=send value=Send><input type=reset onClick='clearVal()' value=Reset>
</form>
<?php 
	echo "DEBUG:<br>";
	if (isset($_POST["send"])) {
		echo $_POST["fname"]." ".$_POST["lname"];
	}
	echo "<pre>";
	print_r($_POST);
	print_r($_SESSION);
	echo "</pre>";
	// $unpost->reset();
?>

