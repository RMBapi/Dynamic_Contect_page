<?php include('./credential.php'); ?>

<html>

<head>
    <title>Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./styles/admin_auth.css">
</head>

<body>

    <div class="login">
        <h1 class="text-center">Admin Auth</h1>
        <br><br>
        <form action="" method="POST">
            <main>
                <div class="login-form">
                    <form action="" method="POST">
                        <h2 class="text-center">Login</h2>
                        <div class="form-group has-error">
                            <input type="text" class="form-control" name="username" placeholder="username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                        </div>

                    </form>

                </div>


            </main>
        </form>
        <!-- Login Form Ends HEre -->


    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

<?php

//CHeck whether the Submit Button is Clicked or NOt
if (isset($_POST['submit'])) {
    //Process for Login
    //1. Get the Data from Login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //2. SQL to check whether the user with username and password exists or not
    $sql = "SELECT * FROM admin WHERE admin_name='$username' AND admin_password='$password'";

    //3. Execute the Query
    $res = mysqli_query($conn, $sql);

    //4. COunt rows to check whether the user exists or not
    $count = mysqli_num_rows($res);
    echo $count;
    if ($count == 1) {
        //User AVailable and Login Success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

        //REdirect to HOme Page/Dashboard
        header('location:' . "http://localhost/bafi/" . 'admin_index.php');
    } else {
        //User not Available and Login FAil
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        //REdirect to HOme Page/Dashboard
        header('location:' . "http://localhost/bafi/" . '/');
    }
}

?>