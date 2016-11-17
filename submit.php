<?php
$name=$_POST["name"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$email=$_POST["email"];

//验证姓名函数
function checkName($inputName) {
    preg_match("/^[a-zA-Z0-9]*$/", $inputName);
}

if(!$name==null){
    // 验证姓名是否合法
    if(checkName($name)){
        echo "name is ".$name;
    }else{
        echo "name is not valid.";
    }
}else{
    echo "name is required!";
}

/*
    //验证email地址
    if (!$email==null) {
        if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
             echo "email is valid";
             echo "email is ".$email."<br/>";
        }
        echo "Email is required!";
        exit;
    }


    //验证地址
    if(!$address==null){
        if(!preg_match("/^[a-zA-Z]*$/", $address)){
            echo "address is valid";
            echo "address is ".$address;
            echo "gender is ".$gender;
        }
        echo "address is required";
        exit;
    }




   else {
    if($name==null){
        echo "name is required!"
    }

    if($address==null){
        echo address is required!
    }

}

 */

?>