<?php 
session_start();
include "./tools.php";
$userdata=getUserData();

if(count($_POST)>0){

    $userdata[$_SESSION["user"]]["score"]=$_POST["score"];
    $f= fopen('./data.txt', 'w');
    foreach ($userdata as $u=>$v)
    {
        $line=$u." ".$v["password"]." ".$v["email"]." ".$v["score"].PHP_EOL;
        fwrite($f,$line);  
    }
    fclose($f);
}

$_SESSION["userdata"]=$userdata;

//print_r($userdata);
if(count($_SESSION)>1){
    header("Location: home.php");
}
else
    header("Location: login.php")
?>