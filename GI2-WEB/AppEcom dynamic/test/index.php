<?php
    include 'data.php';
    //echo json_encode($products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanouti</title>
    <script>
        let tab = new Array();

        let rqst = new XMLHttpRequest();

        rqst.open("POST","../php/data.php");

        rqst.onload = function(){
            tab = rqst.response;
            console.log(tab);
            tab = JSON.parse(tab);
        }
        rqst.send();
    </script>
</head>
<body>

    <script src="s1rc.js"></script>
</body>
</html>
