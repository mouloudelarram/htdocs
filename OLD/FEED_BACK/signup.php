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
		<input type="text" name="indentification" placeholder="your name or gmail or phon number"><br>
		<input type="password" name="password" placeholder="your password"><br>
		<button type= "submit" name="submit" value="submitpress">log up</button>
	</center></form>
	<?php
         if($_GET['submit']=='submitpress')
         {
         	
         	$varindentification= mysqli_real_escape_string($varconnecte,$_GET['indentification']);
         	$varpassword=mysqli_real_escape_string($varconnecte,$_GET['password']);
         	$varsql= "SELECT *FROM login ; ";
         	$result = mysqli_query($varconnecte,$varsql);
         	while ($row = mysqli_fetch_array($result))
            {
               if (($row['mynumber'] == $varindentification or $row['name'] == $varindentification
                  or $row['gmail'] == $varindentification  ) and $row['password'] == $varpassword)
            {
               echo "welcom!"; header('Location: login.php');
             
            }

            }
         	echo "indefine:(";

         }
	?>

</body>
</html>