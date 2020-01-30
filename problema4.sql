CREATE TABLE product_categories (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
created DATETIME,
modified DATETIME
);

CREAT TABLE product_category_features (
id INT AUTO_INCREMENT PRIMARY KEY,
product_category_id INT,
name VARCHAR(255), --Aqui é o tipo de valor que a variável pode receber--
created DATATIME,
modified DATATIME
);

CREAT TABLE product_features (
id INT AUTO_INCREMENT PRIMARY KEY.
product_id INT,
product_category_feature_id INT,
value VARCHAR(255),
created DATATIME,
modified DATETIME
);
