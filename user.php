<?php
print_r($_REQUEST);
include('db.php');

$sqlData = "SELECT * FROM user";
$result = mysqli_query($conn, $sqlData);
$table = "<table border = 1>";
$table .= "<tr><th>Email</th><th>Name</th><th>Password</th></tr>";
while($row = mysqli_fetch_array($result)){
    $table .= "<tr>";
    $table .= "<td>".$row['email']."</td>";
    $table .= "<td>".$row['name']."</td>";
    $table .= "<td>".$row['password']."</td>";
    $table .= "</tr>";
}
$table .="</table>";
echo $table;


if(!empty($_REQUEST) && isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];
    $name = $_REQUEST['fname'];
    $password = $_REQUEST['password'];

    $chechrecord = "SELECT * FROM user WHERE email='$email'";

    $result = mysqli_query($conn, $chechrecord);
    $rowcount = mysqli_num_rows($result);
    
    if($rowcount !=0){
        echo "Record Already Exits";
        return false;
    }

    $sql = "INSERT INTO `user`(`email`,`name`,`password`)
    VALUES('".$email."','".$name."','".$password."')";
    $rec = mysqli_query($conn, $sql);
    if($rec){
        echo "Record Inserted";
    }
}else{
    echo "something went wrong";
}

?>