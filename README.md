# CRUD Alunos PHP

A simple student management web application built with PHP and MySQL, following an MVC-inspired structure. It allows you to **Create**, **Read**, **Update**, and **Delete** student records.

## Features

- List all registered students
- Add a new student
- Edit an existing student's information
- Delete a student

## Tech Stack

- **PHP** – server-side logic
- **MySQL** – database
- **HTML/CSS** – front-end

## Project Structure

```
crud_alunos_php/
├── config/
│   └── database.php          # Database connection
├── controllers/
│   └── AlunoController.php   # Handles HTTP actions and delegates to model/view
├── models/
│   └── Aluno.php             # SQL queries (create, read, update, delete)
├── views/
│   ├── list.php              # Lists all students
│   ├── create.php            # Form to add a new student
│   └── edit.php              # Form to edit an existing student
├── index.php                 # Front controller (routes actions via ?action=)
├── style.css                 # Application styles
└── database.sql              # SQL script to create the database and table
```

## Database Setup

1. Open your MySQL client and run the contents of `database.sql`:

```sql
CREATE DATABASE aula_php;

USE aula_php;

CREATE TABLE alunos (
    id    INT AUTO_INCREMENT PRIMARY KEY,
    nome  VARCHAR(100),
    email VARCHAR(100),
    idade INT
);
```

## Configuration

Open `config/database.php` and update the credentials to match your environment:

```php
$host     = "localhost";
$user     = "root";
$password = "your_password";
$database = "aula_php";
```

## Running the Application

1. Place the project folder inside your web server's document root (e.g., `htdocs` for XAMPP or `www` for WAMP).
2. Start Apache and MySQL.
3. Open your browser and navigate to:

```
http://localhost/crud_alunos_php/
```

## Usage

| Action | URL |
|--------|-----|
| List students | `index.php` |
| New student form | `index.php?action=create` |
| Save new student | `index.php?action=store` *(POST)* |
| Edit student form | `index.php?action=edit&id={id}` |
| Update student | `index.php?action=atualizar` *(POST)* |
| Delete student | `index.php?action=delete&id={id}` |

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- A local web server (XAMPP, WAMP, Laragon, etc.)
