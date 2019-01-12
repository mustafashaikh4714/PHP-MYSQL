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

if($num == 1) {
 $_SESSION['user'] = $username;
 header('location:home.php');
} else {
    ?>
   <div class="container">
   <h2 class="text-warning">No Such User Exists</h2>
    <a href='login.php'>TRY AGAIN</a>
   </div>

    <?php
 }
}
?>

</body>
</html>