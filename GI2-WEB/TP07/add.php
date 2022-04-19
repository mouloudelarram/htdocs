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
  <form action="" method="post">
      <div>
      <label>username</label>
      <input type="text" name="username" required>
       </div><div>
      <label>password</label>
      <input type="text" name="password" required>
      </div><div>
      <label>score</label>
      <input type="number" name="score">
      </div><div class="buttond">
      <button type="submit" name="submit">Add</button>
    </div>
    <div>
        <a href="./index.php"> Go back ?</a>
    </div>
    </form>
</body>
</html>
<?php
    try{
        $con = new PDO('mysql:host=localhost;dbname=gidb','root','');
        $req = $con->prepare('INSERT INTO users (username,password,score) VALUES (:user,:password,:score)');
        if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['score']) && isset($_POST['submit']))
        {
            $req->execute(['user'=> $_POST['username'],'password'=> $_POST['password'],'score'=> $_POST['score']]);
            header('location: ./index.php');
        }
    }catch(PDOException $e){
        echo "error";
    }
?>
