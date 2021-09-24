<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS moviedb";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";

		mysqli_select_db($conn,"moviedb");
		//Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "CREATE TABLE IF NOT EXISTS movie (
        movie_id varchar(20) NOT NULL,
		movie_name varchar(20) NOT NULL,
		lead_actor varchar(20) NOT NULL,
		actress varchar(20) NOT NULL,
		year_of_release varchar(15) NOT NULL,
		director_name varchar(15) NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
		echo "Table created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}	
		
		
		$conn->close();
		
		}
		?>