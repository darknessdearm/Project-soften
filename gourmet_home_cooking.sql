-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 08:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gourmet_home_cooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `UserID` int(11) NOT NULL,
  `ContentID` int(11) NOT NULL DEFAULT '1',
  `ProductID` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`UserID`, `ContentID`, `ProductID`, `Date`) VALUES
(1, 1, 24, '2018-11-28 08:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ContentID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `UserID`, `ContentID`, `Date`, `Content`) VALUES
(1, 1, 2, '2018-11-19 08:08:00', 'วอนยองน่ารักมาก นาโกะน่ารักมาก มินจูสวยมาก อิอิ');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `ContentID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Date` datetime NOT NULL,
  `Detail` text NOT NULL,
  `TotalView` int(11) NOT NULL,
  `YoutubeURL` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ContentID`, `Title`, `Type`, `Date`, `Detail`, `TotalView`, `YoutubeURL`) VALUES
(1, 'Chocolate Lava Cake', 'Recipe', '2018-11-18 12:00:00', 'Ingredients:\r\n- Flour 100 g\r\n- Chocolate Extract 10 g\r\n- Baking Soda 5 g\r\n\r\nInstructions:\r\n1. Mix everything\r\n2. Bake\r\n3. Serve!', 1000000, NULL),
(2, 'Kimchi', 'Recipe', '2018-11-18 20:30:30', 'Ingredients:\r\n- Vegetable\r\n- Kimchi Sauce\r\n- Salt\r\n\r\nInstructions:\r\n1. Mix everything\r\n2. Ferment\r\n3. Serve!', 123456, 'https://www.youtube.com/watch?v=0sX_wDCbeuU');

-- --------------------------------------------------------

--
-- Table structure for table `content_product`
--

CREATE TABLE `content_product` (
  `ContentID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `CreditID` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Expire` date NOT NULL,
  `CVV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`CreditID`, `Type`, `Expire`, `CVV`) VALUES
(12345678, 'MasterCard', '2021-12-31', 123);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Shipping` float NOT NULL,
  `NetPrice` float NOT NULL,
  `InvoiceDate` datetime NOT NULL,
  `CreditCardName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`InvoiceID`, `UserID`, `Shipping`, `NetPrice`, `InvoiceDate`, `CreditCardName`) VALUES
(1, 1, 10, 199, '2018-11-19 10:00:00', 'MasterCard');

-- --------------------------------------------------------

--
-- Table structure for table `line_item`
--

CREATE TABLE `line_item` (
  `InvoiceID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_credit`
--

CREATE TABLE `member_credit` (
  `UserID` int(11) NOT NULL,
  `CreditID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_credit`
--

INSERT INTO `member_credit` (`UserID`, `CreditID`) VALUES
(1, 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Description` text NOT NULL,
  `Balance` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Type`, `Price`, `Description`, `Balance`, `img`) VALUES
(1, 'Kikoman Soy Sauce', 'Soy_Sauce', 60, 'All-purpose Kikkoman Soy Sauce is traditionally brewed from water, wheat, soybeans and salt. Like fine wine, Kikkoman Soy Sauce is aged for several months to develop its characteristic rich, yet mellow flavor, appetizing aroma and distinctive reddish-brown color. Besides using it in traditional Asian dishes, try it in mainstream American foods, classic Mediterranean dishes or exotic Caribbean cuisine.', 250, '001'),
(2, 'Campbell\'s 98% Fat Free Cream of Chicken Soup', 'Soup', 60, 'Campbell’s® Condensed 98% Fat Free Cream of Chicken Soup is a flavorful combination of creamy chicken stock and tender chicken meat blended with quality cream. Our 98% Fat Free soup is proven to be something the whole family will love. Savor a steamy bowl on its own or amp it up as a versatile recipe ingredient.', 1200, '002'),
(3, 'McCormick Curry Powder', 'Spices', 40, 'Add some Indian flavor to your next meal with McCormick® Curry Powder. Want to know how to use curry powder? Discover fun, new ways to incorporate curry spice into your meals today!', 300, '003'),
(4, 'Kikkoman Teriyaki Marinade & Sauce', 'Soy_Sauce', 45, 'Starting as a simple mixture of soy sauce and spices, teriyaki has been popular since it was first created in Japan. The lustrous sheen of the sauce inspired the name “teriyaki,” or glaze-broiled. Japanese-Americans in Hawaii added fresh ginger, brown sugar, pineapple juice and green onions to produce the teriyaki we know and love. In 1961, Kikkoman began producing the original bottled teriyaki sauce — Kikkoman Teriyaki Marinade & Sauce — setting the standard for teriyaki flavor. A blend of traditionally brewed soy sauce, wine, corn syrup and spices, teriyaki marinade & sauce has the depth of flavor that makes it an ideal marinade or brush-on sauce, right from the bottle.', 450, '004'),
(5, 'Kikkoman Stir-Fry Sauce', 'Soy_Sauce', 55, 'It’s easy to make authentic Chinese-style stir-fries with Kikkoman Stir-Fry Sauce. Pre-seasoned and pre-thickened, you can use it right from the bottle for meat, poultry, seafood or vegetable stir-fries. Kikkoman Stir-Fry Sauce is a blend of Kikkoman Soy Sauce, garlic, oyster sauce and Asian seasonings. It is a versatile recipe ingredient that’s ideal for seasoning Chinese fried rice and chow mein, as well as American favorites such as meatloaf and stew.', 350, '005'),
(6, 'McCormick Annatto, Ground (Achiote Molido)', 'Spices', 70, 'Annatto, the dark red seeds of the West Indian annatto tree, are used to add a vibrant natural red-orange color to food.', 170, '006'),
(7, 'McCormick Basil Leaves', 'Spices', 35, 'Basil, also called sweet basil, is a member of the mint family. Over 150 varieties of basil are grown. Native to India, basil is now grown commercially all over the Mediterranean region and in California. The dried leaves are grayish-green with an aroma and taste similar to cloves and anise. Basil blends well with tomatoes and is essential in most tomato-sauced Italian dishes.', 420, '007'),
(8, 'Campbell\'s Beef Noodle Soup', 'Soup', 60, 'Campbell’s® Condensed Beef Noodle Soup is made with high-quality, honest ingredients like savory beef stock, slurpable egg noodles, pieces of seasoned beef and farm-grown tomatoes. You’ll enjoy every low-fat, satisfying spoonful of our comforting soup. Campbell’s—soup you trust!', 650, '008'),
(9, 'McCormick Black Pepper, Coarse Ground', 'Spices', 45, 'Black pepper comes from the dried, immature berries of Piper nigrum L. The deep dark brown to black, deep-set wrinkled berries, when ground have a characteristic, penetrating odor, and a hot, biting and very pungent taste.', 780, '009'),
(10, 'Bertolli Classico', 'Olive_Oil', 65, 'Its mild taste makes Bertolli Classico olive oil very flexible and is suitable for a healthy diet. It is stable at high temperatures is perfect for frying and roasting as well as for vegetable dishes.', 550, '010'),
(11, 'Bertolli Extra Light', 'Olive_Oil', 65, 'Bertolli extra light olive oil is the perfect oil to replace vegetable oils, for use in baking and frying, including high heat cooking and stir frys.', 460, '011'),
(12, 'Bertolli Original', 'Olive_Oil', 65, 'Rich, fragrant and with a well rounded taste, Bertolli extra virgin olive oil gives a generous taste of the Mediterranean to your recipes with- out overpowering other ingredients. Ideal for bread dipping, pasta sauces and salad dressings.', 440, '012'),
(13, 'Campbell\'s Broccoli Cheese Soup', 'Soup', 70, 'Campbell’s® Condensed Broccoli Cheese Soup makes winning over any crowd easy. Our velvety, crowd-pleasing soup blends broccoli and Cheddar cheese with cream. Savor the comforting delight as-is or add it to show-stopping recipes. Kickstart your cooking inspiration by visiting CampbellsKitchen.com.—over 1,000 recipes available.', 700, '013'),
(14, 'Agnesi I Capellini N°1', 'Pasta', 115, 'Agnesi Pasta I Capellini N°1', 250, '014'),
(15, 'Agnesi I Chifferi Rigati N°50', 'Pasta', 70, 'Agnesi Pasta I Chifferi Rigati N°50', 650, '015'),
(16, 'McCormick Chili Powder', 'Spices', 60, 'This blend of chili peppers and spices gives a deep rich flavor and color to Southwestern chili, tacos, and beans. Use to season chicken or beef before roasting or grilling.', 400, '016'),
(17, 'McCormick Cinnamon, Ground', 'Spices', 50, 'What is cinnamon? Find out here! Enjoy the deep, warm flavor of ground cinnamon in French toast, oatmeal, sweet potatoes and even your morning coffee. Discover new cinnamon uses and recipes to incorporate it in.', 650, '017'),
(18, 'Campbell\'s Cream of Mushroom Soup', 'Soup', 65, 'Campbell’s® Condensed Cream of Mushroom Soup is a smooth, rich combination of mushrooms and cream with garlic. Versatile and easy to use, expedite comforting from-scratch meals—Breakfast Frittatas, Beef Stroganoff, Green Bean Casserole and more!—by using our Cream of Mushroom Soup as your go-to ingredient. More than 1,000 recipe ideas available on CampbellsKitchen.com.', 300, '018'),
(19, 'Agnesi Le Eliche N°56', 'Pasta', 75, 'Agnesi Pasta Le Eliche N°56', 340, '019'),
(20, 'Agnesi Le Farfalline N°57', 'Pasta', 70, 'Agnesi Pasta Le Farfalline N°57', 380, '020'),
(21, 'Prego Fresh Mushroom Italian Sauce', 'Pasta_Sauce', 60, 'If you love great mushroom taste, then this is the sauce for you—made with only fresh mushrooms!', 430, '021'),
(22, 'Prego Homestyle Alfredo Sauce', 'Pasta_Sauce', 70, 'Prego® Homestyle Alfredo has the perfect balance of fresh cream, garlic, and Parmesan cheese for a smooth and creamy taste.', 190, '022'),
(23, 'Prego Italian Sausage & Garlic Italian Sauce', 'Pasta_Sauce', 70, 'Bursting with the big, hearty flavors of Italian sausage and garlic.', 600, '023'),
(24, 'Campbell\'s Tomato Soup', 'Soup', 50, 'There’s a reason that Campbell’s® Condensed Tomato Soup reigns supreme. Our timeless classic starts with quality, farm-grown tomatoes cooked to perfection and loaded with comforting spoonfuls that burst with exceptional flavor. Cozy up with steamy bowls on their own or pair it with the ultimate comfort food pairing—grilled cheese!', 1000, '024'),
(25, 'Prego Traditional Italian Sauce', 'Pasta_Sauce', 65, 'In Prego® Traditional, vine-ripened tomatoes provide the base for the perfect balance of sweet tomato taste and savory Italian seasonings. A true classic!', 540, '025');

-- --------------------------------------------------------

--
-- Table structure for table `product_promotion`
--

CREATE TABLE `product_promotion` (
  `PromotionID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `PromotionID` int(11) NOT NULL,
  `PromotionName` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `DateStart` datetime NOT NULL,
  `DateEnd` datetime NOT NULL,
  `Discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`PromotionID`, `PromotionName`, `Description`, `DateStart`, `DateEnd`, `Discount`) VALUES
(1, 'Korean Festival 2018', 'เฉลิมฉลองเนื่องในโอกาสที่วง IZ*ONE ได้ทำการเดบิวต์\r\n\r\nรายละเอียด: ลดราคาสินค้าที่เกี่ยวกับประเทศเกาหลีทั้งหมด 30%', '2018-10-15 00:00:00', '2018-11-30 23:59:59', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TelNumber` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `DOB`, `Address`, `Email`, `TelNumber`, `Status`) VALUES
(1, 'เบนซ์เอง', 'อิอิ', '1997-12-16', 'ไม่บอกหรอก อิอิ', 'benzaaa35@hotmail.com', '0966666666', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`UserID`,`ContentID`,`ProductID`),
  ADD KEY `ContentID` (`ContentID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ContentID` (`ContentID`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`ContentID`);

--
-- Indexes for table `content_product`
--
ALTER TABLE `content_product`
  ADD PRIMARY KEY (`ContentID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`CreditID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `line_item`
--
ALTER TABLE `line_item`
  ADD PRIMARY KEY (`InvoiceID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `member_credit`
--
ALTER TABLE `member_credit`
  ADD PRIMARY KEY (`UserID`,`CreditID`),
  ADD KEY `CreditID` (`CreditID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `product_promotion`
--
ALTER TABLE `product_promotion`
  ADD PRIMARY KEY (`PromotionID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`PromotionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `PromotionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookmark_ibfk_2` FOREIGN KEY (`ContentID`) REFERENCES `content` (`ContentID`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookmark_ibfk_3` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`ContentID`) REFERENCES `content` (`ContentID`) ON DELETE CASCADE;

--
-- Constraints for table `content_product`
--
ALTER TABLE `content_product`
  ADD CONSTRAINT `content_product_ibfk_1` FOREIGN KEY (`ContentID`) REFERENCES `content` (`ContentID`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_product_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE;

--
-- Constraints for table `line_item`
--
ALTER TABLE `line_item`
  ADD CONSTRAINT `line_item_ibfk_1` FOREIGN KEY (`InvoiceID`) REFERENCES `invoice` (`InvoiceID`) ON DELETE CASCADE,
  ADD CONSTRAINT `line_item_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE;

--
-- Constraints for table `member_credit`
--
ALTER TABLE `member_credit`
  ADD CONSTRAINT `member_credit_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `member_credit_ibfk_2` FOREIGN KEY (`CreditID`) REFERENCES `creditcard` (`CreditID`) ON DELETE CASCADE;

--
-- Constraints for table `product_promotion`
--
ALTER TABLE `product_promotion`
  ADD CONSTRAINT `product_promotion_ibfk_1` FOREIGN KEY (`PromotionID`) REFERENCES `promotion` (`PromotionID`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_promotion_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
