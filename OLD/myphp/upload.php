<?php
    if (isset($_POST['submit']));
    {
    	$file = $_FILES['file'];
    	$filename=$_FILES['file']['name'];
    	$fileTmp=$_FILES['file']['tmp_name'];
    	$filesize=$_FILES['file']['size'];
    	$fileerror=$_FILES['file']['error'];
    	$filetype=$_FILES['file']['type'];


    	$fileext = explode('.', $filename);
    	$fileactualext = strtolower(end($fileext));

    	$alloweed=array('jpg','jpeg','png','pdf');


    	if (in_array($fileactualext, $alloweed)) {
    		if ($fileerror === 0) {
    			if ($filesize <=5000000) {
    				$filenamenew = uniqid('',true).".".$fileactualext;
    				$filedestination = 'A/'.$filenamenew ;
    				move_uploaded_file($fileTmp, $filedestination);
    				header('Location: index.php?upload=success');
                    echo $filedestination;

    				
    			}
    			else
    			{
    				echo "your file is too big";
    			}

    		}
    		else
    		{
    			echo "error";
    			}
    		
    	}
    	else
    	{
    		echo "impossible de telecharger ce fichier";
    	}
    }
?>