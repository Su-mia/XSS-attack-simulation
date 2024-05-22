CREATE TABLE `users` (
`user_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
`pass` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
);

CREATE TABLE `admin` (
`admin_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
`pass` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
);
CREATE TABLE `Country` (
`CountryName` varchar(50) NOT NULL PRIMARY KEY
);

CREATE TABLE `Brand` (
`BrandName` varchar(50) NOT NULL PRIMARY KEY,
`CountryName` varchar(50) NOT NULL,
CONSTRAINT fk_Brand FOREIGN KEY (CountryName) REFERENCES Country(CountryName) ON DELETE CASCADE
);


CREATE TABLE `Category` (
`CategoryName` varchar(50) NOT NULL  PRIMARY KEY
);

CREATE TABLE `Products` (
`product_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`product_name` varchar(50)  NOT NULL,
`BrandName` varchar(50)  NOT NULL,
`CategoryName` varchar(50) NOT NULL,
`price` int(10) COLLATE utf8mb4_unicode_ci NOT NULL,
`Fat` int(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`Sugar` int(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`Calories` int(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`Carbohydrate` int(250) COLLATE utf8mb4_unicode_ci NOT NULL,
`Protein` int(250) COLLATE utf8mb4_unicode_ci NOT NULL,
`Fiber` int(250) COLLATE utf8mb4_unicode_ci NOT NULL,
`product_pic` varchar(250),
CONSTRAINT fk_Products FOREIGN KEY (BrandName) REFERENCES Brand(BrandName) ON DELETE CASCADE,
CONSTRAINT fk2_Products FOREIGN KEY (CategoryName) REFERENCES Category(CategoryName) ON DELETE CASCADE
);

CREATE TABLE `proposedProducts` (
`proProduct_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`proProduct_name` varchar(50)  NOT NULL,
`proBrandName` varchar(50)  NOT NULL,
`proCountry` varchar(50)  NOT NULL,
`proUserid` int(11)  NOT NULL,
`proCategoryName` varchar(50) NOT NULL,
`proPrice` int(10) COLLATE utf8mb4_unicode_ci NOT NULL,
`proFat` int(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`proSugar` int(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`proCalories` int(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`proCarbohydrate` int(250) COLLATE utf8mb4_unicode_ci NOT NULL,
`proProtein` int(250) COLLATE utf8mb4_unicode_ci NOT NULL,
`proFiber` int(250) COLLATE utf8mb4_unicode_ci NOT NULL,
`proProduct_pic` varchar(250),
CONSTRAINT profk3_Products FOREIGN KEY (proUserid) REFERENCES users(user_id) ON DELETE CASCADE
);

CREATE TABLE search_tracking (
  track_id INT PRIMARY KEY AUTO_INCREMENT,
  product_id INT,
  CONSTRAINT fk_track FOREIGN KEY (product_id) REFERENCES Products(product_id) ON DELETE CASCADE
);

