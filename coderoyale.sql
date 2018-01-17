-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2017 at 03:45 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 5.6.29-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'iblings, Lin and Dan, lived peacefully, until the day a five-headed Dragon entered their village. There was chaos all around and the dragon was destructing everything it could see.\r\nA meeting of the villagers was called and it was decided that Lin and Dan would have to fight the Dragon. They decided to Sage Chanzin for help, and he asks them the number of teeth in each head of dragon. After strenuous efforts, Lin and Dan somehow manage to tell him about the same.\r\nThe idea that the Sage proposed was to kill the dragon, with the least number of teeth, and proceed in an increasing order by breaking its teeth only. Finally, with great difficulty, Lin and Dan complete the task and demonstrated their hard work to all the people in their village.\r\nDevice a code for the process they would have adopted.\r\n[Hint: 3 steps involved – Input, _____,___ Output]', 'sdfghjk'),
(2, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', ''),
(3, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', ''),
(4, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\nHow can this scenario be coded?', ''),
(5, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', 'fvbnm,./'),
(6, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', ''),
(7, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', ''),
(8, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', ''),
(9, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', ''),
(10, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', ''),
(11, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', 'wsdfghj'),
(12, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', 'cvbnm,.'),
(13, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', 'dfghjkl'),
(14, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', 'ghjkl'),
(15, 'nce upon a time, there was a couple with supernatural powers. They lived together happily, until the day, an evil devil entered their lives. They knew that they can’t find him single handed so they conjoined their powers and become one, and they defeat the devil together, but their power was lost as much as the power of devil. So, after their victory they decided to share their powers equally and lived happily thereafter.\r\nHow can this scenario be coded?', 'ujnghjkl'),
(16, 'fghjkl;', 'iujhbv vb');

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
(8, 'abcdef', '7410852963', 'abc@gmail.com', 'ccvt', 1, 'yuio', '8529637415');

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
(1, 1, 'abc.com', 'C++', '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    printf("Hello World!\\n");\r\n    return 0;\r\n}', 10, 50),
(3, 1, 'https://code.hackerearth.com/617807j', 'C', '#include<stdio.h>\r\n#include<time.h>\r\nint binary(int arr[],int key,int end)\r\n{\r\nint start=0,mid,f=0;\r\nwhile(start<=end)\r\n{\r\nmid=(start+end)/2;\r\nif(arr[mid]==key)\r\n return mid;\r\nelse\r\n	if(arr[mid]>key)\r\n		end=mid-1;\r\n		else\r\n			start=mid+1;\r\n}\r\nreturn -1;\r\n}\r\nint main()\r\n{\r\n	clock_t t1,t2;\r\n	float duration;\r\n	const int size=1000000;\r\n	int arr[size];\r\n	int key;\r\n	printf("\nWe are searching element at the index 9999 using binary search in the array of size 1000000 \n");\r\n	for(int i=0;i<size;i++)\r\n	arr[i]=i;\r\n	key=arr[9999];\r\n	t1=clock();\r\n	int index=binary(arr,key,size-1);\r\n	t2=clock();\r\n	duration=(float)((t2-t1)/CLOCKS_PER_SEC);	\r\n	if(index==-1)\r\n		printf("\nElement %d is not found in time %f",key,duration);\r\n	else\r\n		printf("\nElement %d is found at index %d in time %f",key,index,duration);\r\nreturn 0;\r\n}', 0, 64),
(3, 5, 'dwv', 'C', 'ddf', 33, 33),
(3, 8, 'https://code.hackerearth.com/9c0b92Q', 'C', ' #include<stdio.h>\n int main(){\n     int a;\n     scanf("%d",&a);\n     printf("%d",a);\n     \n }\n	\n	\n    \n	', 0, 64),
(5, 4, 'nnnn', 'C', 'ddd', 22, 2),
(6, 1, 'bnm', 'C', 'hjk', 5, 8),
(10, 1, 'http://nmcdfr.com', 'PYTHON', 'yfgt7hjimki87ftcgvhbjnugyvbjnkm', 50, 80),
(11, 8, 'https://code.hackerearth.com/956660E', 'C', ' #include<stdio.h>\r\n int main(){\r\n     int a;\r\n     scanf("%d",&a);\r\n     printf("%d",a);\r\n     \r\n }\r\n	\r\n	\r\n    \r\n	\r\n	\r\n	\r\n    \r\n	', 0, 64);

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
(8, 'abc@gmail.com', '10,3,11,9,16,7,15,8,13,5');

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
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Submissions`
--
ALTER TABLE `Submissions`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`qid`) REFERENCES `Questions` (`qid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
