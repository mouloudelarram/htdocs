   
    <!----------------------------------------- php code for erreur message ------------------------------------------->

    <?php
    /* for the sign up system*/
         // get the URL information:
         if (isset($_GET['signin']))
         {
         	$varsignin=$_GET['signin'];
         	//if index.php?signin=empty:
         	if ($varsignin=="empty")
         	{
         		echo "<script>alert('you do not fill in all the fields');</script>";
         	}
         	//if index.php?signin=invalide_name||number:
         	else if ($varsignin=="invalide_name||number")
         	{
         		echo "<script>alert('invalide name or invalide number');</script>";
         	}
         	//if index.php?signin=invalide_email:
         	else if ($varsignin=="invalide_email")
         	{
         		echo "<script>alert('invalide email!!');</script>";
         	}
         	else
         	{
         		exit();
         	}
         }
         else if (isset($_GET['password']))
         {
         	$varpasserreur=$_GET['password'];
         	if($varpasserreur=="passerreur")
         	{
            echo "<script>alert('those passwords does not look the same!!');</script>" ;}
         }
         else
         {
         	exit();
         }
    ?>