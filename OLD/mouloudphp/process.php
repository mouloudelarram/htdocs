<?php
	//get values passe 
echo "welcome";
		  $username = $_POST['username'];
		  $Identity = $_POST['Identity'];
		  //to prevent mySQL injection
		  $username = stripcslashes($username);
		  $Identity = stripcslashes($Identity);
		  $username = mysql_real_escape_string($username);
		  $Identity = mysql_real_escape_string($Identity);

		  //connect to derver and select database;
		  mysql_connect()("localhost","root","");
		  mysql_select_db("longin");

		  // Query the database for user ;
		  $result = mysql_query("select *
		  	from users where username = '$username ' and Identity = '$password'")
		  or die("Failed to query database ".mysql_error());
		  $row = mysql_fetch_array($result);

		  if ($row['username'] == $username && $row['passeword'] == $Identity) 
		  {

		  	print( " mehba bek agmano " ) ;
		  } 
		  else 
		  {
		  	print( " chkon nta " ) ;
		  }
	?>