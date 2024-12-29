<?php
session_start();
include 'db_connection.php';

// Get data from form
$movie = $_POST['movie'];
$seats = $_POST['seat'];
$date = $_POST['date'];
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Insert booking into database
$sql = "INSERT INTO bookings (movie, seats, date, user_id) VALUES ('$movie', '$seats', '$date', '$user_id')";

if ($conn->query($sql) === TRUE) {
   echo "  <a href='index.php'>Back to home</a><br><a href=admin_dashboard.php>view booking</a>";
    header("Location: admin_dashboard.php?success=1");
   header("Location: index.php?success=1");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
