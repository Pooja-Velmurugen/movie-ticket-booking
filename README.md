
# Movie Ticket Booking System

## Project Description

The Movie Ticket Booking System is a web-based application that allows users to browse and book movie tickets online. This system features both user and admin functionalities. Users can select movies, choose seats, and confirm their bookings. Admins can view all bookings via a dashboard.

## User Functionality

User Authentication: Users must log in to access booking features.
Movie Selection: Choose from various movies displayed as cards.
Seat Selection: Select the number of seats to book.
Date Selection: Specify the date of the movie.
Confirmation Message: Success message upon booking confirmation.

## Admin Functionality:
Admin Dashboard: View all bookings, including details like the movie name, number of seats, date, and the username of the person who booked.

## Technologies Used:
### Frontend:
<li>HTML5</li>
<li>CSS3 (Bootstrap 4 for styling and responsiveness)</li>
<li>JavaScript (jQuery for interactivity)</li>

### Backend:
<li>PHP</li>
<li>MySQL (for database operations)</li>

### Libraries and Tools:
<li>Google Fonts for enhanced typography</li>
<li>Bootstrap for responsive design</li>

## TO RUN:
<ul>1. Clone and extract this file[save this file inside the xampp->htdocs]</ul>
<ul>2. Create database called movie_ticket_booking</ul>
<ul>3. Insert database create the table called users and bookings table</ul>
<b>sql query for the users and booking table:</b>
<pre>CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ); </pre>
<pre>CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    seat_count INT NOT NULL,
    booking_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
   );</pre>

<ul>4. In the XAMPP CONTROL PANEL start the mysql and apache server</ul>
<ul>5.<b> Run the Application:</b>
  <ul>i)Place the project folder in your web server’s root directory.</ul>
  <ul>ii)Start your server and open the project in your browser:</ul>
     http://localhost/[folder_name]/[file_name]</ul>
