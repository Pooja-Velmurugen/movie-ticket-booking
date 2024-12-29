# movie-ticket-booking
Movie Ticket Booking System

Project Description

The Movie Ticket Booking System is a web-based application that allows users to browse and book movie tickets online. This system features both user and admin functionalities. Users can select movies, choose seats, and confirm their bookings. Admins can view all bookings via a dashboard.

User Functionality

User Authentication: Users must log in to access booking features.
Movie Selection: Choose from various movies displayed as cards.
Seat Selection: Select the number of seats to book.
Date Selection: Specify the date of the movie.
Confirmation Message: Success message upon booking confirmation.

Admin Functionality:
Admin Dashboard: View all bookings, including details like the movie name, number of seats, date, and the username of the person who booked.

Technologies Used:
Frontend:
HTML5
CSS3 (Bootstrap 4 for styling and responsiveness)
JavaScript (jQuery for interactivity)

Backend:
PHP
MySQL (for database operations)

Libraries and Tools:
Google Fonts for enhanced typography
Bootstrap for responsive design

TO RUN:
1. clone and extract this file[save this file inside the programfiles->xampp->htdocs]
2. create database called movie_ticket_booking
3. insert database create the table called users and bookings table
sql query for the users and booking table:
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

); 
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    seat_count INT NOT NULL,
    booking_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
   );
4.In the XAMPP CONTROL PANEL start the mysql and apache server
5.Run the Application:
  i)Place the project folder in your web server’s root directory.
  ii)Start your server and open the project in your browser:
     http://localhost/[folder_name]/[file_name]
