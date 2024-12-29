<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! Please <a href='login.php'>login</a>";
        header("Location: login.php");
    } 
     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #font{
            background: rgba(169, 169, 169, 0.7);
            width: 500px;
            border-radius: 5%;
            border-width:10px;
            border-color:black;
            height: 550px;
           
        }
        body{
            background-image: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        }
       
    </style>
</head>
<body >
    <div class="container mt-5" id="font">
        <h1 class="text-center" style="font-size:100px; font-family: 'Roboto', sans-serif;">SignUp</h1>
        
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username" style="font-size:30px;"><i>Username:</i</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="email" style="font-size:30px;"><i>Email:</i></label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password" style="font-size:30px;"><i>Password:</i></label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <br>

            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
    </div>
</body>
</html>
