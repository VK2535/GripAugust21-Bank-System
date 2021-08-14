<?php
	$host = "localhost";
        $user = "root";
        $pass = "";
        $db = "basic_bank_system";
        $charset = "utf8mb4";

        $conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}
?>


