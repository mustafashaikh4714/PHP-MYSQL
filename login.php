<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Login form</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control">
                        </div>
                        <button type = "submit" class="btn btn-primary">Login</button>
                </form>
            </div>

            <div class="col-lg-6">
                <h2>Sign up</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control">
                        </div>
                        <button type = "submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!-- $qy = "insert into signin (name , password) values ('".$username."' , '".$pass."')"; -->
