<?php
$name=$_POST["name"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$email=$_POST["email"];

//��֤��������
function checkName($inputName) {
    preg_match("/^[a-zA-Z0-9]*$/", $inputName);
}

if(!$name==null){
    // ��֤�����Ƿ�Ϸ�
    if(checkName($name)){
        echo "name is ".$name;
    }else{
        echo "name is not valid.";
    }
}else{
    echo "name is required!";
}

/*
    //��֤email��ַ
    if (!$email==null) {
        if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
             echo "email is valid";
             echo "email is ".$email."<br/>";
        }
        echo "Email is required!";
        exit;
    }


    //��֤��ַ
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