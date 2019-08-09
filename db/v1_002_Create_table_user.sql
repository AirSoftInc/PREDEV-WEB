CREATE TABLE users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30),
	last_name VARCHAR(30),
	surname VARCHAR(30),
	email VARCHAR(50),
	password VARCHAR(16),
	user_type VARCHAR(1),
	status BOOLEAN
);