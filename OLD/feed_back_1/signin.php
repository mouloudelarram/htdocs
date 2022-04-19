
<!---------------------------------------------------php code sign in system----------------------------------------------------->
<?php
	     // test if i fill in all fields :
         if(isset($_GET['submitup']))
         {
         	
         	$varindentification= mysqli_real_escape_string($varconnecte,$_GET['indentification']);
         	$varpassword=mysqli_real_escape_string($varconnecte,$_GET['password']);
         	$varsql= "SELECT *FROM login ; ";
         	$result = mysqli_query($varconnecte,$varsql);
         	// test if i fill in all fields:
         	if (!(empty($varindentification) or empty($varpassword)))
         	{
         		//do the comaretion between what i fill in and what is in the database:
             	while ($row = mysqli_fetch_array($result))
                {
                	//do the comaretion between what i fill in and what is in the database element per elements:
                    if (($row['mynumber'] == $varindentification or $row['name'] == $varindentification
                         or $row['gmail'] == $varindentification  ) and $row['password'] == $varpassword)
                    {
                        header('Location: home.php?signup=success');
                    }
                }
                //if i not sing in alredy:
         	    //header("Location:index.php?password=passworderreur&indentification=$varindentification");
         	    //echo "indefine:(";
         	    echo "<script>alert('indefine :(');</script>";
            }
            // if i do not fill in a elements:
            else 
            {
            	header('Location: index.php?signin=empty');
            	exit();
            }


         }
?>