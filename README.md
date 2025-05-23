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

 Registration Page
![Sign In](screenshots/signup.png)

### Login Page
![Login Page](screenshots/login.png)

### Hello World Page
![Hello World Page](screenshots/helloworld.png)

## Setup Instructions

1. Clone this repository
2. Set up a web server with PHP support (in this case XAMPP )
3. Import the database schema (`user_auth.sql`) into MySQL
4. Update the database connection details in `config.php`
5. Open the application in your browser

## Database Structure

The application uses a single table to store user information:
 