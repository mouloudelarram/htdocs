<!--  EL ARRAM MOULOUD-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header></header>
<a href="add.php"><div id="plus"><h2>+</h2></div></a>
<table>               
        <th>id</th><th>username</th><th>Score</th><th style="background: #fff; border:none"></th>
    
    <?php
    try{
        $con = new PDO('mysql:host=localhost;dbname=gidb','root','');
        $req = $con->prepare('SELECT * FROM users ');
        $req->execute();
        $result = $req->fetchAll();
        $S = "S2_td";
        foreach($result as $var){
            if ($S == "S1_td") $S = "S2_td";
            else $S = "S1_td";
            echo "
            <tr class=\"$S\">
            <td >$var[0]</td><td>$var[1]</td><td>$var[3]</td><td class=\"buttons\"><a href=\"./edit.php?id=$var[0]&username=$var[1]&password=$var[2]&score=$var[3]&\"><button class=\"edit\">Edit</button></a><a href=\"./delete.php?id=$var[0]\"><button class=\"drop\">Drop</button></a></td>
            </tr>
        ";
        }
    }catch(PDOException $e){
        echo "Username Already Exist";
    }
        ?>
</table>
        
        
    </div>
    
</body>
</html>