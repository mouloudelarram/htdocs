<!DOCTYPE html>
<html>
<head>
	<title>try</title> 
</head>
<body>
	<form action="upload.php" method="POST" enctype="Multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit" >upload file</button>
		
	</form>

</body>
</html>
<!--
<?php/*
     $varserves="localhost";
     $varusername = "root";
     $varpass = "";
     $varname ="longin";
     $varcox = mysqli_connect($varserves,$varusername,$varpass,$varname);
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<form method="GET">
		<table>
			<input type="text" name="name1" placeholder="your name ..">
			<input type="password" name="pass1" placeholder="password(1 g @ # 7 ..)">
			<button type="submit" name="submit" value="submit">Submit</button>

		</table>
	</form>

    <?php
      if($_GET['submit']=="submit")
      {        }   
      	   $name=$_GET['name1'];
           $pass1=$_GET['pass1'];
         /*$sql="SELECT *FROM name ";
           $result = mysqli_query($varcox,$sql);
           while($row=mysqli_fetch_assoc($result))
           {
           	echo $row['pass']."<br>";
           }*//*
           $sql =   "INSERT INTO name (name,pass) VALUES ('$name','$pass1') ;";
           mysqli_query($varcox,$sql);}

*/
       ?>

</body>
</html>

-->





<!--
<?php//Get the data connecte:
     /*include_once  'include.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>long in</title>
</head>
<body>
	<center>
		<form method="POST">
			<table>
				<input type="text" name="name"  placeholder="your name.."><br>
				<input type="password" name="password"  placeholder="password(...? @ # % A 1 7)"><br>
				<button type="submit " name="submit" value="submit1">Submit</button>
			</table>
		</form>
	</center>
	<?php
	     if ("submit" == "submit1")
	     {
	     	$name =$_POST['name'];
	     	$password = $_POST['password'];
	     	//$sql= "INSERT into getuser (name,passeword) VALUES ('$name','$password'); ";
            $sql="SELECT * FROM getuser; ";
	     	$re=mysqli_query($varcox,$sql);$row=mysqli_fetch_assoc($re);
	     	echo $row['name'];
	     	header("Location:../andex.php?submit=success");
	     }



	?>

</body>
</html>


-->
<!--
<?php/*

     $dbServername = "localhost";
     $dbUsername = "root";
     $dbPassword= "";
     $dbName = "longin";

     $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
     */?>

<?php
    //include_once "include.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <?php/*
           //$sql = "SELECT * FROM name;";
            $variable = "INSERT INTO name (username,password,data) VALUES ('mouloud3','1234mimi','2021-11-21 12:12:12');";
             $result = mysqli_query($conn,$variable);
          // $result = mysqli_query($conn,$sql);
         /* // $resultcheck = mysqli_num_rows($result);
          // if ($resultcheck>0)
          // {
           	while ($row = mysqli_fetch_assoc($result))
           	{
           		echo $row['username']."<br>";

           	}
          // }*/



     ?>  
</body>
</html>
-->
<!--sgl
	create table name (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    username varchar(128) not null,
    password varchar(128) not null,
    date datetime not null

    SELECT * FROM `name` WHERE 1
insert into name (username, password ,date) VALUES ('mouloud2002','1234ms','2021-01-26 16:51:01');
) ;-->
<!--
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<form>
		
	</form>
	<?php/*
	$x=7;
          function fonct()
          {
          	$y = 10 ;
          	echo $GLOBALS['x'] ;
          }
          //fonct();
          //echo $y;
          //setcookie(name)
          $_SESSION['users']="mouloud";
          echo $_SESSION['users'];
	*/?>

</body>
</html>


-->
<!--
<?php/*
    include_once "A/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>use time with php</title>
	<link rel="stylesheet" type="text/css" href="file.css">
</head>
<body>
	<?php
	function fov()
	{
		echo "hi i am a new fonction ";
	}
	$answer = date("w");
	//echo $answer;
	switch ($answer) {
		case 1:
			echo "<p>tnin</p>" ;
			break;
		case 2:
			echo "<p> tlat <p>";
			break;
		case 3:
			echo "<p> larba3 <p>";
			break;
		case 4:
		    echo "<p> lkhmis <p>";
			break;
		case 5:
		    echo "<p> jm3a </p>";
			break;
		case 6:
			print( "<p> sbt </p>");
			break;
		case 0:
		    echo "<p> lhad </p>";
			break;
		default:
			echo "ah hada";
			break;
	}
	$i=0;
	for ($i=1;$i<=5;$i=$i+1)
	{
		fct();
	}
	$_SESSION["users"] = "mouloud20154879632";
	if (!isset($_SESSION["users"]))
	{
		echo "chkon nta rany mantdakreak;";
	}
	else 
	{
		echo "marhabtine :) ";
	}

//fov();


	?>
</body>
</html>




<!--
<!DOCTYPE html>
<html>
<head>
	<title>calculiter</title>
</head>
<bpdy>
	<center><p>Calculiter:</p>
	<div style= " background-color: #FFF">
		<form method="GET">
			<table>
				<tr>
					<input type="text" name="n1" placeholder="Number 1">					
				</tr>
				<tr>
					<input type="text" name="n2" placeholder="Number 2">
				</tr>
				<tr>
					<select name="op">
						<option>None(/0)</option>
						<option>Add(+)</option>
						<option>Subtract(-)</option>
						<option>Multiply(*)</option>
						<option>Divide(/)</option>
						<option>Modulo(%)</option>
						<option>Array(^)</option>
					</select>
				</tr>
				<tr>
					<button type="submit" name="but" value="submit">Submit</button>
				</tr>
			</table>
		</form>
		<p>the answer is:</p>
	</div></center>
</bpdy>
<!--  php code 
<?php/*
      if (isset($_GET['but']))
      	{
      		$n1 = $_GET['n1'];
      		$n2 = $_GET['n2'];
      		$op = $_GET['op'];
      		switch ($op) {
      			case 'None(/0)':
      				echo "You need to select a method !!";
      				break;
      			case 'Add(+)':
      				echo $n1+$n2;
      				break;
      			case 'Subtract(-)':
      				echo $n1-$n2;
      				break;
      			case 'Multiply(*)':
      				echo $n1*$n2;
      				break;
      			case 'Divide(/)':
      				echo $n1/$n2;
      				break;
      			case 'Modulo(%)':
      				echo $n1%$n2;
      				break;
      			case 'Array(^)':
      				echo $n1**$n2;
      				break;
      			
      			default:
      				echo "erreur";
      				break;
      		}

      	}
*/
?>
</html>

-->
<!--
<!DOCTYPE html>
<html>
<head>
	<title>My site</title>
</head>
<body>
	<center><h1 style="color: #00eeee">Site web for logos</h1>
	<div style="display: inline-flex;background-color:#eeeeee ">
		<img src="butman.png" style="width: 110px;height: 70px">
		<h3 style="margin-left:300px ">HOME</h3>
		<h3 style="margin-left:300px">CONTACT</h3>
		<h3 style="margin-left:300px;margin-right: 50px ">HELP</h3>
	</div>
	<form method="GET"  style="border: solid 20px ;border-radius: 10px ;margin: 100px">
		<h1>LONGIN PAGE</h1>
		<TABLE>
			<tr>
				<td>Phone nomber</td>
				<TD>
					<input type="integer" name="nomber">
				</TD>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>

			</tr>
			<tr>
				<td></td>
				<td><button>cleck me</button></td>
			</tr>
		</TABLE>
    </form>
	</center>

    php code 
	<?php
	/*
	    $Nomber = $_GET['nomber'];
		$name = $_GET['username'];
		if ($Nomber === '0636756852' )
		{
			echo "Oh Hi mouloud nice too meet you" ;
		}
		else 
		{
			echo " Hi ".$name;
		}
		$Nomber = $_GET['nomber'];
		$USEname = $_GET['username'];
		print $Nomber." le nomber de ".$USEname;

		echo strlen("mouloud elarram");
		echo "\n mouloud elarram";
		echo str_word_count("mouloud elarram");
		echo strrev("mouloud elarram");*/


	?>
</body></html>
-->