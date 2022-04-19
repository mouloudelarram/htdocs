<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <form action="" method="GET">
     <label>username</label>
      <input type="text" name="username" value="<?php if(isset($_GET["username"])) echo $_GET["username"] ?>" >
      <label>password</label>
      <input type="text" name="password" value="<?php if(isset($_GET["password"])) echo $_GET["password"] ?>">
      <label>score</label>
      <input type="number" name="score" value="<?php if(isset($_GET["score"])) echo $_GET["score"] ?>">
      <input type="hidden" name="id" value="<?php if(isset($_GET["id"])) echo $_GET["id"] ?>">
      <button type="submit" name="submit">Edit</button>
  </form>
</body>
</html>
<?php
    try{
        $con = new PDO('mysql:host=localhost;dbname=gidb','root','');
        $req = $con->prepare('UPDATE users SET username = :username , password = :password , score = :score WHERE id = :idp');
        if(isset($_GET['username'])&&isset($_GET['password'])&&isset($_GET['score']) && isset($_GET['submit']))
        {
            echo 'accessed';
            $req->execute(['username'=> $_GET['username'],'password'=> $_GET['password'],'score'=> $_GET['score'],'idp'=>$_GET['id']]);
            header('location: ./home.php');
        }
    }catch(PDOException $e){
        echo "error";
    }
?>
