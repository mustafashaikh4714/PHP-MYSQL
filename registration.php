<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
</head>
<body>

<?php 
session_start();

//CONNECT TO DATABASE
$connection = mysqli_connect('localhost', 'root', '123456');
mysqli_select_db($connection, 'registration');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//ACCESS FORM DATA
$username = $_POST['user'];
$password = $_POST['pass'];


$q = " select * from signin where name = '$username' && password = '$password' ";
$result = mysqli_query($connection, $q);
$num = mysqli_num_rows($result);

if($num) {
    ?>

    <div class="container">
    <h2 class = 'text-warning'>User Already Exists</h2>
     <a href = 'login.php'>TRY AGAIN</a>
    </div>

    <?php

} else {
    $qy = "insert into signin(name , password) values ('$username' , '$password') ";
    mysqli_query($connection, $qy);

    ?>

   <div class="container">
   <h2 class = 'text-success'>Registration Completed..</h2>
    <a href = 'login.php'>LOGIN TO CONTINUE</a>
   </div>

    <?php
 }
}
?>

</html>
</body>