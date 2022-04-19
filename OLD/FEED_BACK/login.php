<?php
     include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>log in page.</title>
</head>
<body>
	<form method="GET"><center>
		<input type="text" name="name" placeholder="your name"><br>
		<input type="text" name="gmail" placeholder="your gmail"><br>
		<input type="text" name="number" placeholder="your phon number"><br>
		<input type="password" name="password" placeholder="your password"><br>
		<input type="password" name="passwordconfig" placeholder="again your password"><br>
		<button type= "submit" name="submit" value="submit">log in</button>
	</center></form>
	<?php
 
         if(isset($_GET['submit']))  
         {
         	$varname= mysqli_real_escape_string($varconnecte,$_GET['name']);
         	$vargmail= mysqli_real_escape_string($varconnecte,$_GET['gmail']);
         	$varnumber= mysqli_real_escape_string($varconnecte,$_GET['number']);
         	$varpassword= mysqli_real_escape_string($varconnecte,$_GET['password']);
            
            if (!(empty($varname) or empty($vargmail) or empty($varnumber) or empty($varpassword) or 
                  empty($_GET['passwordconfig'])))
            {
               if ($varpassword===$_GET['passwordconfig'])
         	   {
         	     $varsql= "INSERT INTO login (name,gmail,mynumber,password) 
                 VALUES ('$varname','$vargmail','$varnumber','$varpassword');";
         	     mysqli_query($varconnecte,$varsql);
               }
               else
               {
            	  echo 'those passwords do not look the same!!' ;
               } 
            }
            else
            {
               header('Location: login.php?signin=empty');
            }
         }
	?>

</body>
</html>