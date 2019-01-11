<?php 
session_start();

//CONNECT TO DATABASE
$connection = mysqli_connect('localhost', 'root', '123456');

if(!$connection) {
    echo "No connection";
} else {
    echo "Connection Successfully !";
}

mysqli_select_db($connection, 'registration');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//ACCESS FORM DATA
$username = $_POST["user"];
$pass = $_POST["pass"];

echo "$username";
echo "$pass";
$q = "select * from `signin` where `name` = '".$username."' && `password` = '".$pass."'";
if(mysqli_query($connection, $q) ) {
    echo "Duplicate";
} else {
    $qy = "insert into `signin` (`name` , `password`) values ('".$username."' , '".$pass."')";
    mysqli_query($connection, $qy );
}
}
?>