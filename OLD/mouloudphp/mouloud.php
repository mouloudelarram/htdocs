<!DOCTYPE html>
<html>
<head>
	<title>my site php</title>
</head>
<body style="background-color: #eee">

    <center>
    	<form method="GET"> 
         <!-- action="process.php"  -->
    		<table style="background-color: #fff ; border:solid gray 1px;width: 20%;border-radius: 5px;margin: 100px auto; background: white;padding: 50px; ">
    			<tr>
    				<td>
    				<label>Username:</label>
    				</td>
    				<td>
    					<input type="text" id="user" name="username"/>
    				</td>
    			</tr>
    			<tr>
    				<td>
    				<label>Identity:</label>
    				</td>
    				<td>
    					<input type="password" id="pass" name="Identity"/>
    				</td>
    			</tr>
    			<tr>
    				<td>submet her:</td>
    				<td>
    				<input type="submit" id="btn" value="login"  style="color: #fff;background: #337ab7;padding: 5px;margin-left: 70%"/>
    				</td>
    			</tr>
    		</table>
    	</form>
    </center>


    <!-- php -->
    <?php
    //get values passe 
echo "welcome";
          $username = $_GET['username'];
          $Identity = $_GET['Identity'];
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
	

</body>
</html>