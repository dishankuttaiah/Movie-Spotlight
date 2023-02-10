

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `request` (
  `RequestId` int(20) NOT NULL,
  `RequestUser` varchar(50) NOT NULL,
  `RequestTitle` varchar(100) NOT NULL,
  `RequestMessage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `request` (`RequestId`, `RequestUser`, `RequestTitle`, `RequestMessage`) VALUES
(2, 'codersgenius', 'Movie Name', 'I want this movie');



CREATE TABLE `userdata` (
  `UserId` int(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `userdata` (`UserId`, `Username`, `Pass`, `Fullname`, `Email`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@moviesinfo.cf', 'admin'),
(22, 'codersgenius', 'coders', 'Genius Coders', 'codersgenius@gmail.com', 'user');


-
ALTER TABLE `request`
  ADD PRIMARY KEY (`RequestId`);


ALTER TABLE `userdata`
  ADD PRIMARY KEY (`UserId`);


ALTER TABLE `request`
  MODIFY `RequestId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `userdata`
  MODIFY `UserId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

