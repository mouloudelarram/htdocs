<?php
      include 'database.php';
      include 'database.php';
      include 'signin.php';
      include 'signup.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>door</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body"><center> 
    <div>
            <H1 class="empty">
                Feed_Back.
            </H1> </div>

	<div class="divglob">

	<!----------------------------------------------------sign up system ---------------------------------------------------->

	<form method="GET">
		<div  class="div1">
            <h1>
                Sign up
            </h1>
		<!-- fill in and keep data-->
		<?php
		     //if name alredy exist:
		     if (isset($_GET['name']))
		     {
		     	echo '<input class="input" type="text" name="name" placeholder=" your name" value="'.$_GET['name'].'"><br>';
		     }
		     else 
		     {
		     	echo '<input class="input" type="text" name="name" placeholder=" your name"><br>';
		     }
		     //if gmail alredy exist:
		     if (isset($_GET['gmail']))
		     {
		     	echo '<input class="input" type="text" name="gmail" placeholder=" your gmail" value="'.$_GET['gmail'].'"><br>';
		     }
		     else 
		     {
		     	echo '<input class="input" type="text" name="gmail" placeholder=" your gmail"><br>';
		     }
		     //if number alredy exist:
		     if (isset($_GET['number']))
		     {
		     	echo '<input class="input" type="text" name="number" placeholder=" your phon number" value="'.$_GET['number'].'"><br>';
		     }
		     else 
		     {
		     	echo '<input class="input" type="text" name="number" placeholder=" your phon number"><br>';
		     }

		     ?>
		<input class="input" type="password" name="password" placeholder=" your password"><br>
		<input class="input" type="password" name="passwordconfig" placeholder=" again your password"><br>
		<button class="input" type= "submit" name="submitin" value="submit">log in</button><br>
    	</div>
    </form>

    <!----------------------------------------------------sign in system ---------------------------------------------------->
    <div class="div2">
        <h1>
            Sign in
        </h1>
	<form method="GET">
		<input class="input1" type="text" name="indentification" placeholder=" name or gmail or phone"><br>
		<input class="input1"  type="password" name="password" placeholder=" your password"><br>
		<button class="input1"  type= "submit" name="submitup" value="submitpress">log in</button><br>
	</form>
	</div>
</div>
</center>

<?php
    include 'alert.php';
?>
</body>
</html>