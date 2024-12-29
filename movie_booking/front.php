<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Booking - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        header {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px 0;
            text-align: center;
            color: white;
            font-size: 1.5rem;
            position: sticky;
            top: 0;
            z-index: 10;+
        }
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 120px);
            padding: 20px;
        }
        .intro {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            animation: zoomIn 1s;
        }
        .intro h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            animation: fadeSlideDown 1.2s;
        }
        .btn-custom {
            width: 200px;
            margin: 10px;
            padding: 10px;
            font-size: 1rem;
            border-radius: 30px;
            transition: all 0.3s ease-in-out;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            background-color: #ff9800 !important;
            color: white !important;
        }
        .movie-section {
            width: 100%;
            max-width: 1200px;
            text-align: center;
            overflow: hidden;
        }
        .movie-list {
            display: flex;
            gap: 15px;
            animation: slide 15s linear infinite;
            padding: 25px;
        }
        .movie-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            width: 350px;
            height: 300px;
            text-align: center;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            flex-shrink: 0;
        }
        .movie-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        }
        .movie-card img {
            width: 100%;
            border-radius: 10px;
        }
        .movie-card h5 {
            margin-top: 10px;
            font-size: 1rem;
        }
        .contact-section {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 15px;
            margin-top: 20px;
            color: white;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1.5s;
        }
        footer {
            background-color: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 10px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        @keyframes slideIn { from { transform: translateX(-100%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
        @keyframes bounce { 0%, 20%, 50%, 80%, 100% { transform: translateY(0); } 40% { transform: translateY(-30px); } 60% { transform: translateY(-15px); } }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes zoomIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        @keyframes fadeSlideDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes fadeInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes slide {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <header>
        Movie Booking System
    </header>

    <main>
        <div class="intro">
            <h1>Welcome to Movie Booking</h1>
            <p>Your one-stop destination for all your movie needs!</p>
            <a href="login.php" class="btn btn-primary btn-custom">Login</a>
            <a href="register.php" class="btn btn-success btn-custom">Sign Up</a>
        </div>
        <div class="movie-section">
            <h2 style="font-size: 30px; font-family: 'Helvetica', padding: 25px; sans-serif;color:rgb(66, 131, 177); padding: 10px; border: 1px solid #999; border-radius: 8px; animation: fadeIn 2s ease-in;">Trending Movies</h2>
            <div class="movie-list" id="movieList">
                <div class="movie-card">
                    <img src="image/movie1.jpg" alt="Movie 1" onclick="showMovieInfo('Movie 1', 'A thrilling adventure of courage and mystery.', 'image/movie1.jpg')">
                    <h5>Movie 1</h5>
                    <a href="book.html" class="btn btn-warning">Book Now</a>
                </div>
                <div class="movie-card">
                    <img src="image/Movie2.jpeg" alt="Movie 2">
                    <h5>Movie 2</h5>
                    <a href="book.html" class="btn btn-warning">Book Now</a>
                </div>
                <div class="movie-card">
                    <img src="image/movie3.jpeg" alt="Movie 3">
                    <h5>Movie 3</h5>
                    <a href="book.html" class="btn btn-warning">Book Now</a>
                </div>
                <div class="movie-card">
                    <img src="image/movie4.jpeg" alt="Movie 4">
                    <h5>Movie 4</h5>
                    <a href="book.html" class="btn btn-warning">Book Now</a>
                </div>
                <div class="movie-card">
                    <img src="image/movie5.jpeg" alt="Movie 5">
                    <h5>Movie 5</h5>
                    <a href="book.html" class="btn btn-warning">Book Now</a>
                </div>
                <div class="movie-card">
                    <img src="image/movie6.jpeg" alt="Movie 5">
                    <h5>Movie 5</h5>
                    <a href="book.html" class="btn btn-warning">Book Now</a>
                </div>
                <div class="movie-card">
                    <img src="image/movie7.jpeg" alt="Movie 5">
                    <h5>Movie 5</h5>
                    <a href="book.html" class="btn btn-warning">Book Now</a>
                </div>
            </div>
        </div>
        

        <div class="contact-section">
            <h2>Contact Us</h2>
            <a href="#"><p>Email: support@moviebooking.com</p></a>
            <p>Phone: +1 234 567 890</p>
        </div>
    </main>

    <footer>
        &copy; 2024 Movie Booking. All Rights Reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showAlert(movieName) {
            alert(You have selected "${movieName}". Proceed to book your tickets!);
        }
        function showMovieInfo(title, description, imageUrl) {
            document.getElementById('movieModalLabel').textContent = title;
            document.getElementById('movieDescription').textContent = description;
            document.getElementById('movieImage').src = imageUrl;
            $('#movieModal').modal('show');
        }
    </script>
</body>
</html>