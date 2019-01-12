<?php 
session_start();
if(!isset($_SESSION['user'])) {
header('location:logout.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
</head>
<body>
    <div class="container">
    <h2 class = "text-center text-success">Welcome <?php echo $_SESSION['user'] ?></h2>
    <a href="logout.php">LOGOUT</a>
    </div>
</body>
</html>