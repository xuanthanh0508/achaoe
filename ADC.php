<?php
/* Attempt Heroku Postgres connection
    Assuming you are running Heroku Postgres add-on
	with default setting*/
	$link = pg_connect("host=ec2-52-71-85-210.compute-1.amazonaws.com
	                    dbname=d2ub3mhgv8e8d3
						user=zxvfrtbzdcafng
						password=97a1097829459a75351677aa2a6a1fe5525234b53f60f52035348ee7a3a650c8")

	// Check connection
	if($link === false){
		die("ERROR: Could not connect. ");
	}
	
	//Escape user inputs for security
	//$id = myqli_real_escape_string($link, $_REQUEST['id']);
	//$name = myqli_real_escape_string($link, $_REQUEST['name']);
	//$cat = myqli_real_escape_string($link, $_REQUEST['cat']);
	//$date = myqli_real_escape_string($link, $_REQUEST['date']);
	//$price = myqli_real_escape_string($link, $_REQUEST['price']);
	//$description = myqli_real_escape_string($link, $_REQUEST['description']);
	
	$id = "001";
	$name = "My Product";
	$cat = "Default";
	$date = "04/24/2020";
	$price = 100.3;
	$description = "Default";
	
	 echo $id
	 echo $name
	 echo $cat
	 echo $date
	 echo $price
	 echo 
	
	//Attempt insert query execution
	$sql = "INSERT INTO Product (Id, Product_Name, Category,Data, Price,Description) VALUES
	('$id', '$name', '$cat', '$date', '$price', '$description',)";
	if(pg_query($link, $sql)){
		echo "Records added successfully,";
	} else{
		echo "ERROR: C not able to execute $sql. " .pg_error($link);
	}