<?php
$name=$_POST["name"];
$address=$_POST["address"];

if ($name !=null || $address!=null){
    
    echo "we got user's name is ".$name."<br/>";
    echo "we got user's address is".$address;
}else {
    echo "Two column are both needed";
    
}


?>