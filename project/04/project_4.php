<!DOCTYPE html>
<html>

   <head>
      <title>database</title>
   </head>

   <body>
      <pre>
                -- phpMyAdmin SQL Dump
                -- version 4.7.7
                -- https://www.phpmyadmin.net/
                --
                -- Host: localhost:3306
                -- Generation Time: Aug 28, 2018 at 01:34 AM
                -- Server version: 5.6.39-83.1
                -- PHP Version: 5.6.30

                SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
                SET AUTOCOMMIT = 0;
                START TRANSACTION;
                SET time_zone = "+00:00";


                /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
                /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
                /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
                /*!40101 SET NAMES utf8mb4 */;

                --
                -- Database: `sbkacbmy_subscribers`
                --

                -- --------------------------------------------------------

                --
                -- Table structure for table `subscribers`
                --

                CREATE TABLE `subscribers` (
                  `id` int(3) NOT NULL,
                  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
                  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
                ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

                --
                -- Indexes for dumped tables
                --

                --
                -- Indexes for table `subscribers`
                --
                ALTER TABLE `subscribers`
                  ADD PRIMARY KEY (`id`);

                --
                -- AUTO_INCREMENT for dumped tables
                --

                --
                -- AUTO_INCREMENT for table `subscribers`
                --
                ALTER TABLE `subscribers`
                  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
                COMMIT;

                /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
                /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
                /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

      </pre>
   </body>

</html>