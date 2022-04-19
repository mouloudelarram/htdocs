<!--  EL ARRAM MOULOUD-->
<?php
    try{
        $con = new PDO('mysql:host=localhost;dbname=gidb','root','');
        if (isset($_GET['id'])){
            $query = $con->prepare('DELETE  FROM users WHERE id = :IDUSER');
            $query->execute(['IDUSER'=>$_GET['id']]);
            header('location: ./index.php');
        }
        
    }catch(PDOException $e){
        echo "error";
    }
?>