<?php
$conn  = mysqli_connect('localhost','root','','gidb');
if ($conn) echo "connected";
else die("error");

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (!$result){
    die("errror");

}

while($var = mysqli_fetch_row($result)){
    print_r($var);
}
?>