CREATE DATABASE IF NOT EXISTS techstar;
USE techstar;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'teacher', 'student') NOT NULL DEFAULT 'student',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(120) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    course_id INT NOT NULL,
    enrolled_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS announcements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    posted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO courses (title, description) VALUES
('Business Analytics', 'Data-driven business strategy and reporting.'),
('Data Science', 'Statistical learning and data pipelines.'),
('Artificial Intelligence', 'Core AI methods and applications.'),
('Big Data', 'Distributed systems and large-scale processing.'),
('Machine Learning', 'Supervised and unsupervised learning techniques.'),
('Robotics', 'Automation, control systems, and intelligent machines.'),
('Financial Intelligence', 'Financial modeling and risk analysis.'),
('Information Technology', 'IT infrastructure, systems, and security basics.'),
('Deep Learning', 'Neural networks and advanced AI models.'),
('Generative Artificial Intelligence', 'Text/image generation models and applications.'),
('Entrepreneurship', 'Business creation, growth, and venture planning.'),
('Innovation', 'Creative problem-solving and product innovation.'),
('FullStack Development', 'End-to-end web application development.'),
('Startups', 'Startup lifecycle, funding, and scaling.');
