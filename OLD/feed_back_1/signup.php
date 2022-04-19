
<!--------------------------------------------------------------php code sign up system--------------------------------------------------------------->
	<?php
        // test if i press the button:
         if(isset($_GET['submitin']))  
         {
         	$varname= mysqli_real_escape_string( $varconnecte ,$_GET['name']);
         	$vargmail= mysqli_real_escape_string( $varconnecte ,$_GET['gmail']);
         	$varnumber= mysqli_real_escape_string( $varconnecte ,$_GET['number']);
         	$varpassword= mysqli_real_escape_string( $varconnecte ,$_GET['password']);
         	// test if i fill in all fields :
         	if (!(empty($varname) or empty($vargmail) or empty($varnumber) or empty($varpassword) or 
                  empty($_GET['passwordconfig'])))
            {
            	//test if i use a valide caractere in the name ,and a valide number in the number:
            	if (preg_match("/^[ a-zA-Z]+$/",$varname ) &&  preg_match('/^[+1234567890]*$/',$varnumber ) )
            	{
            		//test if i use a valide email:
            		if (filter_var($vargmail, FILTER_VALIDATE_EMAIL))
            		{
            			//test the password:
                        if ($varpassword===$_GET['passwordconfig'])
         	            {
         	            	//add element to the table 'login':
         	                $varsql= "INSERT INTO login (name,gmail,mynumber,password) 
                                      VALUES ('$varname','$vargmail','$varnumber','$varpassword');";
         	                mysqli_query($varconnecte,$varsql);
         	                header('Location: home.php?signin=success');
                        }
                        //invalide password:
                        else
                        {
                        	header("Location:index.php?password=passerreur&gmail=$vargmail&name=$varname&number=$varnumber");
                        }
                    }
                    //invalide email:
                    else
                    {
                    	header("Location: index.php?signin=invalide_email&name=$varname&number=$varnumber");
                    	//exit();
                    }
                }
                //invalide name or number
                else
                {
                	header("Location: index.php?signin=invalide_name||number&gmail=$vargmail");
                	//exit();
                }
            //avoid NULL:
            }
            else 
            {
            	header("Location: index.php?signin=empty");
            	//exit();
            }
        }
        //if i do not press the button:
        else
        {
         	//exit();
        }
	?>