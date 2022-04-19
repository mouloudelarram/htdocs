<?php
session_start();
if(!array_key_exists("user",$_SESSION))
    header("Location: login.php");
$userdata=$_SESSION["userdata"];
$user=$_SESSION["user"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stl.css">
    <title>MyGame</title>
</head>
<body>
    <header>
        <h1>MyGame</h1>
        <div class="loginfo">
            <div>
                <?php echo $_SESSION["user"]; ?>
            </div>
            <div>
                score: <?php echo $userdata[$user]["score"]; ?>
            </div>
            <div>
                <a href="login.php?logout=1">Logout </a>
            </div>
        </div>
    </header>
    <section>
        <article>
            <div id="target"></div>
           
        </article>
    <aside>
        <?php
            foreach($userdata as $k=>$u){
               echo "<div class='score'><div>".$k."</div><div> ".$u["score"]."</div></div>";
            }
        ?>
    </aside>
    </section>
    <button id="start">Start</button>
        <button id="stop">Stop</button>
        
    <form action="./index.php" method="POST">
        
        <input type="hidden" id="score" name="score" value="0">
        <input type='submit' id="save" value="save">
        
    </form><br>
    <input type="range" min="1" max="10" value="1" class="slider" id="speed">
    <footer>
    <h3>Score : 0 </h3>
    </footer>
    <script src="./js/src.js"></script>
</body>
</html>