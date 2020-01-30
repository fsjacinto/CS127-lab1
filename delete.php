<?php
	//Connect to MySQL Database
	include("config.php");
	 
	//Get csid of the data
	$csid = $_GET['csid'];
	 
	//deleting the row from table
	$res1 = mysqli_query($conn, "DELETE FROM personal1 WHERE csid=$csid");
	$res2 = mysqli_query($conn, "DELETE FROM personal2 WHERE csid=$csid");
	$res3 = mysqli_query($conn, "DELETE FROM family WHERE csid=$csid");
	$res4 = mysqli_query($conn, "DELETE FROM educational WHERE csid=$csid");
	$res5 = mysqli_query($conn, "DELETE FROM signdate WHERE csid=$csid");
	 
	//redirecting to the display page (index.php in our case)
	header("Location: view.php");

?>