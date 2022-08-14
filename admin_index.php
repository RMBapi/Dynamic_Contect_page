<?php include('./credential.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/admin_index.css">
  <title>Admin</title>
</head>

<body>
<div class="logout">
    <h4> Logged In As Admin</h4>
<button type="submit" class="btn btn-secondary">
  <a href="logout.php">Logout</a>
</button>
</div>
  <?php
  $sql = "SELECT * FROM user ";
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);
  ?>
<table class="table">
    <thead>
      <tr>
        <th scope="col"> ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Regarding</th>
        <th scope="col">Feedback</th>
      </tr>
    </thead>

    <?php
    if ($count > 0) {
      while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['user_id'];
        $username = $row['user_name'];
        $email = $row['user_email'];
        $regarding = $row['regarding'];
        $feedback = $row['feed_back'];
    ?>
       

       <tbody>
            <tr>
              <th scope="row"><?php echo $id; ?></th>
              <td><?php echo $username; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $regarding; ?></td>
              <td><?php echo $feedback; ?></td>
            </tr>

          </tbody>
       
    <?php
      }
      ?>  </table> <?php
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>