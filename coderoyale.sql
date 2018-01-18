-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2018 at 08:26 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coderoyale`
--

-- --------------------------------------------------------

--
-- Table structure for table `glogin_users`
--

CREATE TABLE `glogin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `glogin_users`
--

INSERT INTO `glogin_users` (`id`, `email`, `name`, `photo`, `registered`) VALUES
(1, 'pranjal.jn97@gmail.com', 'pranjal jain', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '2016-12-23 21:02:48'),
(2, 'jainpranjal15@stu.upes.ac.in', 'Pranjal Jain', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '2016-12-23 21:04:37'),
(3, 'cseccvt2015b3@gmail.com', 'Cse Ccvt2015', 'https://lh4.googleusercontent.com/-RYYNuSaATRY/AAAAAAAAAAI/AAAAAAAAAS0/QCeGjevcbt0/photo.jpg', '2016-12-24 06:19:59'),
(4, 'riyaagrahari121@gmail.com', 'riya agrahari', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '2017-01-04 13:25:20'),
(5, 'ufvbjnkm', 'wdfghjk', 'sdfghj', '2017-01-05 17:41:39');

--
-- Triggers `glogin_users`
--
DELIMITER $$
CREATE TRIGGER `aftersignup` AFTER INSERT ON `glogin_users` FOR EACH ROW INSERT INTO users
      (user_id, email) 
  VALUES
      ('', NEW.email)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE `Questions` (
  `qid` int(11) NOT NULL,
  `Problem` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Questions`
--

INSERT INTO `Questions` (`qid`, `Problem`, `name`) VALUES
(1, 'Misha has a coupon with which she can do free shopping up to rs 2500/- only if the coupon code consists of 2 distinct letters alternatively. Misha tells you her coupon code, tell her if she is eligible for the offer or not.\r\nExample: coupon code: ababab output: eligible, coupon code : abcab output : ineligible.\r\n', 'Selection Statements'),
(2, 'Write a program to concatenate given integers and display the result. The number of integers which are to be concatenated are to be specified by the user. e.g. if two numbers entered by user are 55 & 66 then output should be 5566.', 'Concatenation'),
(3, 'Write a program which takes an integer and prints it in words.\r\nSample Input:\r\n557\r\nSample Output:\r\nFive hundred fifty seven\r\n', 'Switch Case'),
(4, 'You are given a string with k characters. Your task is to display and calculate the number of unique words (which when read from both the directions result in the same word) which can be formed by arbitrarily permuting the characters in the above string.\r\nSample Input:\r\nabcab\r\nSample Output\r\nThere are 2 strings possible : bacab abcba \r\n', 'Strings'),
(5, 'You are given a number.Use a function named superfunction() to output the sum of first n and last n digits of the number.\r\nSample Input:\r\n56655(the given number)\r\n2(value of n)\r\nSample Output:\r\n5+6+5+5=21\r\n', 'Functions'),
(6, 'You are given a binary tree, convert it into a singly linked list using post-order traversal.', 'Tree Traversal'),
(7, 'From a given n digit number, extract the digits from the odd places and find their sum. For example, 12345 is the digit, then output should be 1+3+5 = 9.', 'Loops'),
(8, 'You are given a linked list containing number. Write a program to arrange the numbers in such a way such that even numbers come first and odd numbers come after them in a sorted manner.\r\nSample Input:\r\n1 3 2 5 4 6\r\nSample Output:\r\n2 4 6 1 3 5\r\n', 'Sorting in Trees'),
(9, 'Write a program to check whether a given string when gets divided from middle results into two equal substrings or not. Example: gaga, xyzxy follow the property while abaabb does not.', 'String Comparison'),
(10, 'You are given a string with k distinct characters. Your task is \r\na) to reverse a substring from pth character to qth character (without using inbuilt functions) and display the string.\r\nSample Input:\r\nCupboard               (the string with distinct characters)\r\nb r                            (The pth and qth character)\r\nSample Output\r\nCupraobd\r\n', 'String Reversal'),
(22, 'Write a program which accepts date in the format dd/mm/yyyy and then a date 50 days after that.\r\nSample Input:\r\n01/03/2017\r\nSample Output:\r\n19/04/2017\r\n', 'Structures'),
(33, 'You are given a binary search tree, delete all the even numbers and then display the elements in tree form.', 'Binary Search'),
(44, 'You are given an array of integers S. If for every two integers in the array, there exists a third integer which is equal to the product of the two in the array, print yes else print no.\r\nSample Input\r\n1 2 3 6(Array)\r\nSample Output\r\nYes\r\n', 'Arrays'),
(55, 'You are given two numbers p and q. Write a program to calculate the sum of qth powers of all the numbers co prime with p which are < p.\r\nSample Input:\r\n4 3 (4 is value of p and 3 is value of q)\r\nSample output:\r\nNumbers co prime with 4 and less than 4 are 1 and 3, so sum = 13 +33 = 28 \r\n', 'If-Else'),
(66, 'Sita is entering information of students which contains name and roll number dynamically in her database. Suddenly, she doubts that she may have entered duplicate data and wants to delete the duplicate data present. But before deleting duplicate data she wants to see all the data she has entered and then delete the duplicates. Help her in doing so!', 'Linked List'),
(77, 'You are given a chess board having P x P cells,you need to place P spades on the board such that no spade attack on any other spade.', 'Matrices'),
(88, 'Akshay is running a program to calculate the factorial of a number. Now he wants find the factorial of ASCII value of different alphabets using the same function name. Help him do so!', 'Function Overloading'),
(99, 'Pritha has to keep record of the number of people enrolling for her event. However, she somehow forgets to enter the serial number of the people while entering the data. Design a program that will overlook her mistake and will keep a count of the number of people getting enrolled. (Hint: count the number of objects made).', 'Static Variables\r\n'),
(110, 'You have to accept the values from user and store it in a binary search tree and then output the sorted result. Note that user can input any type of value. Data type may be integer, float, character, double.', 'Generic Function');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `userid` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET hp8 NOT NULL,
  `password` varchar(20) CHARACTER SET hp8 NOT NULL,
  `email` varchar(50) CHARACTER SET hp8 NOT NULL,
  `branch` varchar(25) CHARACTER SET hp8 NOT NULL,
  `year` int(11) NOT NULL,
  `college` varchar(40) CHARACTER SET hp8 NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userid`, `name`, `password`, `email`, `branch`, `year`, `college`, `phone`) VALUES
(1, 'aaa', '123456', 'aaaa@gmail.com', 'cct', 2016, 'upes', '1234567890'),
(2, 'Pranjal Jain', '1234567', 'pranjal.jn97@gmail.com', 'ccvt', 2, 'UPES', '7410852963'),
(3, 'RIYA AGRAHARI', '123456', 'riyaagrahari121@gmail.com', 'ccvt', 2016, 'upes', '7783920880'),
(5, 'dfghj', 'ghjk', 'ghjkl', '5', 2, 'vbnm,.', '5'),
(6, 'test', 'test123', 'priyansh@gmail.com', 'ccvt', 2, 'upes', '8959527485'),
(7, 'test', '741852963', 'pj@gmail.com', 'ccvt', 2, 'uio', '8529637415'),
(8, 'abcdef', '7410852963', 'abc@gmail.com', 'ccvt', 1, 'yuio', '8529637415'),
(9, 'Aditya Pudipeddi', 'nevertry', 'adityaaxelblaze@gmail.com', 'ccvt', 2, 'upes', '9087566431');

-- --------------------------------------------------------

--
-- Table structure for table `Submissions`
--

CREATE TABLE `Submissions` (
  `qid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slink` varchar(50) NOT NULL,
  `language` enum('C','C++','JAVA','PYTHON') NOT NULL,
  `answer` longtext NOT NULL,
  `Time_used` int(11) DEFAULT NULL,
  `Memory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Submissions`
--

INSERT INTO `Submissions` (`qid`, `user_id`, `slink`, `language`, `answer`, `Time_used`, `Memory`) VALUES
(1, 1, 'abc.com', 'C++', '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    printf(\"Hello World!\\n\");\r\n    return 0;\r\n}', 10, 50),
(3, 1, 'https://code.hackerearth.com/617807j', 'C', '#include<stdio.h>\r\n#include<time.h>\r\nint binary(int arr[],int key,int end)\r\n{\r\nint start=0,mid,f=0;\r\nwhile(start<=end)\r\n{\r\nmid=(start+end)/2;\r\nif(arr[mid]==key)\r\n return mid;\r\nelse\r\n	if(arr[mid]>key)\r\n		end=mid-1;\r\n		else\r\n			start=mid+1;\r\n}\r\nreturn -1;\r\n}\r\nint main()\r\n{\r\n	clock_t t1,t2;\r\n	float duration;\r\n	const int size=1000000;\r\n	int arr[size];\r\n	int key;\r\n	printf(\"\nWe are searching element at the index 9999 using binary search in the array of size 1000000 \n\");\r\n	for(int i=0;i<size;i++)\r\n	arr[i]=i;\r\n	key=arr[9999];\r\n	t1=clock();\r\n	int index=binary(arr,key,size-1);\r\n	t2=clock();\r\n	duration=(float)((t2-t1)/CLOCKS_PER_SEC);	\r\n	if(index==-1)\r\n		printf(\"\nElement %d is not found in time %f\",key,duration);\r\n	else\r\n		printf(\"\nElement %d is found at index %d in time %f\",key,index,duration);\r\nreturn 0;\r\n}', 0, 64),
(3, 5, 'dwv', 'C', 'ddf', 33, 33),
(3, 8, 'https://code.hackerearth.com/9c0b92Q', 'C', ' #include<stdio.h>\n int main(){\n     int a;\n     scanf(\"%d\",&a);\n     printf(\"%d\",a);\n     \n }\n	\n	\n    \n	', 0, 64),
(5, 4, 'nnnn', 'C', 'ddd', 22, 2),
(6, 1, 'bnm', 'C', 'hjk', 5, 8),
(10, 1, 'http://nmcdfr.com', 'PYTHON', 'yfgt7hjimki87ftcgvhbjnugyvbjnkm', 50, 80),
(11, 8, 'https://code.hackerearth.com/956660E', 'C', ' #include<stdio.h>\r\n int main(){\r\n     int a;\r\n     scanf(\"%d\",&a);\r\n     printf(\"%d\",a);\r\n     \r\n }\r\n	\r\n	\r\n    \r\n	\r\n	\r\n	\r\n    \r\n	', 0, 64);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `random_que` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `random_que`) VALUES
(1, 'pranjal.jn97@gmail.com', '2,4,1,3,9,6,10'),
(5, 'ufvbjnkm', 'fgh'),
(6, 'priyansh@gmail.com', '6,3,2,7,9,5,4,8,10,1'),
(8, 'abc@gmail.com', '10,3,11,9,16,7,15,8,13,5'),
(9, 'adityaaxelblaze@gmail.com', '4,99,9,88,6,66,5,7,2,1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `glogin_users`
--
ALTER TABLE `glogin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Questions`
--
ALTER TABLE `Questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `Submissions`
--
ALTER TABLE `Submissions`
  ADD PRIMARY KEY (`qid`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `glogin_users`
--
ALTER TABLE `glogin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Questions`
--
ALTER TABLE `Questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Submissions`
--
ALTER TABLE `Submissions`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`qid`) REFERENCES `Questions` (`qid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
