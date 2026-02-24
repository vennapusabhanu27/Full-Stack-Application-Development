# 🎓 Student Registration & Data Storage System

## 📌 Project Overview

This project is a simple **Student Registration System** developed using **HTML5, CSS3, PHP, and MySQL**.
It allows users to register student details, store them in a database, and retrieve the stored data using SQL queries.

---

## 🚀 Features

* Student registration form
* Data storage using MySQL database
* Retrieve student records using SELECT query
* Clean and simple user interface
* Backend form handling with PHP

---

## 🛠️ Technologies Used

* HTML5
* CSS3
* PHP
* MySQL
* XAMPP Server

---

## 📂 Project Structure

student_project
│
├── index.html (Registration Form)
├── style.css (Form Styling)
├── db.php (Database Connection)
├── connect.php (Insert Data Logic)
└── view.php (Display Student Records)

---

## ⚙️ Setup Instructions

### 1️⃣ Start Server

* Open XAMPP Control Panel
* Start Apache and MySQL

### 2️⃣ Create Database

* Open phpMyAdmin
* Create database: **student_db**

### 3️⃣ Create Table

Run the following SQL:

CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
dob DATE,
department VARCHAR(50),
phone VARCHAR(15)
);

### 4️⃣ Run Project

Open browser and navigate to:
http://localhost/student_project/index.html

---

## 📊 Functionality

* Form collects Name, Email, DOB, Department, and Phone
* PHP stores data using INSERT query
* Student records are displayed using SELECT query

---

## 🎯 Learning Outcomes

* Understanding form handling in PHP
* Database connectivity using MySQL
* Executing INSERT and SELECT queries
* Basic CRUD project structure

---

## 🔮 Future Improvements

* Add edit and delete features
* Implement search functionality
* Create login authentication
* Convert into a full student management system

---

## 👨‍💻 Author

Student Project – Academic Practice
