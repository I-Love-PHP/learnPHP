<?php
$name=$_POST["name"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$email=$_POST["email"];

if ($name=null or $address=null or $mail=null or $gender='1'){
    echo "All information need to be provided!";

}else {
    if(!preg_match("/^[a-zA-Z]*$/", $name)){
            echo "name is not valid";
    }
    if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
            echo "Please input an valid email";
    }
    echo "Name is ".$name."<br/>";
    echo "Address is".$address."<br/>";
    echo "Email is ".$email."<br/>";

    if($gender='2'){
    echo "Gender is Male";
    }else{
    echo "Gender is Female";
    }
}


?>