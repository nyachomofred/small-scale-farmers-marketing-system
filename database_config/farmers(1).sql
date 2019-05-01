-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 04:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmers`
--

-- --------------------------------------------------------

--
-- Table structure for table `dailyprices`
--

CREATE TABLE `dailyprices` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `low_price` varchar(100) NOT NULL,
  `high_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyprices`
--

INSERT INTO `dailyprices` (`id`, `product`, `location`, `quantity`, `low_price`, `high_price`) VALUES
(1, 2, 1, '', '100', '120'),
(2, 2, 1, '90 kg', '2000', '2300');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(1, 'kisumu'),
(2, 'nairobi'),
(3, 'mombasa'),
(4, 'kisii'),
(5, 'eldoret');

-- --------------------------------------------------------

--
-- Table structure for table `marketinfo`
--

CREATE TABLE `marketinfo` (
  `id` int(11) NOT NULL,
  `market_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `market_day` varchar(100) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketinfo`
--

INSERT INTO `marketinfo` (`id`, `market_name`, `location`, `capacity`, `market_day`, `info`) VALUES
(1, 'Masai mara', 'Nairobi ', '225,456square feet', 'saturday', 'Maasai Market has to be one of the best places to purchase curios, \r\ndécor items, unique-African jewellery, and fabric. In Kenya, there are\r\n many Maasai markets, but the most common one is outside the Nairobi\r\n Court of Appeal’s parking lot and happens every Saturday.'),
(2, 'Kariokor Market', 'Nairobi', '225,00 square feet', 'Open everyday', 'Another famous market with over 200 stalls, \r\npeople can buy wholesale jewellery, footwear, \r\nleather goods, baskets, décor items, and curios. \r\n'),
(3, 'Toi Market', 'Adams Arcade/Ngong Road area in Nairobi,', '125,00 square feet', 'Open everyday', 'Another flea market located in the Adams Arcade/Ngong Road\r\n area in Nairobi, shoppers can find very-fashionable items like\r\n jeans, tops, and dresses. Some of these clothes are secondhand, \r\nbut they are very attractive and pricier than in Gikomba Market.'),
(5, 'Muthurwa Market', 'Central Business District nairobi', '325,713 square feet', 'Open everyday', 'This is a very busy market near the Central Business District. \r\nPeople sell all manners of things including clothes and food items. \r\nThis market is very congested and noisy.\r\n'),
(6, 'City Market Nairobi', 'Nairobi', '324,713 square feet', 'Open everyday', 'Vendors also sell flowers, fruits, and vegetables\r\n as well as meat ranging from fish, mutton, beef, \r\npork, and chicken.'),
(7, 'Ngara Market', 'Nairobi,ngara', '325,120 square feet', 'Open everyday', 'The huge market in Ngara offers people \r\nfresh vegetables, grains, and fruit, and \r\nsecond-hand clothes'),
(8, 'Old Town market', 'Mombasa', '424,710 square feet', 'Open everyday', 'The Old Town section of Mombasa contains a delightful\r\n collection of tourist-friendly shops and souvenir stands. . \r\nYou can find many good bargains, from clothes and artwork to \r\njewelry, spices and fragrances. '),
(9, 'Biashara Street', 'In downtown Mombasa ', '94,713 square feet', 'Open everyday', 'In downtown Mombasa on Biashara Street you’ll find a collection of shops for agriculture comodity and clothing items to suit summertime tastes. \r\n'),
(11, 'A1 Supermarket', 'Corner Hospital Street and Digo Road, Mombasa, Kenya', '125,234 square feet', 'Open everyday', 'The A1 Supermarket on Hospital Street and Digo Road in Mombasa \r\nis one of the best venues for finding foodstuffs and buying local \r\nproduce. Whether you need to find some good wine, cheese,\r\n in-season fruits or some supplies for throwing a party, \r\nthe A1 has plenty of options.'),
(12, 'Coast Zanzibar Curio Shop', 'Old Town, Mombasa, Kenya', '196,960 square feet', 'Open everyday', 'The Old Town section of Mombasa contains a delightful\r\n collection of tourist-friendly shops and souvenir stands.\r\n Many of the shops reflect the history of the town, with Asian, \r\nPortuguese and Arab shops abounding'),
(13, 'Coast Zanzibar Curio Shop', 'Moi Avenue, Mombasa, Kenya', '196,960 square feet', 'saturday', 'The Coast Zanzibar Curio Shop on Moi Avenue is \r\ngreat for finding crafts and souvenirs. This place makes\r\na good spot for an afternoon visit, and is conveniently\r\n located next to the beach. '),
(14, 'Pirates Beach', 'Mombasa, ', '225,713 square feet', 'Open everyday', 'You can buy colorful hats and clothing\r\n items while you watch the scenic waves.\r\n When not hunting for the best bargain items, \r\nyou can also get a taste of the fine seafood and \r\nbeer for sale along the beach.'),
(15, 'Nyali Cinemax', 'Nyali Road, Mombasa, Kenya', '125,00 square feet', 'Open everyday', 'The Nyali Cinemax shopping mall is great for shopping and\r\n grabbing a festive meal with friends. You can buy some great\r\n jewelry in the mall, as well as some luxurious fashion items ranging \r\nfrom wristwatches and shoes to hats and jeans. '),
(16, 'Marikiti Market', 'Nehru Road, Mombasa, Kenya', '225,713 square feet', 'saturday', 'For a great Kenyan shopping experience, \r\nhead out to Marikiti Market in the city. \r\nThis bustling market makes for a thrilling outing, \r\nand you’ll find plenty of great souvenirs and artwork\r\n to make the trip worthwhile'),
(17, 'Masai Craft Market', 'kisumu', '125,234 square feet', 'Open everyday', 'Old Town is an area of Mombasa, Kenya. \r\nSituated on the south-east side of Mombasa Island, \r\nthe Old Town covers an area of 72 hectares, \r\nand is inhabited by a mix of local, Arab, Asian,\r\n Portuguese and British settlers'),
(19, 'Obunga Market', 'Obunga Market', '196,960 square feet', 'Open everyday', 'Its a cool place at the shores of lake Victoria, \r\n it\'s accessible through road. You can get very good fried \r\n served at your orde!! Good for hotel business\r\n'),
(20, 'Kondele Market', 'kisumu', '325,713 square feet', 'Open everyday', 'An open air market ideal for shopping cereals and other quality products\r\n'),
(21, 'Mamboleo Market', 'kisumu', '234 square feet', 'Open everyday', 'Nice place to get your groceries and fresh vegetables for your household.'),
(22, 'Kibuye Market', ' Kakamega Road, Kisumu', '645 square feet', 'Open everyday', 'This is the second largest open air market in\r\n Kenya, and one of the oldest. It is \r\nlocated on Jomo Kenyatta Highway, north-east of the city center'),
(23, 'Chiga Market', 'Kakamega Road, Kisumu', '125,234 square feet', 'saturday', 'This is a very good place and very strategic \r\nposition for business but it\'s flooded with idlers and cheap halots. \r\nOtherwise Chiga market is a good place to stay at .\r\n'),
(24, '', '', '225,713 square feet', '', 'Jubilee Market is located in Jubilee Hall in\r\n Covent Garden, London. The first\r\nmarket in Covent Garden piazza took place\r\n in 1654, and Jubilee Market was built');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace`
--

CREATE TABLE `marketplace` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `buyer_name` varchar(100) NOT NULL,
  `phone_email` varchar(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `buyer_phone` varchar(100) NOT NULL,
  `quantity_bought` varchar(100) NOT NULL,
  `sort` varchar(100) NOT NULL,
  `negotiate` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace`
--

INSERT INTO `marketplace` (`id`, `product`, `quantity`, `unit`, `price`, `name`, `email`, `phone`, `foto`, `description`, `location`, `date`, `buyer_name`, `phone_email`, `order_date`, `buyer_phone`, `quantity_bought`, `sort`, `negotiate`, `from`, `to`) VALUES
(1, 'Millet', '200', 'Kilogram', '9580', 'tom   ngethia', 'tom@gmail.com', '0723672411', 'millet.jpg', 'avery good sweet potatoes at 1000 ksh \r\nthis potatoes is ready atb the farm\r\nplz hurry to buy this potatoes', 'Kericho', '2018-07-05 09:54:13.652517', 'felix   oketch', 'felix@gmail.com', '2018-07-08 12:45:49', '0700445689', '100', 'one week ago', '', '', ''),
(2, 'Cabages', '100', 'Pieces', '60', 'tom   ngethia', 'tom@gmail.com', '0723672411', 'cowpea.JPG', 'good quality cabage  that is good for \r\nhealth and kitchen staff. call us or send\r\n us an sms or email, delivery is freee', 'Nakuru', '2018-07-05 09:54:13.652517', 'felix   oketch', 'felix@gmail.com', '2018-07-08 12:45:49', '0700445689', '100', '', '', '', ''),
(6, 'Millet', '50', 'Kilogram', '3200', 'tom   ngethia', 'tom@gmail.com', '0723672411', 'drymaize.jpg', 'millet for sale from KSh 3900. We now have 7 ads \r\nunder home & living for Dry maize for sale,.', 'machakos', '2018-07-05 14:14:43.384873', 'felix   oketch', 'felix@gmail.com', '2018-07-08 12:45:49', '0700445689', '31', 'one week ago', '', '', ''),
(7, '', '40', 'Kilogram', '1600', 'tom   ngethia', 'tom@gmail.com', '0723672411', 'pishori.jpg', 'quality and Affordable Pishori Rice Thinking of \r\nbuying rice of good quality as gifts to your family,\r\n friends, employees and well-wishers Save yourself of\r\n the hassles involved. Just call on us. ', 'machakos', '2018-07-05 14:23:02.406415', 'felix   oketch', 'felix@gmail.com', '2018-07-08 12:45:49', '0700445689', '5', 'one week ago', '', '', ''),
(8, 'dry maize', '4', 'Kilogram', '5', 'wqetyqwewq   32e223tftry32', 'b@gmail.com', '67', 'maize.jpg', 'good maize for every meal, that is lunch supper and \r\nrakfast . ', 'bungoma', '2018-07-09 08:01:30.420503', 'felix   oketch', 'felix@gmail.com', '2018-07-09 08:01:30', '0700445689', '5', 'one month ago', '', '', ''),
(9, 'rice', '180', 'Kilogram', '190', 'simon   wagura', 'simowagura9@GMAIL.COM', '0712143658', 'millet.jpg', 'HIGH QUALITY RICE', 'nairobi', '2018-08-10 07:02:00.808214', 'felix   oketch', 'felix@gmail.com', '2018-08-10 07:02:00', '0700445689', '100', 'one week ago', '', '', ''),
(10, 'Beans Canadian', '11', 'Kilogram', '109', 'felix   oketch', 'felix@gmail.com', '0700445689', 'garlic.jpg', 'good canadian beans', 'bungoma', '2018-08-13 09:52:03.561846', 'felix   oketch', 'felix@gmail.com', '2018-08-13 09:52:03', '0700445689', '4', 'one month ago', '', '', ''),
(11, 'Millet', '5', 'Bunch', '2', 'felix   oketch', 'felix@gmail.com', '0700445689', 'lemon.jpg', 'dddd', 'embu', '2018-08-14 06:59:34.584644', 'felix   oketch', 'felix@gmail.com', '2018-08-14 06:59:34', '0700445689', '7', '', '', '', ''),
(12, 'dry maize', '4', 'Kilogram', '96', 'felix   oketch', 'felix@gmail.com', '0700445689', 'green gram.jpg', 'good maize sold at cheap price \r\nhurry up to pick your choice', 'Kericho', '2018-08-16 10:24:49.911363', 'felix   oketch', 'felix@gmail.com', '2018-08-16 10:24:49', '0700445689', '10', '', '', '', ''),
(13, 'dry maize', '5', 'Kilogram', '4', 'felix   oketch', 'felix@gmail.com', '0700445689', 'chilli.jpg', 'DWAESDRTF\r\nDSFDAGRD\r\nCCDFDHJKFGH', 'Eldoret', '2018-08-16 10:41:07.353269', 'felix   oketch', 'felix@gmail.com', '2018-08-16 10:41:07', '0700445689', '5', '', '', '', ''),
(14, 'dry maize', '4', 'Pieces', '11', 'felix   oketch', 'felix@gmail.com', '0700445689', 'drymaize.jpg', 'Average yield 35-40 bags per acre.\r\n Matures in 4 months (120-140 days). \r\nGood standability, Resistant to Maize Streak Virus ', 'bungoma', '2018-08-16 13:20:20.744692', 'benie   benie', 'benie@gmail.com', '2018-08-16 13:20:20', '0700145621', '4', '', '', '', ''),
(15, 'Tomatoes', '100', 'Kilogram', '120', 'felix   oketch', 'felix@gmail.com', '0700445689', 'tomatoes.jpg', 'Look for plump, heavy tomatoes with smooth \r\nskins.They should be free of bruises, blemishes, \r\nor deep cracks, although fine', 'kisumu', '0000-00-00 00:00:00.000000', 'felix   oketch', 'felix@gmail.com', '2018-08-16 13:48:53', '0700445689', '18', '', '', '', ''),
(16, 'Oranges', '100', 'Pieces', '15', 'felix   oketch', 'felix@gmail.com', '0700445689', 'orange1.jpg', 'Look at the oranges. Choose oranges that\r\nare brightly colored. The most common type \r\nof oranges available at most grocery stores are \r\nthe Navel and Valencia varieties', 'machakos', '2018-08-16 07:00:00.000000', 'benie   benie', 'benie@gmail.com', '2018-08-16 13:51:23', '0700145621', '100', '5hrs ago', '', '', ''),
(17, 'Mangoes', '200', 'Pieces', '15', 'felix   oketch', 'felix@gmail.com', '0700445689', 'mango1.jpg', 'Ripe mangoes will always have a strong, sweet, \r\nfragrant and fruity aroma around the stem. \r\nA ripe mango has a smell somewhat like melon', 'Eldoret', '2018-08-16 13:00:00.000000', 'benie   benie', 'benie@gmail.com', '2018-08-16 13:55:02', '0700145621', '11', '1hr hour ago', '', '24-08-2018', '26-08-2018'),
(18, 'Sorghum', '300', 'Kilogram', '1200', 'felix   oketch', 'felix@gmail.com', '0700445689', 'sorghum.jpg', 'One of the most versatile members of the grass family, \r\nsorghum (Sorghum bicolor) can be grown for grain, crafting or \r\nfor processing into sorghum syrup. ', 'Kitui', '2018-08-16 14:00:00.000000', 'benie   benie', 'benie@gmail.com', '2018-08-16 14:00:58', '0700145621', '22', 'one month ago', 'negotiate', '23-08-2018', '25-08-2018'),
(19, 'dry maize', '90', 'Kilogram', '1230', 'benie   benie', 'benie@gmail.com', '0700145621', 'maize2.jpg', 'Maize is also an important livestock feed \r\nboth as silage and as crop residue, grain \r\nand is also used industrially for starch and oil extraction.', 'nairobi', '2018-08-16 14:00:00.000000', 'benie   benie', 'benie@gmail.com', '2018-08-16 14:10:09', '0700145621', '', '1hr hour ago', 'sold', '23-08-2018', '25-08-2018'),
(20, 'Millet', '180', 'Kilogram', '2540', 'benie   benie', 'benie@gmail.com', '0700145621', 'millet2.jpg', 'Millet can be used [2] as a traditional cereal,\r\n and can also be used in porridge, snacks, \r\nand other types of bread, as it is very high in\r\n', 'Kisii', '2018-08-16 14:00:00.000000', 'felix   oketch', 'felix@gmail.com', '2018-08-16 14:14:50', '0700445689', '121', '1hr hour ago', 'negotiate', '', ''),
(21, 'Cabages', '34', 'Pieces', '1300', 'benie   benie', 'benie@gmail.com', '0700145621', 'cabage.jpg', 'Millet can be used [2] as a traditional ', 'Kitengela', '2018-08-16 14:00:00.000000', '', '', '2018-08-16 14:17:25', '', '', '', 'negotiate', '', ''),
(22, 'Garlic', '300', 'Kilogram', '7800', 'benie   benie', 'benie@gmail.com', '0700145621', 'garlic2.jpg', 'Garlic contains a compound known as allicin, \r\nwhich has been shown to help lower cholesterol\r\nlevels, prevent blood clotting, and has been shown \r\nto have anti-cancer properties and anti-microbial affects. ', 'Kagio', '2018-08-16 14:00:00.000000', 'karanja   karanja', 'karanja@yahoo.com', '2018-08-16 14:23:02', '0745789123', '7', '', '', '', ''),
(23, 'Cassava', '56', 'Pieces', '450', 'benie   benie', 'benie@gmail.com', '0700145621', 'casava.jpg', 'Fiber. Cassava comes loaded with carbohydrates,\r\n including the especially beneficial carbohydrate \r\ndietary fiber. Consuming fiber is linked to a number \r\nof health benefits, including lower blood pressure,', 'thika', '2018-08-16 14:00:00.000000', 'karanja   karanja', 'karanja@yahoo.com', '2018-08-16 14:28:06', '0745789123', '17', '', '', '', ''),
(24, 'Millet', '7', 'Kilogram', '6', 'kevo   otis', 'kfaotis@gmail.com', '0705911456', 'millet2.jpg', 'buydrtsedghjffgxds\\dfx', 'Nakuru', '2018-08-23 09:00:00.000000', '', '', '2018-08-23 09:55:18', '', '', '', '', '', ''),
(25, 'Groundnut', '111', 'Kilogram', '120', 'felix   oketch', 'felix@gmail.com', '0700445689', 'drymaize.jpg', 'good groundnut', 'nakuru', '2018-08-23 13:00:00.000000', '', '', '2018-08-23 13:53:32', '', '', '', '', '24-08-2018', '26-08-2018'),
(26, 'Cassava', '22', 'Pieces', '100', 'felix   oketch', 'felix@gmail.com', '0700445689', 'maize2.jpg', 'good cabages', 'thika', '2018-08-23 13:00:00.000000', 'benie   benie', 'benie@gmail.com', '2018-08-23 13:54:29', '0700145621', '22', '', '', '', ''),
(27, 'dry maize', '1122', 'Kilogram', '5678', 'felix   oketch', 'felix@gmail.com', '0700445689', 'maize2.jpg', 'good qquality maize', 'nairobi', '2018-08-23 13:00:00.000000', '', '', '2018-08-23 13:56:09', '', '', '', '', '23-08-2018', '24-08-2018'),
(28, 'Groundnut', '445', 'Kilogram', '2334', 'felix   oketch', 'felix@gmail.com', '0700445689', 'garlic2.jpg', 'good maize in mobasa', 'nakuru', '2018-08-23 13:00:00.000000', '', '', '2018-08-23 13:58:15', '', '', '', '', '24-08-2018', '26-08-2018'),
(29, 'rice', '100', 'Pieces', '103', 'felix   oketch', 'felix@gmail.com', '0700445689', 'mango1.jpg', 'fghdasjfasdwe\r\njhhdfsdsfkfd\r\nsahhdgda', 'busia', '2018-08-23 13:00:00.000000', 'karanja   karanja', 'karanja@yahoo.com', '2018-08-23 13:59:35', '0745789123', '11', '', '', '', ''),
(30, 'Beans Canadian', '456', 'Kilogram', '367', 'omondi   omondi', 'o@gmail.com', '7867566000', 'casava.jpg', 'very good beans canadian', 'machakos', '2018-08-23 14:00:00.000000', 'karanja   karanja', 'karanja@yahoo.com', '2018-08-23 14:02:45', '0745789123', '9', '', '', '', ''),
(31, 'Cassava', '200', 'Bunch', '453', 'omondi   omondi', 'o@gmail.com', '7867566000', 'cabage.jpg', 'gooduuscfdsda\r\nbbbfsah', 'bungoma', '2018-08-23 14:00:00.000000', 'benie   benie', 'benie@gmail.com', '2018-08-23 14:03:30', '0700145621', '', '', 'negotiate', '', ''),
(32, 'Cassava', '100', 'Kilogram', '100', 'omondi   omondi', 'o@gmail.com', '7867566000', 'maize2.jpg', 'very delicious', 'mombasa', '2018-08-23 14:00:00.000000', 'felix   oketch', 'felix@gmail.com', '2018-08-23 14:06:25', '0700445689', '12', '', '', '', ''),
(33, 'Groundnut', '33', 'Kilogram', '100', 'omondi   omondi', 'o@gmail.com', '7867566000', 'chilli.jpg', 'good', 'Nakuru', '2018-08-23 14:08:00.000000', '', '', '2018-08-23 14:08:26', '', '', '', '', '25-08-2018', '26-08-2018'),
(34, 'Groundnut', '1', 'Kilogram', '1', 'omondi   omondi', 'o@gmail.com', '7867566000', 'maize2.jpg', 'ground cvggtytnngsc', 'nairobi', '2018-08-23 14:10:00.000000', '', '', '2018-08-23 14:10:22', '', '', '', '', '25-08-2018', '26-08-2018'),
(35, 'Groundnut', '546', 'Kilogram', '334', 'omondi   omondi', 'o@gmail.com', '7867566000', 'sorghum.jpg', '56672344566', 'nakuru', '2018-08-23 14:11:00.000000', '', '', '2018-08-23 14:11:23', '', '', '', '', '25-08-2018', '26-08-2018'),
(36, 'Groundnut', '234', 'Kilogram', '223', 'ting   ting', 'ting12@gmail.com', '905675885', 'green gram.jpg', 'good groundnut', 'nakuru', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:16:36', '', '', '5hrs ago', '', '25-08-2018', '26-08-2018'),
(37, 'dry maize', '354', 'Bunch', '232', 'ting   ting', 'ting12@gmail.com', '905675885', 'cabage.jpg', 'fsdfgbhfdds', 'nairobi', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:17:35', '', '', '', '', '23-08-2018', '25-08-2018'),
(38, 'dry maize', '23', 'Pieces', '355', 'ting   ting', 'ting12@gmail.com', '905675885', 'chilli.jpg', 'dgtruuds dgttr', 'nairobi', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:18:19', '', '', '5hrs ago', '', '23-08-2018', '24-08-2018'),
(39, 'dry maize', '343', 'Bunch', '90', 'ting   ting', 'ting12@gmail.com', '905675885', 'green gram.jpg', 'ferfsdsddsfrsdf\r\nasdfgddsiugfds\r\nsahfdadfh\r\nsahjgddgefw', '', '2018-08-23 14:00:00.000000', 'benie   benie', 'benie@gmail.com', '2018-08-23 14:19:04', '0700145621', '', '', 'negotiate', '', ''),
(40, 'dry maize', '90', 'Kilogram', '789', 'ting   ting', 'ting12@gmail.com', '905675885', 'millet.jpg', 'tyrhjhhgfdgfghf\r\nhggfgfdsdfgh\r\nfdtyyhg', 'nairobi', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:21:10', '', '', '', '', '', ''),
(41, 'dry maize', '879', 'Pieces', '567', 'jj   jj', 'sw@yahoo.com', '34567889', 'cabage.jpg', '4567334', 'mombasa', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:26:39', '', '', '', '', '', ''),
(42, 'Cassava', '644', 'Bunch', '100', 'jj   jj', 'sw@yahoo.com', '34567889', 'green gram.jpg', 'defrtghghheetreetg', 'mombasa', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:27:32', '', '', '', '', '', ''),
(43, 'dry maize', '33', 'Kilogram', '33', 'jj   jj', 'sw@yahoo.com', '34567889', 'garlic.jpg', 'dfsffsdq3wrtrw4e5g', 'nairobi', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:29:13', '', '', '', '', '', ''),
(44, 'Cassava', '33', 'Pieces', '67', 'jj   jj', 'sw@yahoo.com', '34567889', 'garlic.jpg', 'qwertyungf htrh5y', 'machakos', '2018-08-23 14:00:00.000000', 'karanja   karanja', 'karanja@yahoo.com', '2018-08-23 14:30:46', '0745789123', '', '', 'negotiate', '', ''),
(45, 'Cowpeas', '34', 'Kilogram', '332', 'jj   jj', 'sw@yahoo.com', '34567889', 'lemon.jpg', 'eqfwrehy', 'Nakuru', '2018-08-23 14:00:00.000000', 'benie   benie', 'benie@gmail.com', '2018-08-23 14:32:03', '0700145621', '24', '', '', '', ''),
(46, 'Wheat', '346', 'Pieces', '5', 'jj   jj', 'sw@yahoo.com', '34567889', 'peas.jpg', 'ewrtwteryhw45y6qwe65q3', 'machakos', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:33:08', '', '', '', '', '', ''),
(47, 'Cassava', '3', 'Kilogram', '22', 'jj   jj', 'sw@yahoo.com', '34567889', 'peas.jpg', 'ddeess', 'Kitui', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:33:44', '', '', '', '', '', ''),
(48, 'Garlic', '445', 'Bunch', '433', 'jj   jj', 'sw@yahoo.com', '34567889', 'peas.jpg', 'ewwrt', 'kamata', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:34:36', '', '', '', '', '', ''),
(49, 'Cabages', '78', 'Bunch', '55', 'jj   jj', 'sw@yahoo.com', '34567889', 'peas.jpg', 'dfg43ty3reyyy', 'busia', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:36:00', '', '', '', '', '', ''),
(50, 'Cabages', '556', 'Bunch', '66', 'jj   jj', 'sw@yahoo.com', '34567889', 'drymaize.jpg', 'gtgtgffsdfhtretre', 'bungoma', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:36:46', '', '', '', '', '', ''),
(51, 'Cabages', '44', 'Pieces', '11', 'jj   jj', 'sw@yahoo.com', '34567889', 'maize.jpg', 'ggod tgghsdfd', '', '2018-08-16 14:00:00.000000', '', '', '2018-08-23 14:38:34', '', '', '', '', '', ''),
(52, 'Cabages', '54', 'Bunch', '3', 'jj   jj', 'sw@yahoo.com', '34567889', 'maize.jpg', '34we6yttyr', 'busia', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:39:24', '', '', '', '', '', ''),
(53, 'Cabages', '23', 'Kilogram', '22', 'felix   oketch', 'felix@gmail.com', '0700445689', 'cabage.jpg', 'wqere32332', 'machakos', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:41:37', '', '', '', '', '', ''),
(54, 'Cabages', '233', 'Bunch', '21', 'felix   oketch', 'felix@gmail.com', '0700445689', 'orange1.jpg', 'eedfrggtfsdffgfsdfgfdf', 'Kericho', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:42:06', '', '', '', '', '', ''),
(55, 'Cassava', '90', 'Kilogram', '78', 'felix   oketch', 'felix@gmail.com', '0700445689', 'maize.jpg', 'good querty gohhjfhgfdg', 'mombasa', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:46:54', '', '', '', '', '', ''),
(56, 'Millet', '334', 'Kilogram', '23', 'felix   oketch', 'felix@gmail.com', '0700445689', 'pishori.jpg', '345', 'Kericho', '2018-08-23 14:00:00.000000', '', '', '2018-08-23 14:49:18', '', '', '', '', '', ''),
(57, 'dry maize', '44', 'Kilogram', '33', 'benie   benie', 'benie@gmail.com', '0700145621', 'cabage.jpg', 'rfgtger', 'Kisii', '2018-08-28 08:27:29.355045', '', '', '2018-08-28 08:27:29', '', '', '', '', '', ''),
(58, 'dry maize', '44', 'Kilogram', '33', 'benie   benie', 'benie@gmail.com', '0700145621', 'cabage.jpg', 'rfgtger', 'Kisii', '2018-08-28 08:31:38.445292', '', '', '2018-08-28 08:31:38', '', '', '', '', '', ''),
(59, 'dry maize', '44', 'Kilogram', '33', 'benie   benie', 'benie@gmail.com', '0700145621', 'cabage.jpg', 'rfgtger', 'Kisii', '2018-08-28 08:32:42.623963', '', '', '2018-08-28 08:32:42', '', '', '', '', '', ''),
(60, 'rice', '223', 'Kilogram', '455', 'benie   benie', 'benie@gmail.com', '0700145621', 'maize2.jpg', 'my rice is the best of the rice in ti the town \r\nhurry to pick youer choice now', 'bungoma', '2018-08-28 08:34:29.145056', '', '', '2018-08-28 08:34:29', '', '', '', '', '', ''),
(61, 'dry maize', '556', 'Pieces', '454', 'benie   benie', 'benie@gmail.com', '0700145621', 'rio grande.JPG', 'fgfgf', 'Kitengela', '2018-08-28 10:06:32.168954', '', '', '2018-08-28 10:06:32', '', '', '', '', '', ''),
(62, 'Millet', '3', 'Bunch', '4', 'benie   benie', 'benie@gmail.com', '0700145621', 'parent.jpg', 'dddss', 'kericho', '2018-09-13 10:04:43.284367', '', '', '2018-09-13 10:04:43', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marketprice`
--

CREATE TABLE `marketprice` (
  `id` int(11) NOT NULL,
  `comodity` varchar(100) NOT NULL,
  `uom` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketprice`
--

INSERT INTO `marketprice` (`id`, `comodity`, `uom`, `weight`, `location`, `price`) VALUES
(1, 'wheat', 'bag', '90', 'Eldoret', '3300'),
(2, 'wheat', 'bag', '90', 'Nairobi', '3000'),
(3, 'wheat', 'bag', '90', 'malindi', '4500'),
(4, 'wheat', 'bag', '90', 'Mombasa', '3900'),
(5, 'wheat', 'bag', '90', 'kisumu', '4000'),
(6, 'wheat', 'bag', '90', 'Nakuru', '3400'),
(7, 'Beans Roscoco', 'bag', '90', 'Nairobi', '7200'),
(8, 'Beans Roscoco', 'bag', '90', 'Mombasa', '5600'),
(9, 'Beans Roscoco', 'bag', '90', 'Eldoret', '7000'),
(10, 'Beans Roscoco', 'bag', '90', 'kisumu', '7200'),
(11, 'Beans Roscoco', 'bag', '90', 'malindi', '7000'),
(12, 'Beans Roscoco', 'bag', '90', 'Nakuru', '7400'),
(13, 'Mwezi moja', 'bag', '90', 'Eldoret', '6800'),
(14, 'Mwezi moja', 'bag', '90', 'kisumu', '5550'),
(15, 'Mwezi moja', 'bag', '90', 'malindi', '7200'),
(16, 'Mwezi moja', 'bag', '90', 'Mombasa', '6400'),
(17, 'Mwezi moja', 'bag', '90', 'Nairobi', '6800'),
(18, 'Mwezi moja', 'bag', '90', 'Nakuru', '7200'),
(19, 'Finger Millet', 'bag', '90', 'Eldoret', '7200'),
(20, 'Finger Millet', 'bag', '90', 'kisumu', '6470'),
(21, 'Finger Millet', 'bag', '90', 'malindi', '6790'),
(22, 'Finger Millet', 'bag', '90', 'Mombasa', '9000'),
(23, 'Finger Millet', 'bag', '90', 'malindi', '8700'),
(24, 'Finger Millet', 'bag', '90', 'Mombasa', '6800'),
(25, 'Finger Millet', 'bag', '90', 'Nairobi', '7200'),
(26, 'Finger Millet', 'bag', '90', 'Nakuru', '7400'),
(27, 'Dolichos(njahi)', 'bag', '90', 'Nairobi', '9980'),
(28, 'Dolichos(njahi)', 'bag', '90', 'kisumu', '11500'),
(29, 'Dolichos(njahi)', 'bag', '90', 'malindi', '9100'),
(30, 'Dolichos(njahi)', 'bag', '90', 'Mombasa', '10550'),
(31, 'Dolichos(njahi)', 'bag', '90', 'Eldoret', '7400'),
(32, 'Dolichos(njahi)', 'bag', '90', 'Nakuru', '9800'),
(33, 'Dry Maize', 'bag', '90', 'Nairobi', '3020'),
(34, 'Dry Maize', 'bag', '90', 'malindi', '3000'),
(35, 'Dry Maize', 'bag', '90', 'Mombasa', '3500'),
(36, 'Dry Maize', 'bag', '90', 'Nakuru', '2750'),
(37, 'Dry Maize', 'bag', '90', 'Eldoret', '3490'),
(38, 'Beans Mwitemia', 'bag', '90', 'malindi', '7000'),
(39, 'Beans Mwitemia', 'bag', '90', 'Mombasa', '5300'),
(40, 'Beans Mwitemia', 'bag', '90', 'kisumu', '5600'),
(41, 'Beans Mwitemia', 'bag', '90', 'Nakuru', '2250'),
(42, 'Beans Mwitemia', 'bag', '90', 'Eldoret', '2300'),
(43, 'Beans Canadian', 'bag', '90', 'Nairobi', '7590'),
(44, 'Beans Canadian', 'bag', '90', 'malindi', '8800'),
(45, 'Beans Canadian', 'bag', '90', 'Mombasa', '8800'),
(46, 'Beans Canadian', 'bag', '90', 'Eldoret', '7890'),
(47, 'Beans Canadian', 'bag', '90', 'kisumu', '7580'),
(48, 'Sorghum', 'bag', '90', 'Nairobi', '4260'),
(49, 'Sorghum', 'bag', '90', 'malindi', '4300'),
(50, 'Sorghum', 'bag', '90', 'Mombasa', '4000'),
(51, 'Sorghum', 'bag', '90', 'Eldoret', '4000'),
(52, 'Sorghum', 'bag', '90', 'kisumu', '4350'),
(53, 'Sorghum', 'bag', '90', 'Nakuru', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1528712178),
('m130524_201442_init', 1528712191);

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `Unit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `extrainformation` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`id`, `product`, `quantity`, `Unit`, `due_date`, `extrainformation`, `Name`, `email`, `phone`, `date`) VALUES
(1, 'Beans', '900', 'kilograms', '12-12-2018', 'i need high quality  beans 900 kilograms \r\nbefore 12-12-2018', 'nyachomo omollo fred', 'nyachomoffred@gmail.com', '0700228592', '2018-08-17 12:33:07'),
(2, 'maize', '90', 'kilograms', '16/09/2018', 'good quality meals to be suplied to the \r\nmaseno primary school before 16/09/2018\r\n', 'Maseno primary school', 'masenoprimary@yahoo.com', '0767900001', '2018-08-17 12:33:07'),
(3, 'oranges', '400', 'pieces', '29-09-2018', 'i need high quality oranges before \r\nat chakula hotel before 29-09-2018\r\n', 'chakula hotel', 'chakulahotel@gmail.com', '0789334678', '2018-08-17 12:33:07'),
(4, 'pawpaw', '100', 'pieces', '18-08-2018', 'i need high quality pawpaw before 18-08-2018', 'steve biko mhuli', 'steve@mail.com', '0956344200', '2018-08-17 12:33:07'),
(5, 'mangoes', '500', 'pieces', '18-08-2018', 'high quality mangoes\r\nbefore 18-08-2018', 'Byron wandei', 'wandei@yahoo.com', '0776000089', '2018-08-17 12:33:07'),
(6, 'Beans Canadian', '70', 'Kilogram', '28-08-2018', 'i need same Canadian maize\r\nas soon as posible', 'nyachomo fred', 'cj@gmail.com', '0775342251', '2018-08-17 12:33:07'),
(7, 'Cassava', '31', 'Pieces', '24-28-2018', 'Good cassava is seriouly needed \r\nplease hurry up and provide us\r\n with the produce', 'benie   benie', 'benie@gmail.com', '0700145621', '2018-08-17 12:33:07'),
(8, 'dry maize', '100', 'Pieces', '12-12-2018', 'good maize to be suplied to chavakali \r\nprimary school', 'benie   benie', 'benie@gmail.com', '0700145621', '2018-08-17 13:06:56'),
(9, 'Sorghum', '200', 'Kilogram', '12-12-2018', 'please sypply this product\r\n because it is needede urgently', 'benie   benie', 'benie@gmail.com', '0700145621', '2018-08-17 13:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) DEFAULT NULL,
  `product` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `extrainformation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `location_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `product_id`, `quantity`, `unit_id`, `price`, `location_id`, `date`, `description`, `user_id`, `foto`) VALUES
(1, 3, '21', 1, '100', 1, '0000-00-00', 'very good', 2, 'chilli.jpg'),
(2, 2, '120', 3, '150', 3, '0000-00-00', 'green cabages at afordable prize', 1, 'tomatoes.jpg'),
(4, 5, '1234', 3, '25', 5, '0000-00-00', 'good sugarcane that is simply the sweetes', 1, 'green gram.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`) VALUES
(2, 'cabbage'),
(3, 'carrots'),
(4, 'kales'),
(5, 'sugarcane'),
(6, 'Rice'),
(7, 'Garlic'),
(8, 'Green Maize'),
(10, 'Finger millete'),
(11, 'Sorghum'),
(12, 'Wheat'),
(13, 'Beans Canadiam'),
(14, 'Beans roscoco'),
(15, 'Mwezi moja'),
(16, 'Green gram'),
(17, 'Cowpeas'),
(18, 'fresh peas'),
(19, 'Groundnuts'),
(20, 'Red irish potatoes'),
(21, 'White irish potatoes'),
(22, 'Cabages'),
(23, 'Cooking Bananas'),
(24, 'Ripe Bananas'),
(25, 'Carots'),
(26, 'Tomatoes'),
(27, 'Onions dry'),
(28, 'Spring onions'),
(29, 'Chilies'),
(30, 'Cucumber'),
(31, 'Capsicum'),
(32, 'Brinjals'),
(33, 'Letuce'),
(34, 'Pasion fruit'),
(35, 'Oranges'),
(36, 'Lemon'),
(37, 'Mangoes local'),
(38, 'Mangoes apple'),
(39, 'Pineapples'),
(40, 'pawpaw'),
(41, 'Avacado'),
(42, 'Kales'),
(43, 'Eggs(local)'),
(44, 'Eggs(Grade)'),
(45, 'watermellon'),
(46, 'Arrow Root'),
(47, 'Corriander'),
(48, 'French beans'),
(49, 'Eggs(Grade)'),
(50, 'Avacado');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `name`) VALUES
(1, 'kg'),
(2, 'bunch'),
(3, 'pieces');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `old` varchar(100) NOT NULL,
  `new` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `phonenumber`, `email`, `pass`, `old`, `new`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'nyachomo', 'fred', 'fredy', '11221111', '1111111', '2k-osVlwGcxAPzU8M9uyNuESi0KeXYaZ_1531375187', '0700228592', 'nyachomofred@gmail.com', '', '', '', NULL, 10, 12345, 1531375188),
(2, 'matiangi', 'matiangi', 'omollo', '_zwMNvHZmbn-dhPeMh3ppTxrbZ4peme-', '$2y$13$2YhHxpkjgGqkWLwKAhsiUOWCfNQ37O5jRZw2LHPs6LQTyArx7vRlO', '', '079945673', 'omolo@gmail.com', '', '', '', NULL, 10, 1528795914, 1528795914),
(3, 'omollo', 'kenny', 'ben', '9wTf9u8w5ZDtDo9Ozl9C5eadiUGZH5qo', '$2y$13$Fd1AuJW0wAkVPoy3c0B5oejQ.sFV5.GgQun/xw/whB9IORrl0mGWi', NULL, '89055637', 'matiangi@gmail.com', '', '', '', NULL, 10, 1530365252, 1530365252),
(4, '', '', 'kevin', 'Ziq-qA8ShCKDA1hrSQ71snEzwRTLtMhc', '$2y$13$ggl/pDHIibC4JIpYCuVSjOVCUtHJ1sLTRLwyPI7DUNUqvxsDNUEx.', NULL, '', 'kevinomondi@yahoo.com', '', '', '', NULL, 10, 1530715174, 1530715174),
(5, '', '', 'richard', 'yjD0Qhguup0YbgCTglBOLk8jEW9rDnAP', '$2y$13$begYnBT35djIr9X9Swagu.R5VzG.7MifZGYl0qMiHo0i/ld8GSOLW', NULL, '', 'richard@gmail.com', '', '', '', NULL, 10, 1530716698, 1530716698),
(6, '', '', '0700228592', 'VlTiu9K5IprdFGdYDpXYjXImmmu8sdcp', '$2y$13$pNvZ7HHq05P81LYSRZliq.Ft3JyQKlfmBm27rq644Rku4IUFyciWO', NULL, '', 'thomas@gmail.com', '', '', '', NULL, 10, 1530717269, 1530717269),
(7, '', '', 'badi', 'WL8me-eTGtnsI4Dk5BA15pVPnxkHkSrF', '$2y$13$T4sZXJ0N320400DEJ.snceOsBb2v21BfbByTJRtiFntbJ9WEIx/dC', NULL, '', 'a@gmail.com', '', '', '', NULL, 10, 1530776076, 1530776076),
(8, 'bolo', '', 'gggy', 'mFQuNLXjjYeLTHqipVSba45-8xPZMwhl', '$2y$13$GTMWmZS.hUD..xPUS5OkZeCojoqJMMuKOwV6XZ7a8jO8VPl/gMlYi', NULL, '', 'bolo@yahoo.com', '', '', '', NULL, 10, 1530776517, 1530776517),
(9, 'sdedfr', 'sdefrgcv', 'aswer', 'QkJC_pWMiJSAXEj4cxIQJjEpipptXIke', '$2y$13$k4ScI9.N4D2RIYn1bIuE.ux4cZ/Z9qmal7/caonsheDrbupwEqiLG', NULL, '12', 'z@gmail.com', '', '', '', NULL, 10, 1530777856, 1530777856),
(10, 'were', 'were', 'thomas', '3SqyRwLMsoX9LMrfrzLoQ1_6k7cuoME2', '$2y$13$jCRcgVsgXhAbneuqtYmW3.GAHxW8XLbrbHAshkCetE0lINNO6EmD6', 'OzqPWaSYMMCXl98aFLq5MNdmybzXzxmk_1531374848', '70', 'nen@gmail.com', '', '', '', NULL, 10, 1530780447, 1531374848),
(11, 'wqetyqwewq', '32e223tftry32', 'thomas1', 'hACF_aSnEoxoLPUObcoVx-6gxHQwC9rq', '$2y$13$Nv11RT3sKR01KcQIhhvzwejt56NRsOPU/zSbC6pjxdE.l9Ho2bOZG', NULL, '67', 'b@gmail.com', '', '', '', NULL, 10, 1530782718, 1530782718),
(12, 'tom', 'ngethia', 'tom', '5c-omflls9BQky00GlGaKM9ekL7h4ZVK', '$2y$13$8XZyUVSExx/QYDrVIoR.wOqZ3cFzAqAYUbfhQHh9PCkGqFphjq2aK', NULL, '0723672411', 'tom@gmail.com', '', '', '', NULL, 10, 1531025836, 1531025836),
(13, 'simon', 'wagura', 'sam123', '69gRhEO_dZwSMv31t4T1hf5IbvTPQkgF', '$2y$13$54T5GSEvvWsoFC1tqZjmN.jzU4aTL1tjLS1EsrqnJkDc1Zez6skoi', NULL, '0712143658', 'simowagura9@GMAIL.COM', '', '', '', NULL, 10, 1533884329, 1533884329),
(14, 'felix', 'oketch', 'felix', 's7Dilu2ww-GvJxHg4cla-mllIZztTXgZ', '$2y$13$UX.pQDv9WPbuUKbjogRRROohVJoJEI.cwKBbnqqiKg/KxxWNwA/Je', NULL, '0700445689', 'felix@gmail.com', '', '', '', '20', 10, 1533894649, 1533894649),
(15, 'benie', 'benie', 'benie', '-aeNvsu-xqLbIO91qC3i1ktHkO8ahtwO', '$2y$13$fjnOrXWAefisDILaUUE6Pe769H/DnQ4k6ZMwPmfiTaOahvFqbvt4K', NULL, '0700145621', 'benie@gmail.com', '', '', '', NULL, 10, 1534428173, 1534428173),
(16, 'O\'Brien', 'makwata', 'obrien', 'FDeVdM2ukFqDviRRiph7RNoi7v-jXxc_', '$2y$13$D4A3/Y7oh6bQEErQEf5YMuJq6EDkqDEmqeOg9.c12uueggmbHKyka', NULL, '0720002001', 'obrien@gmail.com', '', '', '', NULL, 10, 1534766495, 1534766495),
(17, 'kevo', 'otis', 'kefa', 'JMymW6i8KLTll3KkdsDU9MI4P4p_QEmx', '$2y$13$nDeIfNiLJQ/pb5mBEkBCKOjSK.n6t7/VO9ddWMpPUDhEEQ5NCIaEK', NULL, '0705911456', 'kfaotis@gmail.com', '', '', '', NULL, 10, 1535017999, 1535017999),
(18, 'omondi', 'omondi', 'omondi', 'yVbJhKZzDCKaxOD-oy1mW-euO3MJYwiF', '$2y$13$DG7PSv9VP7fQN/Elo2BWL.Fvah2d4Y/z.jl5NB7IK9UoKWjvXG2.K', NULL, '7867566000', 'o@gmail.com', '', '', '', NULL, 10, 1535032883, 1535032883),
(19, 'ting', 'ting', 'ting', 'EUx5G7Dm_kaIohUCLX-JjZkZJMNuONpv', '$2y$13$/MlCzjHzwC8JtQ1F6dmSw.F0vMo9o/JdNyIB8KY.0GUs75jcrfxEq', NULL, '905675885', 'ting12@gmail.com', '', '', '', NULL, 10, 1535033649, 1535033649),
(20, 'jj', 'jj', 'ten1234', 'mBuCqnNsOR3tE6yKyjXThWAPuctA1rYw', '$2y$13$tVJ/NB5pndx3R4zx.6H30uMy94Q46CjKhtr8NczqpkeAepw9cQyMq', NULL, '34567889', 'sw@yahoo.com', '', '', '', NULL, 10, 1535034249, 1535034249),
(21, 'karanja', 'karanja', 'karanja', 'AuXeenTYS_h7KSM7qwnnMMpVuVLVyAMZ', '$2y$13$H3lVGitP5iSGCP5cfdnU7utQTKvp8d15/J2NYenfmoNUUyM9FYTJu', NULL, '0745789123', 'karanja@yahoo.com', '', '', '', NULL, 10, 1535690819, 1535690819);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailyprices`
--
ALTER TABLE `dailyprices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `marketinfo`
--
ALTER TABLE `marketinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace`
--
ALTER TABLE `marketplace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketprice`
--
ALTER TABLE `marketprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD KEY `product` (`product`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dailyprices`
--
ALTER TABLE `dailyprices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marketinfo`
--
ALTER TABLE `marketinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `marketplace`
--
ALTER TABLE `marketplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `marketprice`
--
ALTER TABLE `marketprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dailyprices`
--
ALTER TABLE `dailyprices`
  ADD CONSTRAINT `dailyprices_ibfk_1` FOREIGN KEY (`product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `dailyprices_ibfk_2` FOREIGN KEY (`location`) REFERENCES `location` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`),
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `post_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
