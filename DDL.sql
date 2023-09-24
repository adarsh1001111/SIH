CREATE DATABASE tourism_db;

-- Use the newly created database
USE tourism_db;

-- Create a table to store hotel registration data
CREATE TABLE IF NOT EXISTS hotel_registration (
    ID INT PRIMARY KEY,
    hotel_name VARCHAR(255) NOT NULL,
    owner_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number int NOT NULL,
    gst_number VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    pincode VARCHAR(10) NOT NULL,
    city VARCHAR(100) NOT NULL,
    stat VARCHAR(100) NOT NULL,
    location VARCHAR(255) NOT NULL
);
-- Create a table to store flight operator registration data
CREATE TABLE IF NOT EXISTS flight_registration (
    ID INT PRIMARY KEY,
    operator_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number int NOT NULL,
    gst_number VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    pincode VARCHAR(10) NOT NULL,
    city VARCHAR(100) NOT NULL,
    stat VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    location VARCHAR(255) NOT NULL
);
-- Create a table to store tourist registration data
CREATE TABLE IF NOT EXISTS tourist_registration (
    ID INT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number int NOT NULL,
    identity_number VARCHAR(20) NOT NULL,
    age int NOT NULL,
    gender varchar(7) NOT NULL,
    type varchar(20) NOT NULL
);
-- Create a table to store cab operator registration data
CREATE TABLE IF NOT EXISTS cab_registration (
    ID INT PRIMARY KEY,
    operator_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number int NOT NULL,
    gst_number VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    pincode VARCHAR(10) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    location VARCHAR(255) NOT NULL
);
-- Create a table to store bus operator registration data
CREATE TABLE IF NOT EXISTS bus_registration (
    ID INT PRIMARY KEY,
    operator_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number int NOT NULL,
    gst_number VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    pincode VARCHAR(10) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    location VARCHAR(255) NOT NULL
);
-- Create a table to store cruise operator registration data
CREATE TABLE IF NOT EXISTS cruise_registration (
    ID INT PRIMARY KEY,
    operator_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number int NOT NULL,
    gst_number VARCHAR(20) NOT NULL,
    HeadquaterAddress VARCHAR(255) NOT NULL,
    pincode VARCHAR(10) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    location VARCHAR(255) NOT NULL
);
