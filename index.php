
<?php include('./credential.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="container-fluid min-vh-100 px-0">
    <nav class="navbar navbar-expand-lg bg-light py-0 shadow mb-5">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#">
                <img src="11.png" width="100" alt="" class="d-inline-block align-middle">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown mx-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projects
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">IUBWiki</a></li>
                            <li><a class="dropdown-item" href="#">DBMS Management</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Address</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-light">Sign in</button>
                <button type="button" class="bnt_1">Sign Up Free</button>
            </div>
        </div>
    </nav>

    <section class="Container">
        <div class="text-center">
            <h1>Get In Touch</h1>

            <p class="text-break">
                We're here for you and we're wearing our thinking caps,But first swing,<br>
                by our fantastic <span class="text-into">Help Center</span> for all your Fun product and<br>
                techniacal needs.
            </p>
        </div>

        <div class="mx-auto" style="width: 500px;">
            <form action="" method="POST">
                <div class="form-group mb-3">
                    <input type="text" class="form-control form-control-lg" id="" placeholder="Name..." name="name">
                </div>
                <div class="form-group mb-3">
                    <input type="email" class="form-control form-control-lg" id="" placeholder="example@gmail.com" name="email">
                </div>
                <div class="form-group mb-3">
                    <select class="form-control form-control-lg" name="regarding">
                        <option selected>Regading</option>
                        <option value='a'>1</option>
                        <option value='b'>2</option>
                        <option value='c'>3</option>
                        <option value='d'>4</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <textarea class="form-control" id="" rows="8" placeholder="Message...(100 character minimum)" name="messsage"></textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-primary me-md-2 btn-secondary" type="submit" name="submit">Submit</button>
                </div>
        </div>
        </form>
        <div>
            <a class="btn btn-primary" href="./admin_auth.php">ADMIN</button>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>


<?php

if (isset($_POST['submit'])) {


    function insert_data($table_name, $data)
    {
        $key = array_keys($data);

        $value = array_values($data);

        $query = "INSERT INTO $table_name ( " . implode(',', $key) . ") VALUES('" . implode("','", $value) . "')";

        return $query;
    }

    $table_name = "user";

    $data = array(
        "user_name" => $_POST["name"],
        "user_email" => $_POST["email"],
        "feed_back" => $_POST["messsage"],
        "regarding"=> $_POST["regarding"]

    );
    $sql = insert_data($table_name, $data);

    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } 
}

?>