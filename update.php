<?php include 'connect.php'; ?>
<?php
$id = $_GET['updateid'];

$sql = "select * from crud where id = {$id}";

$result = mysqli_query($conn, $sql);

$row = $result->fetch_array();
$name = $row["Name"];
$phone = $row["phone"];
$password = $row["password"];
$gender = $row["gender"];
$email = $row["email"];

if (isset($_POST['Registerd'])) {
  $name = $_POST['Name'];
  $phone = $_POST['phone'];
  $password = $_POST['password']; 
  $gender = $_POST['gender']; 
  $email = $_POST['email'];

  $sql = "update crud set id=$id, Name='$name', phone='$phone', password='$password', gender='$gender', email='$email'
  where id=$id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    // echo "<script> alert('updated successfully..');</script>";
    header('Location : http://localhost/crud/display.php');
    // echo "<script>alert('Updated successfully..');</script>";
    // echo "<script>window.location='display.php';</script>";
    exit();
  }else{
      die(mysqli_error($conn));
  }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud system form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Registration form</h1>
        <form action="#" method="post">
            <div class="form">

                <div class="name">
                    <label for="">Name = </label>
                    <input type="text" placeholder="Type Your Name" name="Name" autofocus="on" required value=<?php echo $name; ?>>
                </div>
                <div class="email">
                    <label for="">email = </label>
                    <input type="email" placeholder="Type Your Email" name="email" autofocus="on" required value=<?php echo $email; ?>>
                </div>
                <div class="phon">
                    <label for="">phone = </label>
                    <input type="number" placeholder="Type Your Number" name="phone" autofocus="on" required value=<?php echo $phone; ?>>
                </div>
                <div class="pass">
                    <label for="">password = </label>
                    <input type="password" placeholder="Type Your password" name="password" autofocus="on" required value=<?php echo $password; ?>>
                </div>
                <div class="select-box">
                    <label for="">Gender = </label>
                    <select autofocus="on" name="gender" required value=<?php echo $gender; ?>>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Measles">Measles</option>
                    </select>
                </div>

                <!-- <div class="address">
                    <label for="">address = </label>
                    <textarea name="address" class="txtarea" cols="30" rows="3" placeholder="Your Address.."></textarea>
                </div> -->
                <div class="check-box">
                    <input type="checkbox" required>
                    <label for="" required> <span>Agree to terms and conditon</span></label>
                </div>
                <div class="btn">
                    <input  type="submit" value="Register" name="Registerd">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
?>
