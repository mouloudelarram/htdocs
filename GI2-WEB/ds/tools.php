<?php 
function getUserData(){
    $f = fopen("data.txt", "r") or die("Unable to open file!");
    while(!feof($f)){
        $str= fgets($f);
        $arr=explode(" ",$str);
        $data[]=$arr;
    }
    fclose($f);
    $users=array();
    foreach($data as $e){
        if(count($e)==4)//si la ligne n'est pas vide
            $ndata[$e[0]]=array("password"=>$e[1],"email"=>$e[2], "score"=>(int)$e[3]);
    }
    return $ndata;
}

?>