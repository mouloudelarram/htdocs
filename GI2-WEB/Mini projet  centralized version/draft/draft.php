<?php
///root.php
$root = "./mooc/";
function getData($address){
    $data = array();
    $list = scandir($address);
    
    foreach($list as $item)
    {
        if (strcmp($item,".") <> 0 && strcmp($item,"..") <> 0 ){
            /* foreach ($list as $r){
                ?>
                <pre>
                <?php print_r($r);?>
                </pre>
                <?php }; */
            
            if (is_dir($address.$item))
            $data[$item] = getData($address.$item."/");
        
        else
            $data[$item] = $item;
        
        }
    }
    return $data;
}

$datas =  getData($root);
/*
print_r($datas); */

echo json_encode($datas);




/* 
foreach ($datas as $r){
    ?>
    <pre>
    <?php print_r($r);?>
    </pre>
    <?php } */?>

<!-- index.php-->
<table>
    <th>
    <td>Cours</td>
    <td>Lien</td>
    </th>
    <?php
    $cours = "C:\Users\mouloud\Videos\M-learn";
        if(isset($_GET["cours"]))
        {
            $cours="C:\Users\mouloud\Videos\M-learn/".$_GET["cours"];
        }
        if(is_dir($cours ))
            $list =scandir($cours);
        else
            $list =scandir("C:\Users\mouloud\Videos\M-learn");
   
    foreach($list as $e)
    {
        echo '
        <tr>
        <td>'.$e.'</td>
        <td>
        <a href="index.php?cours='.$e.'">line</a>
        </td>
        </tr>
        ';
    }
    ?>
    </table>
<?php?>


<test class="php"></test>
<?php 
    /* $data = file_get_contents("http://este.ovh/moocs/");
    $file  = fopen("./test.txt","w");
    fwrite($file,$data);
    //echo json_encode($file);

    $tableDatas = array();
    function getData(){
        $dataFile = fopen("./test.txt","r");
        while(!feof($dataFile)){
            $lienData = fgets($dataFile);
            $tableData = explode("<tr><td valign=\"top\"><img",$lienData);
            
            array_push($GLOBALS['tableDatas'],$tableData);
        }
        fclose($dataFile);
        //print_r($_GLOBALS['tableDatas']);
        return $GLOBALS['tableDatas'];
    }
    getData(); */
    
?>
<?php 
/* function getdata(){
    $contents = file_get_contents("http://este.ovh/moocs/");
    //create a DOM based off of the string from the html table
    $DOM = new DOMDocument;
    $DOM->loadHTML($contents);

   //get all tr and td
   $items = $DOM->getElementsByTagName('tr');
   $tds = $DOM->getElementsByTagName('td');
    $elements = array();
   foreach($tds as $e){
        //print_r($e->nodeValue) ;echo "<br/>";
        array_push($elements,$e->nodeValue);
   }
     

   /* function tdrows($elements){
       $str = "";
       for ($ii =0; $ii < $elements->length; $ii++){
            $str .= $elements->item($ii)->nodeValue . ",";


           }
          return $str;
       }

   for ($i = 0; $i < $items->length; $i++){


       echo tdrows($tds) . "; <br />";

       } 
       echo json_encode($elements);

}
getdata(); */


?>


<?php 

/*     $root = "http://este.ovh/moocs/DBs/";
    function getData($address){
        $data = array();
        echo unparse_url($address)."</br>";
        $contents = file_get_contents(unparse_url($address));
        //echo "wooow";
        //create a DOM based off of the string from the html table
        $DOM = new DOMDocument;
        $DOM->loadHTML($contents);
        //get all link
        $tds = $DOM->getElementsByTagName('a');
        foreach($tds as $e){
            if (strcmp($e->nodeValue,"Name") && strcmp($e->nodeValue,"Last modified") && strcmp($e->nodeValue,"Size") && strcmp($e->nodeValue,"Description") && strcmp($e->nodeValue,"Parent Directory")  ){
                $file = substr($e->nodeValue, -4);

                //if(!strcasecmp((strtolower($e->nodeValue)),'.mp4')){
                    if (strpos($e->nodeValue,".")){  
                    echo "hi</br>";
                    //$data[$e->nodeValue] = $e->nodeValue;
                }
                else{
                    //$data[$e->nodeValue] = getData(implode(parse_url(implode($address.($e->nodeValue)))));
                    //echo unparse_url($address).$e->nodeValue;
                    $str = (string)$e->nodeValue;
                    //echo $str."</br>";
                    $str =  str_replace(" ","%20",$str);
                    //echo $str."</br>";
                    //echo unparse_url($address).$e->nodeValue."</br>" ;
                    if (!strpos($str,"."))
                        $data[$e->nodeValue] = getData(parse_url(unparse_url($address).$str));
                    
                }
                
            }                
        }
        return $data;
    }

    
function unparse_url($parsed_url) {
    $scheme   = isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : '';
    $host     = isset($parsed_url['host']) ? $parsed_url['host'] : '';
    $port     = isset($parsed_url['port']) ? ':' . $parsed_url['port'] : '';
    $user     = isset($parsed_url['user']) ? $parsed_url['user'] : '';
    $pass     = isset($parsed_url['pass']) ? ':' . $parsed_url['pass']  : '';
    $pass     = ($user || $pass) ? "$pass@" : '';
    $path     = isset($parsed_url['path']) ? $parsed_url['path'] : '';
    $query    = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';
    $fragment = isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : '';
    return "$scheme$user$pass$host$port$path$query$fragment";
  }

    echo json_encode(getData(parse_url($root)));

 */
?>


