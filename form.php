<?php require 'connect.php'; ?>

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
        <?php
    if (isset( $_POST['Registerd'])) 
    {
        $name =  strip_tags($conn->real_escape_string($_POST['Name']));
        $phon =  $_POST['phone'];
        $pass =  $_POST['password'];
        $gender =  $_POST['gender'];
        $email =  $_POST['email'];

        
        $data = "INSERT INTO crud(`Name`, `phone`, `password`,`gender`, `email`) 
        VALUES ('$name','$phon','$pass','$gender','$email')";
        $query = mysqli_query($conn,$data) or die("not done");
            
            if ($query) {
                // echo "data inserted successfully";
                header('location:display.php');
            }else{
                die(mysqli_error($con));
            }

    }    
?>
        <form  method="post">
            <div class="form">

                <div class="name">
                    <label for="">Name = </label>
                    <input type="text" placeholder="Type Your Name" name="Name" autofocus="on" required>
                </div>
                <div class="email">
                    <label for="">email = </label>
                    <input type="email" placeholder="Type Your Email" name="email" autofocus="on" required>
                </div>
                <div class="phon">
                    <label for="">phone = </label>
                    <input type="number" placeholder="Type Your Number" name="phone" autofocus="on" required>
                </div>
                <div class="pass">
                    <label for="">password = </label>
                    <input type="password" placeholder="Type Your password" name="password" autofocus="on" required>
                </div>
                <div class="select-box">
                    <label for="">Gender = </label>
                    <select autofocus="on" name="gender" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Measles">Measles</option>
                    </select>
                </div>

                <div class="check-box">
                    <input type="checkbox" required>
                    <label for="" required> <span>Agree to terms and conditon</span></label>
                </div>
                <div class="btn">
                    <input type="submit" value="Register" name="Registerd">
                </div>
            </div>
        </form>
    </div>
</body>
</html>