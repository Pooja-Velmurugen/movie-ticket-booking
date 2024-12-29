<?php
session_start();
include 'db_connection.php';

// Fetch all bookings
//$sql = "SELECT * FROM bookings";
// Fetch all bookings with user details
$sql = "SELECT bookings.movie, bookings.seats, bookings.date, users.username 
        FROM bookings 
        JOIN users ON bookings.user_id = users.id";
//$result = $conn->query($sql);

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image:linear-gradient(to right, #0f2027, #203a43, #2c5364);
            background-repeat:repeat;
            background-size:cover;
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #343a40;
        }

        .table {
            margin-top: 30px;
            background-color: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        thead th {
            background-color: #343a40;
            color: white;
            font-weight: 600;
        }

        tbody td {
            font-weight: 400;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #d1ecf1;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center" style="color:white;">Admin Dashboard - View Bookings</h1>
        
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Movie</th>
                    <th>Seats</th>
                    <th>Date</th>
                    <th>User Name</th>
                </tr>
            </thead>
            <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['movie']}</td>
                    <td>{$row['seats']}</td>
                    <td>{$row['date']}</td>
                    <td>{$row['username']}</td> <!-- Displaying username -->
                  </tr>";
        }
        ?>
    </tbody>
           
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
