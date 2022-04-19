<?php
    try{
        //1
        $connection  = new PDO("mysql:host=localhost;dbname=gidb","root","");
        //2
        $reqst  = $connection->prepare("UPDATE USERS SET USERNAME = :NAME WHERE PASSWORD = :PASS");
        //3
        $reqst->execute(['NAME'=>"ESTE",'PASS'=>123]);
        //4

    }catch(Exception $e){
        echo $e->getMessage();
    }
?>





















































































<!-- <?php 
    /* function fct($item){
        if ($item%2 == 0)
            return $item;
        else
            return NULL;
    };
    $str = array(2,1,2,4,7,8,5,9,6,3,2,1,44,7,7,8,555,4888,710);
    $len = array_filter($str,"fct");
    //print_r($len);

    function div($d){
        if ($d == 0){
            throw new Exception("div sur 0");
        }
        return $d;
    }
    try{
        echo(div(1));
    }finally{
        echo "attention div sur 0";
    } */
    /* $file = fopen("C:\\xampp\htdocs\draft\\txt.txt","r") or die ("error");
    $str = fread($file,8);
    echo $str; */
/* 
    class myclass1{
        public $a = 10;
        function __construct(){
            $this->a = 55;
        }
        function aff(){
            print "\n".$this->a."\n";
        }
        function __destruct(){
            echo "bauuu';";
        }
    }
    class myclass extends myclass1{
        final $MAX = 20;
        function __construct($b){
            echo $b;
        }
    }



    $o = new myclass(90);
    $o->aff();
    var_dump($o instanceof myclass);
    echo $o->MAX = 10; */

    /* final class c1{
        public const MAX = 14;
        function __construct(){
            echo self::MAX;
        }
    }
    new c1(); */
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="" name="email" id="">
    <button type="submit">ok</button>
    </form>
</body>
</html> -->