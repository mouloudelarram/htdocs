<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="add.php"><div id="plus">+</div></a>
<table>               
        <th>id</th><th>username</th><th>Score</th><th style="display: none;"></th>
    
    <?php
    try{
        $con = new PDO('mysql:host=localhost;dbname=gidb','root','');
        $req = $con->prepare('SELECT * FROM users ');
        $req->execute();
        $result = $req->fetchAll();

        

        foreach($result as $var){
            echo '
            <tr>
            <td>'.$var[0].'</td><td>'.$var[1].'</td><td>'.$var[3].'</td><td class="buttons"><a href="./edit.php?id='.$var[0].'&username='.$var[1].'&password='.$var[2].'&score='.$var[3].'&"><button class="edit">Edit</button></a><a href="./home.php?id='.$var[0].'"><button class="drop">Drop</button></a></td>
            </tr>
        ';
        }
        if (isset($_GET['id'])){
            $query = $con->prepare('DELETE  FROM users WHERE id = :IDUSER');
            $query->execute(['IDUSER'=>$_GET['id']]);
            header('location: ./home.php');
        }
        
    }catch(PDOException $e){
        echo "error";
    }
        ?>
</table>
        
        
    </div>
    
</body>
</html>