CREATE DATABASE IF NOT EXISTS hotel_registration_db;

-- Use the newly created database
USE hotel_registration_db;

-- Create a table to store hotel registration data
CREATE TABLE IF NOT EXISTS hotel_registration (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    hotel_name VARCHAR(255) NOT NULL,
    owner_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    gst_number VARCHAR(20) NOT NULL,
    Address VARCHAR(255) NOT NULL,
    pincode VARCHAR(10) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    location VARCHAR(255) NOT NULL
);