<?php
	
	//session control
	session_start();
	if (isset($_GET['requirement_id_TBD']))
		$requirement_id = $_GET['requirement_id_TBD'];
	else
		echo "Invalid access.";
			
	//DB connection
	include("../includes/reqd_connection.php");
	
	//delete query
	$q = "DELETE FROM requirements WHERE requirement_id = '$requirement_id'";
	
	$r = $conn->query($q);
	if($r === TRUE)
		header('LOCATION: requirementslist.php');
	else
		echo "Fail to delete.";
		
?>			
	
