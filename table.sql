
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    regno VARCHAR(20) UNIQUE,
    password VARCHAR(50)
);

CREATE TABLE login_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    regno VARCHAR(20),
    password_entered VARCHAR(50),
    login_status VARCHAR(20),
    login_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);