<?php header('Content-type:text/html; charset=GBK'); ?>
<?php setcookie("user","jackie",time()+3600); ?>
<?php

$uploadError = $_FILES["file"]["error"];
$fileName = $_FILES["file"]["name"];
$fileType = $_FILES["file"]["type"];
$fileSize = $_FILES["file"]["size"] / 1024; // �ļ���С KB
$fileLocation = $_FILES["file"]["tmp_name"]; // ��ʱ�ļ�·����
$maxSize = 10;
$minSize = 2;

// ���������ϴ����ļ�����
$allowExtension = array(
    "gif",
    "jpeg",
    "jpg",
    "png",
    "bmp"
);

// ��ȡ��չ��
$temp = explode(".", $fileName);
$extension = end($temp);

if ($uploadError > 0) {
    echo "����" . $_FILES["file"]["error"] . "<br>";
} else {

    //�ж��ļ���С
    if($fileSize < $minSize){
        echo "�ļ�̫С��������Ҫ��";

    } elseif($fileSize > $maxSize){
        echo "�ļ�̫��Ҳ������Ҫ��";
    }
    else{
        echo "�ļ�����Ҫ��"."<br/>";
    }

    // �ж��ļ�����


    if (in_array($extension, $allowExtension)) {
        echo "�ϴ��ļ���ͼƬ" . "<br/>";
        echo "�ϴ��ļ��ĺ�׺��" . $extension . "<br/>";
        echo "�ϴ�ͼƬ�ļ���: " . $fileName . "<br>";
        echo "ͼƬ����: " . $fileType . "<br>";
        echo "ͼƬ��С: " . $fileSize . " kB<br>";
        echo "�ļ���ʱ�洢��λ��: " . $fileLocation;

        //�жϴ���Ŀ¼upload�Ƿ���ڣ���������ڣ���ô�½�
        if(is_dir("upload/")){
            echo "uploadĿ¼����";

        }else{
            mkdir("upload");
        }



        // �ж�upload�ļ����Ƿ���ڸ��ļ������û��upload�ļ��У��򴴽�upload�ļ��в������ļ���Ϊ�ɶ�д��

        if (file_exists("upload/" . $fileName)) {
            echo "�ļ��Ѿ�����";


        } else {
            // �ļ�������,������ϴ����ļ���upload�ļ�����
            move_uploaded_file($fileLocation, "upload/" . $fileName);
            echo "ͼƬ�ɹ��ϴ��������ڣ�" . "upload/" . $fileName;
        }
    } else {

        echo "�ϴ��ļ�����ͼƬ���������ϴ���";
    }
}
?>