<?php

	$link = mysqli_connect("localhost", "root", "md5", "Users");

	if( mysqli_connect_error()){
		die("Could not connect to database");

	}
	
   // $query = "INSERT INTO `Users`(`name`,`email`, `password` ) VALUES('Nanna', 'nanna@gmail.com', '1234')";
	//$query = "UPDATE Users SET email='ian@hotmail.com' WHERE id=2 LIMIT 1";
	//mysqli_query($link, $query);

  

	$query = "SELECT * FROM Users WHERE name ='Nanna'";

	if($result=mysqli_query($link, $query))
	{
		echo mysqli_num_rows($result);
		while($row = mysqli_fetch_array($result)){
			print_r($row);

		}
		//echo "It worked!";
	}
	else
	{
		echo "It failed!";
	}

?>