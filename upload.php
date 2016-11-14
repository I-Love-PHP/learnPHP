<?php header('Content-type:text/html; charset=GBK'); ?>
<?php setcookie("user","jackie",time()+3600); ?>
<?php

$uploadError = $_FILES["file"]["error"];
$fileName = $_FILES["file"]["name"];
$fileType = $_FILES["file"]["type"];
$fileSize = $_FILES["file"]["size"] / 1024; // 文件大小 KB
$fileLocation = $_FILES["file"]["tmp_name"]; // 临时文件路径；
$maxSize = 10;
$minSize = 2;

// 定义允许上传的文件类型
$allowExtension = array(
    "gif",
    "jpeg",
    "jpg",
    "png",
    "bmp"
);

// 获取扩展名
$temp = explode(".", $fileName);
$extension = end($temp);

if ($uploadError > 0) {
    echo "错误：" . $_FILES["file"]["error"] . "<br>";
} else {

    //判断文件大小
    if($fileSize < $minSize){
        echo "文件太小，不符合要求";

    } elseif($fileSize > $maxSize){
        echo "文件太大，也不符合要求";
    }
    else{
        echo "文件符合要求"."<br/>";
    }

    // 判断文件类型


    if (in_array($extension, $allowExtension)) {
        echo "上传文件是图片" . "<br/>";
        echo "上传文件的后缀是" . $extension . "<br/>";
        echo "上传图片文件名: " . $fileName . "<br>";
        echo "图片类型: " . $fileType . "<br>";
        echo "图片大小: " . $fileSize . " kB<br>";
        echo "文件临时存储的位置: " . $fileLocation;

        //判断储存目录upload是否存在，如果不存在，那么新建
        if(is_dir("upload/")){
            echo "upload目录存在";

        }else{
            mkdir("upload");
        }



        // 判断upload文件夹是否存在该文件，如果没有upload文件夹，则创建upload文件夹并设置文件夹为可读写。

        if (file_exists("upload/" . $fileName)) {
            echo "文件已经存在";


        } else {
            // 文件不存在,则剪切上传的文件到upload文件夹下
            move_uploaded_file($fileLocation, "upload/" . $fileName);
            echo "图片成功上传，储存在：" . "upload/" . $fileName;
        }
    } else {

        echo "上传文件不是图片！请重新上传！";
    }
}
?>