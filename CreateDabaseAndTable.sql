-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2023 at 02:32 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `film_database`
--

CREATE DATABASE IF NOT EXISTS `showtime_database` ;
USE `showtime_database`;

CREATE TABLE IF NOT EXISTS `comming_soon_films` (
  `f_id` int NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `f_hour` varchar(20) NOT NULL,
  `f_img` varchar(50) NOT NULL,
  `f_trialer` varchar(500) DEFAULT NULL
);


--
-- Dumping data for table `comming_soon`
--

INSERT INTO `comming_soon_films` (`f_id`, `f_name`, `f_hour`, `f_img`, `f_trialer`) VALUES
(01, 'The Equalizer', '2h 00m', 'img/film4.jpg', 'https://www.youtube.com/watch?v=19ikl8vy4zs&pp=ygUNVGhlIEVxdWFsaXplcg%3D%3D'),
(02, 'Spider Man', '2h 20m', 'img/film5.jpg', 'https://www.youtube.com/watch?v=cqGjhVJWtEg&pp=ygUic3BpZGVyIG1hbiBhY3Jvc3MgdGhlIHNwaWRlciB2ZXJzZQ%3D%3D');

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `film_name` varchar(100) NOT NULL,
  `film_id` int NOT NULL,
  `cinema` int NOT NULL,
  `show_date` varchar(80) NOT NULL,
  `show_time` time NOT NULL,
  `film_img` varchar(500) NOT NULL,
  `film_hour` varchar(20) NOT NULL,
  `trialer` varchar(1000) NOT NULL,
  `sh_img` varchar(500) NOT NULL,
  `sh_desc` varchar(5000) NOT NULL,
  `sh_imgname` varchar(80) DEFAULT NULL,
  primary key(film_id)
);

--
-- Dumping data for table `film`
--

INSERT INTO `movies` (`film_name`, `film_id`, `cinema`, `show_date`, `show_time`, `film_img`, `film_hour`, `trialer`, `sh_img`, `sh_desc`, `sh_imgname`) VALUES
('The Exorcist Believer', 01, 1, '20250305', '02:00:00', 'movies/The Exorcist Believer.jpg', '2h 30m', 'https://youtu.be/PIxpPMyGcpU?si=6utqT9QBlyW_oqzu', 'slideshow_images/The Exorcist Believer.jpg', 'Since the death of his pregnant wife in a Haitian earthquake 12 years ago, Victor Fielding has raised their daughter, Angela on his own. But when Angela and her friend Katherine disappear in the woods, only to return three days later with no memory of what happened to them, it unleashes a chain of events that will force Victor to confront the nadir of evil and, in his terror and desperation, seek out the only person alive who has..', 'The Exorcist Believer'),
('The Creator', 02, 2, '20250305', '09:00:00', 'movies/The Creator.jpg', '2h 30m', 'https://youtu.be/ex3C1-5Dhb8?si=dcrXU_PoH7-0Sfro',  'slideshow_images/The Creator.jpg', 'Amid a future war between the human race and the forces of artificial intelligence, Joshua, a hardened ex-special forces agent grieving the disappearance of his wife, is recruited to hunt down and kill the Creator, the elusive architect of advanced AI who has developed a mysterious weapon with the power to end the war—and mankind itself.', 'The Creator'),
('PAW Patrol', 03, 1, '20250306', '11:00:00', 'movies/PAW Patrol.jpg', '1h 45m', 'https://youtu.be/UDgjJ9XzgHk?si=ceR1yLHcCP4Hiop2', 'slideshow_images/PAW Patrol.jpg', 'A magical meteor crash-lands in Adventure City, gives the PAW Patrol pups superpowers, and transforms them into The Mighty Pups. When the PAW Patrol s archrival Humdinger breaks out of jail and teams up with a mad scientist to steal the powers for themselves, the Mighty Pups must save Adventure City and stop the supervillains before it s too late ', 'PAW Patrol The Mighty Movie'),
('Jawan (Hindi)', 04, 2, '20250306', '11:00:00', 'movies/Jawan (Hindi).jpg', '1h 55m', 'https://youtu.be/COv52Qyctws?si=oXBQFvg7xexZ3pAg', 'slideshow_images/Jawan (Hindi).jpg', 'A man is driven by a personal vendetta to rectify the wrongs in society, while keeping a promise made years ago. He comes up against a monstrous outlaw with no fear, who s caused extreme suffering to many.', 'Jawan (Hindi)'),

('Saw X', 05, 1, '20250306', '02:00:00', 'movies/saw_X.jpg', '1h 55m', 'https://youtu.be/t3PzUo4P21c?si=0ZEerwteEnxjYz6I', 'slideshow_images/saw_X.jpeg', 'Between the events of Saw and Saw II, a sick and desperate John Kramer travels to Mexico for a risky and experimental medical procedure in hopes of a miracle cure for his cancer only to discover the entire operation is a scam to defraud the most vulnerable. Armed with a newfound purpose, the infamous serial killer returns to his work, turning the tables on the con artists in his signature visceral way through devious, deranged and ingenious traps.', 'Saw X'),
('TAYLOR SWIFT', 06, 1, '20250306', '03:30:00', 'movies/TAYLOR SWIFT.png', '2h 55m', 'https://youtu.be/KudedLV0tP0?si=-m0twFiRoEF9ksZG', 'slideshow_images/TAYLOR SWIFT.jpg', 'The cultural phenomenon continues on the big screen! Immerse yourself in this once-in-a-lifetime concert film experience with a breathtaking, cinematic view of the history-making tour.', 'TAYLOR SWIFT'),
('Iraivan', 07, 2, '20250306', '04:00:00', 'movies/Iraivan.png', '1h 55m', 'https://youtu.be/-qX93tgvung?si=NKeS0-rDAvjLRDYl', 'slideshow_images/Iraivan.jpg', 'The Chennai city lives in fear of a psycho killer. Confidence in the police wanes until Arjun and Andrew join. Arjun, with a dark past, unveils truths about the killer. They finally arrest the killer but he escapes and chaos ensues. Arjun loses Andrew and his love, descending into darkness. The story follows Arjun s journey to vanquish the killers.', 'Iraivan'),
('Chithha', 08, 1, '20250306', '06:00:00', 'movies/Chithha.png', '2h 30m', 'https://youtu.be/T0C5I90Y-sA?si=GRsan2g69ZzWYM-E', 'slideshow_images/Chithha.jpg', 'Chithha tells the tale of a school-going kid and his uncle, who share a bond stronger than blood. The uncle, a loving guardian after his brother s death, cherishes his niece as a precious gem. His unwavering devotion shields her from even the slightest reprimand from her teacher.', 'Chithha'),

('LEO', 09, 2, '20250308', '01:00:00', 'movies/LEO.jpg', '2h 30m', 'https://youtu.be/Po3jStA673E?si=arDihXPu0Or8cdjs', 'slideshow_images/LEO.jpg', 'A mild-mannered café owner becomes a local hero through an act of violence, which sets off repercussions with connections to an old life he left behind, shaking his newly constructed life to its very core.', 'LEO'),
('The Marvels', 10, 1, '20250308', '10:30:00', 'movies/The Marvels.jpg', '2h 40m', 'https://youtu.be/wS_qbDztgVY?si=E8p8J31T5xyWx9U2', 'slideshow_images/The Marvels.jpg', 'Carol Danvers, aka Captain Marvel, has reclaimed her identity from the tyrannical Kree and taken revenge on the Supreme Intelligence. But unintended consequences see Carol shouldering the burden of a destabilized universe. Captain Marvel, Ms. Marvel & Captain Monica Rambeau team up and learn to work in concert to save the universe.', 'The Marvels'),
('Killers of the Flower Moon', 11, 2, '20250309', '03:00:00', 'movies/Killers of the Flower Moon.jpg', '2h 30m', 'https://youtu.be/T0C5I90Y-sA?si=GRsan2g69ZzWYM-E', 'slideshow_images/Killers of the Flower Moon.jpg', 'Rated R | When oil is discovered in 1920s Oklahoma under Osage Nation land, the Osage people are murdered one by one—until the FBI steps in to unravel the mystery.', 'Killers of the Flower Moon');



--
-- Table structure for table `userdetails`
--

CREATE TABLE `user` (
  `film_id` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  foreign key (film_id) references movies(film_id)
);

--
-- Table structure for table `contact_form_data`
--

CREATE TABLE `ideas` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL
);

--
-- Table structure for table `seatstatus`
--

CREATE TABLE `seat` (
  `film_id` int(11) NOT NULL,
  `seetNo` varchar(5) NOT NULL,
  `status` varchar(15) NOT NULL,
  primary key(film_id,seetNo),
  foreign key (film_id) references movies(film_id)
);

--
-- Dumping data for table `seatstatus`
--

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(01, 'A1', 'Available'),
(01, 'A2', 'Unavailabl'),
(01, 'A3', 'Available'),
(01, 'A4', 'Available'),
(01, 'A5', 'Available'),
(01, 'A6', 'Unavailabl'),
(01, 'A7', 'Available'),
(01, 'A8', 'Available'),
(01, 'A9', 'Available'),
(01, 'A10', 'Available'),
(01, 'B1', 'Available'),
(01, 'B2', 'Available'),
(01, 'B3', 'Available'),
(01, 'B4', 'Available'),
(01, 'B5', 'Available'),
(01, 'B6', 'Available'),
(01, 'B7', 'Available'),
(01, 'B8', 'Available'),
(01, 'B9', 'Available'),
(01, 'B10', 'Available'),
(01, 'C1', 'Available'),
(01, 'C2', 'Available'),
(01, 'C3', 'Available'),
(01, 'C4', 'Available'),
(01, 'C5', 'Available'),
(01, 'C6', 'Available'),
(01, 'C7', 'Available'),
(01, 'C8', 'Available'),
(01, 'C9', 'Available'),
(01, 'C10', 'Available'),
(01, 'D1', 'Available'),
(01, 'D2', 'Available'),
(01, 'D3', 'Available'),
(01, 'D4', 'Available'),
(01, 'D5', 'Available'),
(01, 'D6', 'Available'),
(01, 'D7', 'Available'),
(01, 'D8', 'Available'),
(01, 'D9', 'Available'),
(01, 'D10', 'Available'),
(01, 'E1', 'Available'),
(01, 'E2', 'Available'),
(01, 'E3', 'Available'),
(01, 'E4', 'Available'),
(01, 'E5', 'Available'),
(01, 'E6', 'Available'),
(01, 'E7', 'Available'),
(01, 'E8', 'Available'),
(01, 'E9', 'Available'),
(01, 'E10', 'Available'),
(01, 'F1', 'Available'),
(01, 'F2', 'Available'),
(01, 'F3', 'Available'),
(01, 'F4', 'Available'),
(01, 'F5', 'Available'),
(01, 'F6', 'Available'),
(01, 'F7', 'Available'),
(01, 'F8', 'Available'),
(01, 'F9', 'Available'),
(01, 'F10', 'Available'),
(01, 'G1', 'Available'),
(01, 'G2', 'Available'),
(01, 'G3', 'Available'),
(01, 'G4', 'Available'),
(01, 'G5', 'Available'),
(01, 'G6', 'Available'),
(01, 'G7', 'Available'),
(01, 'G8', 'Available'),
(01, 'G9', 'Available'),
(01, 'G10', 'Available'),
(01, 'H1', 'Available'),
(01, 'H2', 'Available'),
(01, 'H3', 'Available'),
(01, 'H4', 'Available'),
(01, 'H5', 'Available'),
(01, 'H6', 'Available'),
(01, 'H7', 'Available'),
(01, 'H8', 'Available'),
(01, 'H9', 'Available'),
(01, 'H10', 'Available'),
(01, 'I1', 'Available'),
(01, 'I2', 'Available'),
(01, 'I3', 'Available'),
(01, 'I4', 'Available'),
(01, 'I5', 'Available'),
(01, 'I6', 'Available'),
(01, 'I7', 'Available'),
(01, 'I8', 'Available'),
(01, 'I9', 'Available'),
(01, 'I10', 'Available'),
(01, 'J1', 'Available'),
(01, 'J2', 'Available'),
(01, 'J3', 'Available'),
(01, 'J4', 'Available'),
(01, 'J5', 'Available'),
(01, 'J6', 'Available'),
(01, 'J7', 'Available'),
(01, 'J8', 'Available'),
(01, 'J9', 'Available'),
(01, 'J10', 'Available');

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(02, 'A1', 'Available'),
(02, 'A2', 'Unavailabl'),
(02, 'A3', 'Available'),
(02, 'A4', 'Available'),
(02, 'A5', 'Available'),
(02, 'A6', 'Unavailabl'),
(02, 'A7', 'Available'),
(02, 'A8', 'Available'),
(02, 'A9', 'Available'),
(02, 'A10', 'Available'),
(02, 'B1', 'Available'),
(02, 'B2', 'Available'),
(02, 'B3', 'Available'),
(02, 'B4', 'Available'),
(02, 'B5', 'Available'),
(02, 'B6', 'Available'),
(02, 'B7', 'Available'),
(02, 'B8', 'Available'),
(02, 'B9', 'Available'),
(02, 'B10', 'Available'),
(02, 'C1', 'Available'),
(02, 'C2', 'Available'),
(02, 'C3', 'Available'),
(02, 'C4', 'Available'),
(02, 'C5', 'Available'),
(02, 'C6', 'Available'),
(02, 'C7', 'Available'),
(02, 'C8', 'Available'),
(02, 'C9', 'Available'),
(02, 'C10', 'Available'),
(02, 'D1', 'Available'),
(02, 'D2', 'Available'),
(02, 'D3', 'Available'),
(02, 'D4', 'Available'),
(02, 'D5', 'Available'),
(02, 'D6', 'Available'),
(02, 'D7', 'Available'),
(02, 'D8', 'Available'),
(02, 'D9', 'Available'),
(02, 'D10', 'Available'),
(02, 'E1', 'Available'),
(02, 'E2', 'Available'),
(02, 'E3', 'Available'),
(02, 'E4', 'Available'),
(02, 'E5', 'Available'),
(02, 'E6', 'Available'),
(02, 'E7', 'Available'),
(02, 'E8', 'Available'),
(02, 'E9', 'Available'),
(02, 'E10', 'Available'),
(02, 'F1', 'Available'),
(02, 'F2', 'Available'),
(02, 'F3', 'Available'),
(02, 'F4', 'Available'),
(02, 'F5', 'Available'),
(02, 'F6', 'Available'),
(02, 'F7', 'Available'),
(02, 'F8', 'Available'),
(02, 'F9', 'Available'),
(02, 'F10', 'Available'),
(02, 'G1', 'Available'),
(02, 'G2', 'Available'),
(02, 'G3', 'Available'),
(02, 'G4', 'Available'),
(02, 'G5', 'Available'),
(02, 'G6', 'Available'),
(02, 'G7', 'Available'),
(02, 'G8', 'Available'),
(02, 'G9', 'Available'),
(02, 'G10', 'Available'),
(02, 'H1', 'Available'),
(02, 'H2', 'Available'),
(02, 'H3', 'Available'),
(02, 'H4', 'Available'),
(02, 'H5', 'Available'),
(02, 'H6', 'Available'),
(02, 'H7', 'Available'),
(02, 'H8', 'Available'),
(02, 'H9', 'Available'),
(02, 'H10', 'Available'),
(02, 'I1', 'Available'),
(02, 'I2', 'Available'),
(02, 'I3', 'Available'),
(02, 'I4', 'Available'),
(02, 'I5', 'Available'),
(02, 'I6', 'Available'),
(02, 'I7', 'Available'),
(02, 'I8', 'Available'),
(02, 'I9', 'Available'),
(02, 'I10', 'Available'),
(02, 'J1', 'Available'),
(02, 'J2', 'Available'),
(02, 'J3', 'Available'),
(02, 'J4', 'Available'),
(02, 'J5', 'Available'),
(02, 'J6', 'Available'),
(02, 'J7', 'Available'),
(02, 'J8', 'Available'),
(02, 'J9', 'Available'),
(02, 'J10', 'Available');

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(03, 'A1', 'Available'),
(03, 'A2', 'Unavailabl'),
(03, 'A3', 'Available'),
(03, 'A4', 'Available'),
(03, 'A5', 'Available'),
(03, 'A6', 'Unavailabl'),
(03, 'A7', 'Available'),
(03, 'A8', 'Available'),
(03, 'A9', 'Available'),
(03, 'A10', 'Available'),
(03, 'B1', 'Available'),
(03, 'B2', 'Available'),
(03, 'B3', 'Available'),
(03, 'B4', 'Available'),
(03, 'B5', 'Available'),
(03, 'B6', 'Available'),
(03, 'B7', 'Available'),
(03, 'B8', 'Available'),
(03, 'B9', 'Available'),
(03, 'B10', 'Available'),
(03, 'C1', 'Available'),
(03, 'C2', 'Available'),
(03, 'C3', 'Available'),
(03, 'C4', 'Available'),
(03, 'C5', 'Available'),
(03, 'C6', 'Available'),
(03, 'C7', 'Available'),
(03, 'C8', 'Available'),
(03, 'C9', 'Available'),
(03, 'C10', 'Available'),
(03, 'D1', 'Available'),
(03, 'D2', 'Available'),
(03, 'D3', 'Available'),
(03, 'D4', 'Available'),
(03, 'D5', 'Available'),
(03, 'D6', 'Available'),
(03, 'D7', 'Available'),
(03, 'D8', 'Available'),
(03, 'D9', 'Available'),
(03, 'D10', 'Available'),
(03, 'E1', 'Available'),
(03, 'E2', 'Available'),
(03, 'E3', 'Available'),
(03, 'E4', 'Available'),
(03, 'E5', 'Available'),
(03, 'E6', 'Available'),
(03, 'E7', 'Available'),
(03, 'E8', 'Available'),
(03, 'E9', 'Available'),
(03, 'E10', 'Available'),
(03, 'F1', 'Available'),
(03, 'F2', 'Available'),
(03, 'F3', 'Available'),
(03, 'F4', 'Available'),
(03, 'F5', 'Available'),
(03, 'F6', 'Available'),
(03, 'F7', 'Available'),
(03, 'F8', 'Available'),
(03, 'F9', 'Available'),
(03, 'F10', 'Available'),
(03, 'G1', 'Available'),
(03, 'G2', 'Available'),
(03, 'G3', 'Available'),
(03, 'G4', 'Available'),
(03, 'G5', 'Available'),
(03, 'G6', 'Available'),
(03, 'G7', 'Available'),
(03, 'G8', 'Available'),
(03, 'G9', 'Available'),
(03, 'G10', 'Available'),
(03, 'H1', 'Available'),
(03, 'H2', 'Available'),
(03, 'H3', 'Available'),
(03, 'H4', 'Available'),
(03, 'H5', 'Available'),
(03, 'H6', 'Available'),
(03, 'H7', 'Available'),
(03, 'H8', 'Available'),
(03, 'H9', 'Available'),
(03, 'H10', 'Available'),
(03, 'I1', 'Available'),
(03, 'I2', 'Available'),
(03, 'I3', 'Available'),
(03, 'I4', 'Available'),
(03, 'I5', 'Available'),
(03, 'I6', 'Available'),
(03, 'I7', 'Available'),
(03, 'I8', 'Available'),
(03, 'I9', 'Available'),
(03, 'I10', 'Available'),
(03, 'J1', 'Available'),
(03, 'J2', 'Available'),
(03, 'J3', 'Available'),
(03, 'J4', 'Available'),
(03, 'J5', 'Available'),
(03, 'J6', 'Available'),
(03, 'J7', 'Available'),
(03, 'J8', 'Available'),
(03, 'J9', 'Available'),
(03, 'J10', 'Available');


INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(04, 'A1', 'Available'),
(04, 'A2', 'Unavailabl'),
(04, 'A3', 'Available'),
(04, 'A4', 'Available'),
(04, 'A5', 'Available'),
(04, 'A6', 'Unavailabl'),
(04, 'A7', 'Available'),
(04, 'A8', 'Available'),
(04, 'A9', 'Available'),
(04, 'A10', 'Available'),
(04, 'B1', 'Available'),
(04, 'B2', 'Available'),
(04, 'B3', 'Available'),
(04, 'B4', 'Available'),
(04, 'B5', 'Available'),
(04, 'B6', 'Available'),
(04, 'B7', 'Available'),
(04, 'B8', 'Available'),
(04, 'B9', 'Available'),
(04, 'B10', 'Available'),
(04, 'C1', 'Available'),
(04, 'C2', 'Available'),
(04, 'C3', 'Available'),
(04, 'C4', 'Available'),
(04, 'C5', 'Available'),
(04, 'C6', 'Available'),
(04, 'C7', 'Available'),
(04, 'C8', 'Available'),
(04, 'C9', 'Available'),
(04, 'C10', 'Available'),
(04, 'D1', 'Available'),
(04, 'D2', 'Available'),
(04, 'D3', 'Available'),
(04, 'D4', 'Available'),
(04, 'D5', 'Available'),
(04, 'D6', 'Available'),
(04, 'D7', 'Available'),
(04, 'D8', 'Available'),
(04, 'D9', 'Available'),
(04, 'D10', 'Available'),
(04, 'E1', 'Available'),
(04, 'E2', 'Available'),
(04, 'E3', 'Available'),
(04, 'E4', 'Available'),
(04, 'E5', 'Available'),
(04, 'E6', 'Available'),
(04, 'E7', 'Available'),
(04, 'E8', 'Available'),
(04, 'E9', 'Available'),
(04, 'E10', 'Available'),
(04, 'F1', 'Available'),
(04, 'F2', 'Available'),
(04, 'F3', 'Available'),
(04, 'F4', 'Available'),
(04, 'F5', 'Available'),
(04, 'F6', 'Available'),
(04, 'F7', 'Available'),
(04, 'F8', 'Available'),
(04, 'F9', 'Available'),
(04, 'F10', 'Available'),
(04, 'G1', 'Available'),
(04, 'G2', 'Available'),
(04, 'G3', 'Available'),
(04, 'G4', 'Available'),
(04, 'G5', 'Available'),
(04, 'G6', 'Available'),
(04, 'G7', 'Available'),
(04, 'G8', 'Available'),
(04, 'G9', 'Available'),
(04, 'G10', 'Available'),
(04, 'H1', 'Available'),
(04, 'H2', 'Available'),
(04, 'H3', 'Available'),
(04, 'H4', 'Available'),
(04, 'H5', 'Available'),
(04, 'H6', 'Available'),
(04, 'H7', 'Available'),
(04, 'H8', 'Available'),
(04, 'H9', 'Available'),
(04, 'H10', 'Available'),
(04, 'I1', 'Available'),
(04, 'I2', 'Available'),
(04, 'I3', 'Available'),
(04, 'I4', 'Available'),
(04, 'I5', 'Available'),
(04, 'I6', 'Available'),
(04, 'I7', 'Available'),
(04, 'I8', 'Available'),
(04, 'I9', 'Available'),
(04, 'I10', 'Available'),
(04, 'J1', 'Available'),
(04, 'J2', 'Available'),
(04, 'J3', 'Available'),
(04, 'J4', 'Available'),
(04, 'J5', 'Available'),
(04, 'J6', 'Available'),
(04, 'J7', 'Available'),
(04, 'J8', 'Available'),
(04, 'J9', 'Available'),
(04, 'J10', 'Available');

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(05, 'A1', 'Available'),
(05, 'A2', 'Unavailabl'),
(05, 'A3', 'Available'),
(05, 'A4', 'Available'),
(05, 'A5', 'Available'),
(05, 'A6', 'Unavailabl'),
(05, 'A7', 'Available'),
(05, 'A8', 'Available'),
(05, 'A9', 'Available'),
(05, 'A10', 'Available'),
(05, 'B1', 'Available'),
(05, 'B2', 'Available'),
(05, 'B3', 'Available'),
(05, 'B4', 'Available'),
(05, 'B5', 'Available'),
(05, 'B6', 'Available'),
(05, 'B7', 'Available'),
(05, 'B8', 'Available'),
(05, 'B9', 'Available'),
(05, 'B10', 'Available'),
(05, 'C1', 'Available'),
(05, 'C2', 'Available'),
(05, 'C3', 'Available'),
(05, 'C4', 'Available'),
(05, 'C5', 'Available'),
(05, 'C6', 'Available'),
(05, 'C7', 'Available'),
(05, 'C8', 'Available'),
(05, 'C9', 'Available'),
(05, 'C10', 'Available'),
(05, 'D1', 'Available'),
(05, 'D2', 'Available'),
(05, 'D3', 'Available'),
(05, 'D4', 'Available'),
(05, 'D5', 'Available'),
(05, 'D6', 'Available'),
(05, 'D7', 'Available'),
(05, 'D8', 'Available'),
(05, 'D9', 'Available'),
(05, 'D10', 'Available'),
(05, 'E1', 'Available'),
(05, 'E2', 'Available'),
(05, 'E3', 'Available'),
(05, 'E4', 'Available'),
(05, 'E5', 'Available'),
(05, 'E6', 'Available'),
(05, 'E7', 'Available'),
(05, 'E8', 'Available'),
(05, 'E9', 'Available'),
(05, 'E10', 'Available'),
(05, 'F1', 'Available'),
(05, 'F2', 'Available'),
(05, 'F3', 'Available'),
(05, 'F4', 'Available'),
(05, 'F5', 'Available'),
(05, 'F6', 'Available'),
(05, 'F7', 'Available'),
(05, 'F8', 'Available'),
(05, 'F9', 'Available'),
(05, 'F10', 'Available'),
(05, 'G1', 'Available'),
(05, 'G2', 'Available'),
(05, 'G3', 'Available'),
(05, 'G4', 'Available'),
(05, 'G5', 'Available'),
(05, 'G6', 'Available'),
(05, 'G7', 'Available'),
(05, 'G8', 'Available'),
(05, 'G9', 'Available'),
(05, 'G10', 'Available'),
(05, 'H1', 'Available'),
(05, 'H2', 'Available'),
(05, 'H3', 'Available'),
(05, 'H4', 'Available'),
(05, 'H5', 'Available'),
(05, 'H6', 'Available'),
(05, 'H7', 'Available'),
(05, 'H8', 'Available'),
(05, 'H9', 'Available'),
(05, 'H10', 'Available'),
(05, 'I1', 'Available'),
(05, 'I2', 'Available'),
(05, 'I3', 'Available'),
(05, 'I4', 'Available'),
(05, 'I5', 'Available'),
(05, 'I6', 'Available'),
(05, 'I7', 'Available'),
(05, 'I8', 'Available'),
(05, 'I9', 'Available'),
(05, 'I10', 'Available'),
(05, 'J1', 'Available'),
(05, 'J2', 'Available'),
(05, 'J3', 'Available'),
(05, 'J4', 'Available'),
(05, 'J5', 'Available'),
(05, 'J6', 'Available'),
(05, 'J7', 'Available'),
(05, 'J8', 'Available'),
(05, 'J9', 'Available'),
(05, 'J10', 'Available');


INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(06, 'A1', 'Available'),
(06, 'A2', 'Unavailabl'),
(06, 'A3', 'Available'),
(06, 'A4', 'Available'),
(06, 'A5', 'Available'),
(06, 'A6', 'Unavailabl'),
(06, 'A7', 'Available'),
(06, 'A8', 'Available'),
(06, 'A9', 'Available'),
(06, 'A10', 'Available'),
(06, 'B1', 'Available'),
(06, 'B2', 'Available'),
(06, 'B3', 'Available'),
(06, 'B4', 'Available'),
(06, 'B5', 'Available'),
(06, 'B6', 'Available'),
(06, 'B7', 'Available'),
(06, 'B8', 'Available'),
(06, 'B9', 'Available'),
(06, 'B10', 'Available'),
(06, 'C1', 'Available'),
(06, 'C2', 'Available'),
(06, 'C3', 'Available'),
(06, 'C4', 'Available'),
(06, 'C5', 'Available'),
(06, 'C6', 'Available'),
(06, 'C7', 'Available'),
(06, 'C8', 'Available'),
(06, 'C9', 'Available'),
(06, 'C10', 'Available'),
(06, 'D1', 'Available'),
(06, 'D2', 'Available'),
(06, 'D3', 'Available'),
(06, 'D4', 'Available'),
(06, 'D5', 'Available'),
(06, 'D6', 'Available'),
(06, 'D7', 'Available'),
(06, 'D8', 'Available'),
(06, 'D9', 'Available'),
(06, 'D10', 'Available'),
(06, 'E1', 'Available'),
(06, 'E2', 'Available'),
(06, 'E3', 'Available'),
(06, 'E4', 'Available'),
(06, 'E5', 'Available'),
(06, 'E6', 'Available'),
(06, 'E7', 'Available'),
(06, 'E8', 'Available'),
(06, 'E9', 'Available'),
(06, 'E10', 'Available'),
(06, 'F1', 'Available'),
(06, 'F2', 'Available'),
(06, 'F3', 'Available'),
(06, 'F4', 'Available'),
(06, 'F5', 'Available'),
(06, 'F6', 'Available'),
(06, 'F7', 'Available'),
(06, 'F8', 'Available'),
(06, 'F9', 'Available'),
(06, 'F10', 'Available'),
(06, 'G1', 'Available'),
(06, 'G2', 'Available'),
(06, 'G3', 'Available'),
(06, 'G4', 'Available'),
(06, 'G5', 'Available'),
(06, 'G6', 'Available'),
(06, 'G7', 'Available'),
(06, 'G8', 'Available'),
(06, 'G9', 'Available'),
(06, 'G10', 'Available'),
(06, 'H1', 'Available'),
(06, 'H2', 'Available'),
(06, 'H3', 'Available'),
(06, 'H4', 'Available'),
(06, 'H5', 'Available'),
(06, 'H6', 'Available'),
(06, 'H7', 'Available'),
(06, 'H8', 'Available'),
(06, 'H9', 'Available'),
(06, 'H10', 'Available'),
(06, 'I1', 'Available'),
(06, 'I2', 'Available'),
(06, 'I3', 'Available'),
(06, 'I4', 'Available'),
(06, 'I5', 'Available'),
(06, 'I6', 'Available'),
(06, 'I7', 'Available'),
(06, 'I8', 'Available'),
(06, 'I9', 'Available'),
(06, 'I10', 'Available'),
(06, 'J1', 'Available'),
(06, 'J2', 'Available'),
(06, 'J3', 'Available'),
(06, 'J4', 'Available'),
(06, 'J5', 'Available'),
(06, 'J6', 'Available'),
(06, 'J7', 'Available'),
(06, 'J8', 'Available'),
(06, 'J9', 'Available'),
(06, 'J10', 'Available');

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(07, 'A1', 'Available'),
(07, 'A2', 'Unavailabl'),
(07, 'A3', 'Available'),
(07, 'A4', 'Available'),
(07, 'A5', 'Available'),
(07, 'A6', 'Unavailabl'),
(07, 'A7', 'Available'),
(07, 'A8', 'Available'),
(07, 'A9', 'Available'),
(07, 'A10', 'Available'),
(07, 'B1', 'Available'),
(07, 'B2', 'Available'),
(07, 'B3', 'Available'),
(07, 'B4', 'Available'),
(07, 'B5', 'Available'),
(07, 'B6', 'Available'),
(07, 'B7', 'Available'),
(07, 'B8', 'Available'),
(07, 'B9', 'Available'),
(07, 'B10', 'Available'),
(07, 'C1', 'Available'),
(07, 'C2', 'Available'),
(07, 'C3', 'Available'),
(07, 'C4', 'Available'),
(07, 'C5', 'Available'),
(07, 'C6', 'Available'),
(07, 'C7', 'Available'),
(07, 'C8', 'Available'),
(07, 'C9', 'Available'),
(07, 'C10', 'Available'),
(07, 'D1', 'Available'),
(07, 'D2', 'Available'),
(07, 'D3', 'Available'),
(07, 'D4', 'Available'),
(07, 'D5', 'Available'),
(07, 'D6', 'Available'),
(07, 'D7', 'Available'),
(07, 'D8', 'Available'),
(07, 'D9', 'Available'),
(07, 'D10', 'Available'),
(07, 'E1', 'Available'),
(07, 'E2', 'Available'),
(07, 'E3', 'Available'),
(07, 'E4', 'Available'),
(07, 'E5', 'Available'),
(07, 'E6', 'Available'),
(07, 'E7', 'Available'),
(07, 'E8', 'Available'),
(07, 'E9', 'Available'),
(07, 'E10', 'Available'),
(07, 'F1', 'Available'),
(07, 'F2', 'Available'),
(07, 'F3', 'Available'),
(07, 'F4', 'Available'),
(07, 'F5', 'Available'),
(07, 'F6', 'Available'),
(07, 'F7', 'Available'),
(07, 'F8', 'Available'),
(07, 'F9', 'Available'),
(07, 'F10', 'Available'),
(07, 'G1', 'Available'),
(07, 'G2', 'Available'),
(07, 'G3', 'Available'),
(07, 'G4', 'Available'),
(07, 'G5', 'Available'),
(07, 'G6', 'Available'),
(07, 'G7', 'Available'),
(07, 'G8', 'Available'),
(07, 'G9', 'Available'),
(07, 'G10', 'Available'),
(07, 'H1', 'Available'),
(07, 'H2', 'Available'),
(07, 'H3', 'Available'),
(07, 'H4', 'Available'),
(07, 'H5', 'Available'),
(07, 'H6', 'Available'),
(07, 'H7', 'Available'),
(07, 'H8', 'Available'),
(07, 'H9', 'Available'),
(07, 'H10', 'Available'),
(07, 'I1', 'Available'),
(07, 'I2', 'Available'),
(07, 'I3', 'Available'),
(07, 'I4', 'Available'),
(07, 'I5', 'Available'),
(07, 'I6', 'Available'),
(07, 'I7', 'Available'),
(07, 'I8', 'Available'),
(07, 'I9', 'Available'),
(07, 'I10', 'Available'),
(07, 'J1', 'Available'),
(07, 'J2', 'Available'),
(07, 'J3', 'Available'),
(07, 'J4', 'Available'),
(07, 'J5', 'Available'),
(07, 'J6', 'Available'),
(07, 'J7', 'Available'),
(07, 'J8', 'Available'),
(07, 'J9', 'Available'),
(07, 'J10', 'Available');

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(08, 'A1', 'Available'),
(08, 'A2', 'Unavailabl'),
(08, 'A3', 'Available'),
(08, 'A4', 'Available'),
(08, 'A5', 'Available'),
(08, 'A6', 'Unavailabl'),
(08, 'A7', 'Available'),
(08, 'A8', 'Available'),
(08, 'A9', 'Available'),
(08, 'A10', 'Available'),
(08, 'B1', 'Available'),
(08, 'B2', 'Available'),
(08, 'B3', 'Available'),
(08, 'B4', 'Available'),
(08, 'B5', 'Available'),
(08, 'B6', 'Available'),
(08, 'B7', 'Available'),
(08, 'B8', 'Available'),
(08, 'B9', 'Available'),
(08, 'B10', 'Available'),
(08, 'C1', 'Available'),
(08, 'C2', 'Available'),
(08, 'C3', 'Available'),
(08, 'C4', 'Available'),
(08, 'C5', 'Available'),
(08, 'C6', 'Available'),
(08, 'C7', 'Available'),
(08, 'C8', 'Available'),
(08, 'C9', 'Available'),
(08, 'C10', 'Available'),
(08, 'D1', 'Available'),
(08, 'D2', 'Available'),
(08, 'D3', 'Available'),
(08, 'D4', 'Available'),
(08, 'D5', 'Available'),
(08, 'D6', 'Available'),
(08, 'D7', 'Available'),
(08, 'D8', 'Available'),
(08, 'D9', 'Available'),
(08, 'D10', 'Available'),
(08, 'E1', 'Available'),
(08, 'E2', 'Available'),
(08, 'E3', 'Available'),
(08, 'E4', 'Available'),
(08, 'E5', 'Available'),
(08, 'E6', 'Available'),
(08, 'E7', 'Available'),
(08, 'E8', 'Available'),
(08, 'E9', 'Available'),
(08, 'E10', 'Available'),
(08, 'F1', 'Available'),
(08, 'F2', 'Available'),
(08, 'F3', 'Available'),
(08, 'F4', 'Available'),
(08, 'F5', 'Available'),
(08, 'F6', 'Available'),
(08, 'F7', 'Available'),
(08, 'F8', 'Available'),
(08, 'F9', 'Available'),
(08, 'F10', 'Available'),
(08, 'G1', 'Available'),
(08, 'G2', 'Available'),
(08, 'G3', 'Available'),
(08, 'G4', 'Available'),
(08, 'G5', 'Available'),
(08, 'G6', 'Available'),
(08, 'G7', 'Available'),
(08, 'G8', 'Available'),
(08, 'G9', 'Available'),
(08, 'G10', 'Available'),
(08, 'H1', 'Available'),
(08, 'H2', 'Available'),
(08, 'H3', 'Available'),
(08, 'H4', 'Available'),
(08, 'H5', 'Available'),
(08, 'H6', 'Available'),
(08, 'H7', 'Available'),
(08, 'H8', 'Available'),
(08, 'H9', 'Available'),
(08, 'H10', 'Available'),
(08, 'I1', 'Available'),
(08, 'I2', 'Available'),
(08, 'I3', 'Available'),
(08, 'I4', 'Available'),
(08, 'I5', 'Available'),
(08, 'I6', 'Available'),
(08, 'I7', 'Available'),
(08, 'I8', 'Available'),
(08, 'I9', 'Available'),
(08, 'I10', 'Available'),
(08, 'J1', 'Available'),
(08, 'J2', 'Available'),
(08, 'J3', 'Available'),
(08, 'J4', 'Available'),
(08, 'J5', 'Available'),
(08, 'J6', 'Available'),
(08, 'J7', 'Available'),
(08, 'J8', 'Available'),
(08, 'J9', 'Available'),
(08, 'J10', 'Available');

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(09, 'A1', 'Available'),
(09, 'A2', 'Unavailabl'),
(09, 'A3', 'Available'),
(09, 'A4', 'Available'),
(09, 'A5', 'Available'),
(09, 'A6', 'Unavailabl'),
(09, 'A7', 'Available'),
(09, 'A8', 'Available'),
(09, 'A9', 'Available'),
(09, 'A10', 'Available'),
(09, 'B1', 'Available'),
(09, 'B2', 'Available'),
(09, 'B3', 'Available'),
(09, 'B4', 'Available'),
(09, 'B5', 'Available'),
(09, 'B6', 'Available'),
(09, 'B7', 'Available'),
(09, 'B8', 'Available'),
(09, 'B9', 'Available'),
(09, 'B10', 'Available'),
(09, 'C1', 'Available'),
(09, 'C2', 'Available'),
(09, 'C3', 'Available'),
(09, 'C4', 'Available'),
(09, 'C5', 'Available'),
(09, 'C6', 'Available'),
(09, 'C7', 'Available'),
(09, 'C8', 'Available'),
(09, 'C9', 'Available'),
(09, 'C10', 'Available'),
(09, 'D1', 'Available'),
(09, 'D2', 'Available'),
(09, 'D3', 'Available'),
(09, 'D4', 'Available'),
(09, 'D5', 'Available'),
(09, 'D6', 'Available'),
(09, 'D7', 'Available'),
(09, 'D8', 'Available'),
(09, 'D9', 'Available'),
(09, 'D10', 'Available'),
(09, 'E1', 'Available'),
(09, 'E2', 'Available'),
(09, 'E3', 'Available'),
(09, 'E4', 'Available'),
(09, 'E5', 'Available'),
(09, 'E6', 'Available'),
(09, 'E7', 'Available'),
(09, 'E8', 'Available'),
(09, 'E9', 'Available'),
(09, 'E10', 'Available'),
(09, 'F1', 'Available'),
(09, 'F2', 'Available'),
(09, 'F3', 'Available'),
(09, 'F4', 'Available'),
(09, 'F5', 'Available'),
(09, 'F6', 'Available'),
(09, 'F7', 'Available'),
(09, 'F8', 'Available'),
(09, 'F9', 'Available'),
(09, 'F10', 'Available'),
(09, 'G1', 'Available'),
(09, 'G2', 'Available'),
(09, 'G3', 'Available'),
(09, 'G4', 'Available'),
(09, 'G5', 'Available'),
(09, 'G6', 'Available'),
(09, 'G7', 'Available'),
(09, 'G8', 'Available'),
(09, 'G9', 'Available'),
(09, 'G10', 'Available'),
(09, 'H1', 'Available'),
(09, 'H2', 'Available'),
(09, 'H3', 'Available'),
(09, 'H4', 'Available'),
(09, 'H5', 'Available'),
(09, 'H6', 'Available'),
(09, 'H7', 'Available'),
(09, 'H8', 'Available'),
(09, 'H9', 'Available'),
(09, 'H10', 'Available'),
(09, 'I1', 'Available'),
(09, 'I2', 'Available'),
(09, 'I3', 'Available'),
(09, 'I4', 'Available'),
(09, 'I5', 'Available'),
(09, 'I6', 'Available'),
(09, 'I7', 'Available'),
(09, 'I8', 'Available'),
(09, 'I9', 'Available'),
(09, 'I10', 'Available'),
(09, 'J1', 'Available'),
(09, 'J2', 'Available'),
(09, 'J3', 'Available'),
(09, 'J4', 'Available'),
(09, 'J5', 'Available'),
(09, 'J6', 'Available'),
(09, 'J7', 'Available'),
(09, 'J8', 'Available'),
(09, 'J9', 'Available'),
(09, 'J10', 'Available');

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(10, 'A1', 'Available'),
(10, 'A2', 'Unavailabl'),
(10, 'A3', 'Available'),
(10, 'A4', 'Available'),
(10, 'A5', 'Available'),
(10, 'A6', 'Unavailabl'),
(10, 'A7', 'Available'),
(10, 'A8', 'Available'),
(10, 'A9', 'Available'),
(10, 'A10', 'Available'),
(10, 'B1', 'Available'),
(10, 'B2', 'Available'),
(10, 'B3', 'Available'),
(10, 'B4', 'Available'),
(10, 'B5', 'Available'),
(10, 'B6', 'Available'),
(10, 'B7', 'Available'),
(10, 'B8', 'Available'),
(10, 'B9', 'Available'),
(10, 'B10', 'Available'),
(10, 'C1', 'Available'),
(10, 'C2', 'Available'),
(10, 'C3', 'Available'),
(10, 'C4', 'Available'),
(10, 'C5', 'Available'),
(10, 'C6', 'Available'),
(10, 'C7', 'Available'),
(10, 'C8', 'Available'),
(10, 'C9', 'Available'),
(10, 'C10', 'Available'),
(10, 'D1', 'Available'),
(10, 'D2', 'Available'),
(10, 'D3', 'Available'),
(10, 'D4', 'Available'),
(10, 'D5', 'Available'),
(10, 'D6', 'Available'),
(10, 'D7', 'Available'),
(10, 'D8', 'Available'),
(10, 'D9', 'Available'),
(10, 'D10', 'Available'),
(10, 'E1', 'Available'),
(10, 'E2', 'Available'),
(10, 'E3', 'Available'),
(10, 'E4', 'Available'),
(10, 'E5', 'Available'),
(10, 'E6', 'Available'),
(10, 'E7', 'Available'),
(10, 'E8', 'Available'),
(10, 'E9', 'Available'),
(10, 'E10', 'Available'),
(10, 'F1', 'Available'),
(10, 'F2', 'Available'),
(10, 'F3', 'Available'),
(10, 'F4', 'Available'),
(10, 'F5', 'Available'),
(10, 'F6', 'Available'),
(10, 'F7', 'Available'),
(10, 'F8', 'Available'),
(10, 'F9', 'Available'),
(10, 'F10', 'Available'),
(10, 'G1', 'Available'),
(10, 'G2', 'Available'),
(10, 'G3', 'Available'),
(10, 'G4', 'Available'),
(10, 'G5', 'Available'),
(10, 'G6', 'Available'),
(10, 'G7', 'Available'),
(10, 'G8', 'Available'),
(10, 'G9', 'Available'),
(10, 'G10', 'Available'),
(10, 'H1', 'Available'),
(10, 'H2', 'Available'),
(10, 'H3', 'Available'),
(10, 'H4', 'Available'),
(10, 'H5', 'Available'),
(10, 'H6', 'Available'),
(10, 'H7', 'Available'),
(10, 'H8', 'Available'),
(10, 'H9', 'Available'),
(10, 'H10', 'Available'),
(10, 'I1', 'Available'),
(10, 'I2', 'Available'),
(10, 'I3', 'Available'),
(10, 'I4', 'Available'),
(10, 'I5', 'Available'),
(10, 'I6', 'Available'),
(10, 'I7', 'Available'),
(10, 'I8', 'Available'),
(10, 'I9', 'Available'),
(10, 'I10', 'Available'),
(10, 'J1', 'Available'),
(10, 'J2', 'Available'),
(10, 'J3', 'Available'),
(10, 'J4', 'Available'),
(10, 'J5', 'Available'),
(10, 'J6', 'Available'),
(10, 'J7', 'Available'),
(10, 'J8', 'Available'),
(10, 'J9', 'Available'),
(10, 'J10', 'Available');

INSERT INTO `seat` (`film_ID`, `seetNo`, `status`) VALUES
(11, 'A1', 'Available'),
(11, 'A2', 'Unavailabl'),
(11, 'A3', 'Available'),
(11, 'A4', 'Available'),
(11, 'A5', 'Available'),
(11, 'A6', 'Unavailabl'),
(11, 'A7', 'Available'),
(11, 'A8', 'Available'),
(11, 'A9', 'Available'),
(11, 'A10', 'Available'),
(11, 'B1', 'Available'),
(11, 'B2', 'Available'),
(11, 'B3', 'Available'),
(11, 'B4', 'Available'),
(11, 'B5', 'Available'),
(11, 'B6', 'Available'),
(11, 'B7', 'Available'),
(11, 'B8', 'Available'),
(11, 'B9', 'Available'),
(11, 'B10', 'Available'),
(11, 'C1', 'Available'),
(11, 'C2', 'Available'),
(11, 'C3', 'Available'),
(11, 'C4', 'Available'),
(11, 'C5', 'Available'),
(11, 'C6', 'Available'),
(11, 'C7', 'Available'),
(11, 'C8', 'Available'),
(11, 'C9', 'Available'),
(11, 'C10', 'Available'),
(11, 'D1', 'Available'),
(11, 'D2', 'Available'),
(11, 'D3', 'Available'),
(11, 'D4', 'Available'),
(11, 'D5', 'Available'),
(11, 'D6', 'Available'),
(11, 'D7', 'Available'),
(11, 'D8', 'Available'),
(11, 'D9', 'Available'),
(11, 'D10', 'Available'),
(11, 'E1', 'Available'),
(11, 'E2', 'Available'),
(11, 'E3', 'Available'),
(11, 'E4', 'Available'),
(11, 'E5', 'Available'),
(11, 'E6', 'Available'),
(11, 'E7', 'Available'),
(11, 'E8', 'Available'),
(11, 'E9', 'Available'),
(11, 'E10', 'Available'),
(11, 'F1', 'Available'),
(11, 'F2', 'Available'),
(11, 'F3', 'Available'),
(11, 'F4', 'Available'),
(11, 'F5', 'Available'),
(11, 'F6', 'Available'),
(11, 'F7', 'Available'),
(11, 'F8', 'Available'),
(11, 'F9', 'Available'),
(11, 'F10', 'Available'),
(11, 'G1', 'Available'),
(11, 'G2', 'Available'),
(11, 'G3', 'Available'),
(11, 'G4', 'Available'),
(11, 'G5', 'Available'),
(11, 'G6', 'Available'),
(11, 'G7', 'Available'),
(11, 'G8', 'Available'),
(11, 'G9', 'Available'),
(11, 'G10', 'Available'),
(11, 'H1', 'Available'),
(11, 'H2', 'Available'),
(11, 'H3', 'Available'),
(11, 'H4', 'Available'),
(11, 'H5', 'Available'),
(11, 'H6', 'Available'),
(11, 'H7', 'Available'),
(11, 'H8', 'Available'),
(11, 'H9', 'Available'),
(11, 'H10', 'Available'),
(11, 'I1', 'Available'),
(11, 'I2', 'Available'),
(11, 'I3', 'Available'),
(11, 'I4', 'Available'),
(11, 'I5', 'Available'),
(11, 'I6', 'Available'),
(11, 'I7', 'Available'),
(11, 'I8', 'Available'),
(11, 'I9', 'Available'),
(11, 'I10', 'Available'),
(11, 'J1', 'Available'),
(11, 'J2', 'Available'),
(11, 'J3', 'Available'),
(11, 'J4', 'Available'),
(11, 'J5', 'Available'),
(11, 'J6', 'Available'),
(11, 'J7', 'Available'),
(11, 'J8', 'Available'),
(11, 'J9', 'Available'),
(11, 'J10', 'Available');