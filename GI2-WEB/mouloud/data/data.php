<?php
    
    $tableDatas = array();
    function getData(){
        $dataFile = fopen("./data/data.txt","r");
        while(!feof($dataFile)){
            $lienData = fgets($dataFile);
            $tableData = explode(" ",$lienData);
            $tableData = array(
                "name"=>$tableData[0],
                "password"=>$tableData[1],
                "email"=>$tableData[2],
                "score"=>$tableData[3]
            );
            array_push($GLOBALS['tableDatas'],$tableData);
        }
        fclose($dataFile);
        //print_r($_GLOBALS['tableDatas']);
        return $GLOBALS['tableDatas'];
    }
    function search($name, $email){
        foreach($GLOBALS['tableDatas'] as $item){
            if ($item['name'] == $name || $item['email'] == $email)
            {
                return true;
            }
        }
        return false;
    }  

    function putData($table){
        $dataFile = fopen("./data/data.txt","w");
        fwrite($dataFile,"name password email score .") ;
        fclose($dataFile);

        $dataFile = fopen("./data/data.txt","a");
        fwrite($dataFile,"") ;
        foreach($table as $item){
             fwrite($dataFile,"\n".$item['name']." ".$item['password']." ".$item['email']." ".$item['score']." ".".") ;
        }
        fclose($dataFile);
    }
    
?>