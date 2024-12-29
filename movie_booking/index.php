<?php
session_start();

//heck if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

<style>
    /* General body styling */
    body {
        background-image: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    h1 {
        font-family: 'Georgia', serif;
        font-size: 3rem;
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        text-align: center;
        margin-bottom: 30px;
    }
    .card-body {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.6); /* Semi-transparent background for the text */
    padding: 10px;
    text-align: center;
}
    /* Movie card styles */
    .card {
        background: rgba(0, 0, 0, 0.75);
        background-size:cover;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
        position: relative;
        transition: transform 0.3s, box-shadow 0.3s, opacity 0.3s;
        cursor: pointer;
        margin-bottom: 20px;
        
        
        widht:150px;
        height:300px;
    }

    /* Card hover effects */
    .card:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
        opacity: 0.9;
    }

    /* Card image styles */
    .card-img-top {
    position: absolute;
    top:0;
    left:0;
    width: 100%; /* Maintain aspect ratio */
    height: 100%;
    object-fit: cover;
    margin: auto; /* Centers the image inside the card */
    display: block; /* Ensures the image respects margins */
   
    border-radius: 12px 12px 0 0; /* Matches the card's top border radius */
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
     /* Ensures it stays behind the content */
}

.card:hover .card-img-top {
    transform: scale(1.1);
    opacity: 0.9; /* Adds a subtle dimming effect */
}


    /* Card title styling */
    .card-title {
        color: #fff;
        font-weight: bold;
        font-size: 1.2rem;
        text-align: center;
        padding: 10px 0;
        transition: color 0.3s ease-in-out;
    }

    /* Card title hover effect */
    .card:hover .card-title {
        color: #ffcc00;
    }

    /* Styling for selected cards */
    .selected {
        border: 5px solid #28a745 !important;
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.8);
        transform: scale(1.05);
    }

    /* Form styling */
    .form-group label {
        font-weight: bold;
        color: #ffcc00;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
    }

    .form-control {
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .form-control:focus {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        outline: none;
    }

    .btn-block {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
        transition: background 0.3s;
    }

    .btn-block:hover {
        background: linear-gradient(45deg, #0056b3, #003580);
    }

    /* Success message styling */
    #message {
        color: #28a745;
        font-weight: bold;
    }
    
    /* Media queries for responsiveness */
    @media (max-width: 768px) {
        .card img {
            height: 150px;
            width: 100px;
        }

        h1 {
            font-size: 2rem;
        }

        .card {
            margin-bottom: 15px;
        }
    }
</style>



</head>

<body>
    <div class="container mt-5" >
        <h1 class="text-center">Movie Ticket Booking</h1>

        <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success text-center">Booking successful!</div>
        <?php endif; ?>

        <form action="book_ticket.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" id="avengers-card">
                        <img class="card-img-top" src="image/Movie4.jpeg" alt="Avengers" style="height: 250px; width: 350px;">
                        <div class="card-body">
                            <h5 class="card-title">Sita Ramam</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="inception-card">
                        <img class="card-img-top" src="image/movie6.jpeg" alt="Inception" style="height:400px; width: 350px;">
                        <div class="card-body">
                            <h5 class="card-title">Amaren</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="spiderman-card">
                        <img class="card-img-top" src="image/movie3.jpeg" alt="Spiderman" style="height: 400px; width: 350px;">
                        <div class="card-body">
                            <h5 class="card-title">KGF-2</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="spiderman-card">
                        <img class="card-img-top" src="image/movie5.jpeg" alt="Spiderman" style="height: 250px; width: 350px;">
                        <div class="card-body">
                            <h5 class="card-title">Goat</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="spiderman-card">
                        <img class="card-img-top" src="image/Movie1.jpg" alt="Spiderman" style="height: 300px; width: 450px;">
                        <div class="card-body">
                            <h5 class="card-title">Lucky Baskhar</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="spiderman-card">
                        <img class="card-img-top" src="image/Movie2.jpeg" alt="Spiderman" style="height: 350px; width: 350px;">
                        <div class="card-body">
                            <h5 class="card-title">RRR</h5>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" id="selected-movie" name="movie" required>

            <div class="form-group mt-3">
                <label for="seat">Select Seats:</label>
                <input type="number" class="form-control" id="seat" name="seat" min="1" max="10" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Book Ticket</button>
            <button type="submit" class="btn btn-primary btn-block"><a href="admin_dashboard.php" style="color:white;">View Booking</a></button>
        </form>

        <div id="message" class="text-center mt-3" style="display:none;">
            <p class="alert alert-success">Movie Selected Successfully!</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       
            
        $('.card').click(function () {
            $('.card').removeClass('selected');
            $(this).addClass('selected');
            let selectedMovie = $(this).find('.card-title').text();
            $('#selected-movie').val(selectedMovie);
            $('#message').show(); // Show success message
        });
    </script>
    
</body>

</html>