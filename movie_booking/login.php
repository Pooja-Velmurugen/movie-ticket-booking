<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Debugging: Print the hashed password from the database
        // echo "User password in DB: " . $user['password'] . "<br>"; // Uncomment for debugging
         //echo "Hashed password for entered password: " . password_hash($password, PASSWORD_DEFAULT);

         
        // Verify the password
        if (password_verify($password, $user['password'])) {
        
            $_SESSION['user_id'] = $user['id'];
            //echo "Login successful!<a href='index.php'>Book a movie</a>";
            header("Location: index.php?login=success");
        } else {
            // Invalid password
            echo "Invalid password!";
        }
    } else {
        // No account found
        echo "No account found with this email!";
    }

    $stmt->close(); // Close the statement
    $conn->close(); // Close the database connection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #font{
            background: rgba(169, 169, 169, 0.7);
            width: 500px;
            border-radius: 5%;
            border-width:10px;
            height: 450px;
            
           
        }
        body{
            background-image:linear-gradient(to right, #0f2027, #203a43, #2c5364);
            background-repeat:repeat;
            background-size:cover;
        }
       
    </style>
</head>
<body>
    <div class="container mt-5" id="font">
        <h1 class="text-center" style="font-size:100px;font-family: 'Open Sans', sans-serif;">Login</h1>
        
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email"  style="font-size:30px; "><i>Email:</></label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password" style="font-size:30px;"><i>Password:</i></label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <br>
            <div>
            <button type="submit" class="btn btn-primary btn-block">Login</button></div>
        </form>
    </div>
</body>
</html>
