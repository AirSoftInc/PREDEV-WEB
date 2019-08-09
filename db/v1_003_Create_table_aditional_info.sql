CREATE TABLE user_aditional_info(
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_id INT,
	description TEXT,
	rfc VARCHAR(18),
	telephone INT(10),
	address TEXT,
	city VARCHAR(30),
	zip_code INT(5),
	municipality VARCHAR(30),
	web_page VARCHAR(100),
	facebook VARCHAR(100),
	twitter VARCHAR(100),
	image_profile VARCHAR(300),
  	CONSTRAINT user_user_id_fk
	FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
);