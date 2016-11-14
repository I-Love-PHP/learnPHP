<?php include('include/header.php');?>

<div class="container">
<div id="main">
<?php
$serverName="localhost";
$database="mydb";
$userName="root";
$password="123";

    $conn=new mysqli($serverName, $userName, $password, $database);

    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }else{

        echo "connection successfully"."<br/>";
    }

// create database

// $createDB = "create database mydb";

//     if($conn->query($createDB) == true){
//         echo "database created successfuly!";
//     }else {
//         echo "database created failed! reason: <strong>".$conn->error."</strong>";
//     }

//create table;

// $createTable = "
//         CREATE TABLE MyGuests (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         firstname VARCHAR(30) NOT NULL,
//         lastname VARCHAR(30) NOT NULL,
//         email VARCHAR(50),
//         reg_date TIMESTAMP
//         )
//     ";

//     if($conn->query($createTable) == true){
//         echo "table created successfuly";
//     }else {
//         echo "table created failed reason <strong>".$conn->error."</strong>";
//     }


//insert data into table

// $insert = "
//         insert into MyGuests (firstname,lastname,email)
//         values('john','doe','john@example');
//     ";

//     if($conn->query($insert) == true){
//         echo "insert successfuly";
//     }else{
//         echo "insert failed".$conn->error;
//     }

// insert multiple data into table

//     $sql = "insert into MyGuests (firstname,lastname,email) values('sean','wehis','sean@example');";
//     $sql .= "insert into MyGuests (firstname,lastname,email) values('jackie','le','jackie@example');";
//     $sql .= "insert into MyGuests (firstname,lastname,email) values('lucy','wang','lucy@example');";


//     if ($conn->multi_query($sql) == true) {
//         echo "insert multile data successfully!";

//     }else {
//         echo "failed".$conn->error;
//     }


//预处理语句：可以有效防止SQL注入，减少了分析时间、减少了服务器带宽，且保证了数据的合法性。



// // 预处理及绑定
// $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES(?, ?, ?)");
// $stmt->bind_param("sss", $firstname, $lastname, $email);

// // 设置参数并执行
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $stmt->execute();

// $firstname = "Mary";
// $lastname = "Moe";
// $email = "mary@example.com";
// $stmt->execute();

// $firstname = "Julie";
// $lastname = "Dooley";
// $email = "julie@example.com";
// $stmt->execute();

// echo "new records added!";

// $stmt->close();

    $search="select id,firstname,lastname,email from MyGuest";
    $result=$conn->query($search);

    if($result->num rows>0){

    }




// //seach data from database

// $search = "select count(*) from MyGuests; ";

//     if($conn->query($search)){
//         echo ""
//     }



//  delete database

//     $deleteDB = "delete database mybd";

//     if($conn->query($deleteDB) == true){
//         echo "database deleted successfuly!";
//     }else {
//         echo "database deleted failed! reason: <strong>".$conn->error."</strong>";
//     }



    mysqli_close($conn);
?>
</div>
</div>

<?php include('include/footer.php');?>


