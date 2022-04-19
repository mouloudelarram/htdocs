<?php 
    session_start();
    //include "./tools.php";
    //$_userdata=getUserData();
    //$_SESSION["userdata"]=$_userdata;
    $error="";
    $username="";
    $password="";
    if(count($_POST)>0){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if(array_key_exists( $username,$_SESSION["userdata"] )){
            if($_SESSION["userdata"][$username]["password"]==$_POST["password"]){
                $_SESSION["user"]= $username;
                header("Location: home.php");
            }
            else
            $error="Password invalide!!";  
        }
        else
            $error="Login invalide!!";  
   }
   elseif(count($_GET)>0){
       unset($_SESSION["user"]);
       unset($_SESSION["userdata"]);
       header("Location: index.php");
       //session_unset()
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<div id="error"><?php echo $error; ?></div>  
<form action="./login.php" method="post">
    
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?php echo $username ?>">
    <label for="password" >Password:</label>
    <input type="password" name="password" value="<?php echo $password ?>">
    <input type="submit" value="Connect">
</form>
</body>
</html>
