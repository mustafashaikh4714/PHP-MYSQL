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
$username = $_POST['user'];
$password = $_POST['pass'];


$q = " select * from signin where name = '$username' && password = '$password' ";
$res = mysqli_query($connection, $q);
$num = mysqli_num_rows($res);
echo $num;
if($num) {
    echo "Duplicate Data";
} else {
    $qy = "insert into signin(name , password) values ('$username' , '$password') ";
    mysqli_query($connection, $qy);
 }
}
?>