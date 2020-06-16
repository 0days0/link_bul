<?php
$page = file_get_contents("aranacak url");
 
preg_match_all("/href=\"([^\"]+)/i",$page,$link);
        
foreach ($link[0] as $row) 
{
    echo $row ."<br>";
}
?>