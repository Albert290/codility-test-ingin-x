# codility-test-ingin-x
# User Authentication System

A simple web application with user authentication features for Ingin X Codility Test. The application includes:
- Registration page for new users
- Login page for existing users
- Hello World page displayed after successful login

## Technologies Used

- HTML/CSS: Frontend design
- JavaScript: Client-side validation
- PHP: Server-side processing
- MySQL: Database storage

## Features

- User registration with email validation
- Password hashing using PHP's password_hash() (bcrypt)
- Session management for authenticated users
- Simple and intuitive UI design

## Screenshots

### Registration Page
![Registration Page](screenshots/register.png)

### Login Page
![Login Page](screenshots/login.png)

### Hello World Page
![Hello World Page](screenshots/hello.png)

## Setup Instructions

1. Clone this repository
2. Set up a web server with PHP support (like XAMPP, WAMP, or MAMP)
3. Import the database schema (`database.sql`) into MySQL
4. Update the database connection details in `config.php`
5. Open the application in your browser

## Database Structure

The application uses a single table to store user information:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);