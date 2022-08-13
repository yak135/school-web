<?php
	$conn=mysqli_connect("localhost", "root", "", "school");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>