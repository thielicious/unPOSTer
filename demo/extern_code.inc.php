<?php
	// code.inc.php
	
	require_once "unPOSTer.class.php";
	
	$unpost = new unPOSTer("KEEP_DATA");
	$unpost->unPost();
	
	header("Location:unPOSTer_demo2.php");

?>