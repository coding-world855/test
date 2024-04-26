<?php require "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display_Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background: linear-gradient(to right, rgb(69, 72, 110), #f2f2f27c);
    }

    .container {
      margin: 10%;
    }

    .btn {
      background: linear-gradient(to right, rgb(69, 72, 110), #f2f2f27c);

    }

    .btn_link {
      text-decoration: none;
      color: aliceblue;
    }
  </style>
</head>

<body>
  <div class="container">
    <button class=" btn btn-info">
      <a href="form.php" class="btn_link">Add User</a>
    </button>
    <table class="table table-bordered table-dark table-hover table-striped text-center">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Password</th>
          <th scope="col">gender</th>
          <th scope="col">Email</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
 <?php

    $sql = "select * from crud";
  	    $result = mysqli_query($conn, $sql);
  	      if ($result) {
            while ($rows =$result->fetch_array()) {
              $id = $rows['id'];
              $name = $rows['Name'];
              $phone = $rows['phone'];
              $password = $rows['password'];
              $gender = $rows['gender'];
              $email = $rows['email'];
              echo '<tr>

          <td>'.$id.'</td>
          <td>'.$name.'</td>
          <td>'.$phone.'</td>
          <td>'.$password.'</td>
          <td>'.$gender.'</td>
          <td>'.$email.'</td>
          <td>
            <button class=" btn btn-primary mx-2">
              <a href="update.php?updateid='.$id.'" class="text-light text-decoration-none">Update</a>
            </button>
            <button class=" btn btn-danger mx-2">
              <a href="del.php?deleteid='.$id.'" class="text-light text-decoration-none">Delete</a>
            </button>
          </td>
        </tr>';
      }
    }

?>
      </tbody>
    </table>
  </div>
</body>

</html>
<!-- // $data = "SELECT * FROM CRUD";
// $query = mysqli_query($conn,$data);

// $rezult = mysqli_fetch_assoc($query);

// echo "$rezult[Name]"; -->