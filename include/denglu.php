<?php include 'config.php'; ?>

<?php
$submitName = $_POST["name"];
$submitPassword = $_POST["password"];
$query = "select * from user where name='$submitName'";
$result = mysqli_query($conn, $query);

if($submitName!==""){

    if(mysql_num_rows($result)<1){
        echo "user is not exist";
    }else {



        $info=mysql_fetch_array($result);

        if (isset($info['password']) && $info['password']!=$submitPassword) {
            echo "wrong password";
        }else{
            echo "successfuly login";
        }







    }

}



?>