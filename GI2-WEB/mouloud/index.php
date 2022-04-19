<?php
    include './data/data.php';
    $tableusers = getData($tableDatas);
    //print_r($_COOKIE['name']);
    session_start();
    $_SESSION['userData'];
    //print_r($_SESSION['userData']);
    //unset($_SESSION['userData']);
    
    
    if (empty($_SESSION['userData']))
        if (empty($_COOKIE['name']))    
            header('location:./sign up.php');
    
    if (isset($_GET['score']))
    { 
        $_SESSION['userData']['score'] = $_GET['score'];
        //$tableusers = getData($tableDatas);
        //foreach($tableusers as $item)
            //if ($item['name'] == $_SESSION['userData']['name']){
                //echo "hui";
            //    //$item['score'] = $_SESSION['userData']['score'];
            //}
        //putData($tableusers);
    }
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>App</title>
</head>
<body>
    <header>
        <h1>my game</h1>
        <div>
            <?php echo $_SESSION['userData']['name'] ;echo ": ".$_SESSION['userData']['score'] ;?>
        
        <button name="logout"><a href="./index.php?action=logout&&logout=true">LogOut</a></button>
        <?php if (isset($_GET['logout'])){
             unset($_SESSION['userData']);
             setcookie("name",$_GET['name'],time() - 60);
             header('location:./login.php');    
        }
        ?>
        </div>
    </header>
    <div>
        <div class="game"></div>
        <div class="players">
            <?php
                echo "
                <div>
                    <h1>".$_SESSION['userData']['name']." </h1>
                    <h1>".$_SESSION['userData']['score'] ." </h1>
                </div>
                ";
                //include './data/data.php';
                //$tableusers = getData($tableDatas);
                foreach ($tableusers  as $item){
                    if ($item['name'] != $_SESSION['userData']['name'])
                    echo "
                    <div>
                        <h1>".$item['name']." </h1>
                        <h1>".$item['score']." </h1>
                    </div>
                    ";
                }
            ?>
        </div>
    </div>
    <div>
        <button class="start">start</button>
        <button class="stop">stop</button>
        <button class="save">save</button>
    </div>
    <h1 class="score">Score: 13</h1>
    <script src="./js/script.js"></script>
</body>
</html>