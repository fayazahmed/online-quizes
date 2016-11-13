-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 07:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc825onlinelabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `fill_in_the_blanks`
--

CREATE TABLE `fill_in_the_blanks` (
  `blanksid` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fill_in_the_blanks`
--

INSERT INTO `fill_in_the_blanks` (`blanksid`, `question`, `answer`, `description`) VALUES
(1, 'A(n)____ is a network device that can forward packets across computer networks.', 'ROUTER', ''),
(2, 'A(n) ____ encrypts all data that is transmitted between the remote device and the network.', 'VPN', ''),
(3, '____ is a computer or an application program that intercepts a user request from the internal secure network and then processes that request on behalf of the user.', 'PROXY SERVER', ''),
(4, 'A(n) ____________________ is a record of events that occur.', 'LOG', ''),
(5, 'The ____ is a database, organized as a hierarchy or tree, of the name of each site on the Internet and its corresponding IP number.', 'DNS', ''),
(6, 'TCP port ____ is the FTP control port used for passing FTP commands.', '21', ''),
(7, '____ is a pay-per-use computing model in which customers pay only for the computing resources they need.', 'CLOUD COMPUTING', ''),
(8, 'A(n) _______ algorithm transforms plain text to cipher text.', 'ENCRYPTION', ''),
(9, 'Information assurance as a field has grown from the practice of information security which in turn grew out of practices and procedures of ________.', 'COMPUTER SECURITY', ''),
(10, 'Information assurance is closely related to ________ and the terms are sometimes used interchangeably.', 'INFORMATION SECURITY', '');

-- --------------------------------------------------------

--
-- Table structure for table `match_images`
--

CREATE TABLE `match_images` (
  `matchid` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `match_images`
--

INSERT INTO `match_images` (`matchid`, `question`, `answer`, `description`) VALUES
(1, 'Pillar of Information Assurance', 'img_quiz\\password.png', ''),
(2, 'Risk of not implying with Information Assurance', 'img_quiz\\ddos.png', ''),
(3, 'Method of Authentication ', 'img_quiz\\ids.png', ''),
(4, 'What is I in the CIA traid?', 'img_quiz\\vpn.png', ''),
(5, 'Verify User Identity', 'img_quiz\\aes.png', ''),
(6, 'Controls traffic flow between networks', 'img_quiz\\process.png', ''),
(7, 'Malicious Computer Program', 'img_quiz\\sso.png', ''),
(8, 'Denial of Services', 'img_quiz\\ips.png', ''),
(9, 'Distributed Denial of Services', 'img_quiz\\authenticate.png', ''),
(10, 'Intrusion Detection System', 'img_quiz\\virus.png', ''),
(11, 'Intrusion Prevention System', 'img_quiz\\loss_of_data.png', ''),
(12, 'Authentication, Authorization & Accounting', 'img_quiz\\ssl.png', ''),
(13, 'Virtual Private Network', 'img_quiz\\mac.png', ''),
(14, 'Discretionary Access Control', 'img_quiz\\dos.png', ''),
(15, 'Mandatory Access Control', 'img_quiz\\cia.png', ''),
(16, 'Role/Rule based Access Control', 'img_quiz\\aaa.png', ''),
(17, 'Confidentiality, Integrity, Availability', 'img_quiz\\dac.png', ''),
(18, 'Secure Sockets Layer', 'img_quiz\\firewall.png', ''),
(19, 'Single Sign-on', 'img_quiz\\rbac.png', ''),
(20, 'Advanced Encryption Standard', 'img_quiz\\integrity.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `match_the_following`
--

CREATE TABLE `match_the_following` (
  `matchid` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `images` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `match_the_following`
--

INSERT INTO `match_the_following` (`matchid`, `question`, `answer`, `description`, `choice1`, `choice2`, `images`) VALUES
(1, 'Pillar of Information Assurance ', 'Process', '', 'Password', 'AES', ''),
(2, 'Risk of not implying with Information Assurance', 'Loss of Data', '', 'DDOS', 'SSO', ''),
(3, 'Method of Authentication ', 'Password', '', 'IDS', 'SSL', ''),
(4, 'What is “I” in the CIA traid?', 'Integrity', '', 'VPN', 'CIA', ''),
(5, 'Verify User Identity', 'Authenticate', '', 'AES', 'RBAC', ''),
(6, 'Controls traffic flow between networks', 'Firewall', '', 'Process', 'MAC', ''),
(7, 'Malicious Computer Program', 'Virus', '', 'SSO', 'DAC', ''),
(8, 'Denial of Services', 'DOS', '', 'IPS', 'VPN', ''),
(9, 'Distributed Denial of Services', 'DDOS', '', 'Authenticate', 'AAA', ''),
(10, 'Intrusion Detection System', 'IDS', '', 'Virus', 'IPS', ''),
(11, 'Intrusion Prevention System', 'IPS', '', 'Loss of Data', 'IDS', ''),
(12, 'Authentication, Authorization & Accounting', 'AAA', '', 'SSL', 'DDOS', ''),
(13, 'Virtual Private Network', 'VPN', '', 'MAC', 'DOS', ''),
(14, 'Discretionary Access Control', 'DAC', '', 'DOS', 'Virus', ''),
(15, 'Mandatory Access Control', 'MAC', '', 'CIA', 'Firewall', ''),
(16, 'Role/Rule based Access Control', 'RBAC', '', 'AAA', 'Authenticate', ''),
(17, 'Confidentiality, Integrity, Availability', 'CIA', '', 'DAC', 'Integrity', ''),
(18, 'Secure Sockets Layer', 'SSL', '', 'Firewall', 'Password', ''),
(19, 'Single Sign-on', 'SSO', '', 'RBAC', 'Loss of Data', ''),
(20, 'Advanced Encryption Standard', 'AES', '', 'Integrity', 'Process', '');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choice`
--

CREATE TABLE `multiple_choice` (
  `multiplechoiceid` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `multiple_choice`
--

INSERT INTO `multiple_choice` (`multiplechoiceid`, `question`, `choice1`, `choice2`, `choice3`, `answer`, `description`) VALUES
(1, 'The term "Host" means?', 'A machine infected with virus', 'A person who facilitates a party', 'A multitude or large number of computers', 'A computer connected to the internet', 'Viruses usually feed on the host computers which are connected to the internet. This helps them travel faster and infect other computers as well.'),
(2, 'In asymmetric key cryptography, the private key is kept by', 'All the connected devices to the network', 'Receiver', 'Sender and receiver', 'Sender', 'In cryptography, a private key is a variable that is used with an algorithm to encrypt and decrypt code.'),
(3, 'What does ‘C’ stand for in the “CIA triad”?', 'Conference', 'Confiscate', 'Confinement', 'Confidentiality', 'Not disclosing any information to others who do not have authorization for that information.'),
(4, 'What is a type of authentication?', 'Credit Card', 'Visiting Card', 'Debit Card', 'Smart Card', 'A card with only the required authentications for an individual.'),
(5, 'Which one is a type of virus in Data Security?', 'Insect', 'Reptile', 'Mammal', 'Worm', 'A computer worm is a standalone malware computer program that replicates itself in order to spread to other computers.'),
(6, 'In the right setting a thief will steal your information by simply watching what you type.', 'Snagging', 'Spying', 'Social engineering', 'Shoulder surfing', 'The practice of spying on the user of an ATM, computer, or other electronic device in order to obtain their personal access information.'),
(7, 'Hackers often gain entry to a network be pretending to be at a legitimate computer.', 'Spoofing', 'Forging', 'ID Theft', 'IP Spoofing', 'It is a hijacking technique in which a cracker masquerades as a trusted host to conceal his identity, spoof a Web site, hijack browsers, or gain access to a network.'),
(8, 'A hacker contacts you my phone or email and attempts to acquire your password.', 'Spoofing', 'Phishing', 'Bugging', 'Spamming', 'Sending the same message indiscriminately to a large numbers of recipients on the Internet.'),
(9, 'Which of the following will not protect you from spam?', 'Spam Blockers', 'Email Rules', 'Filters', 'Popup Blocker', 'It only blocks unwanted pop ups on sites you visit. '),
(10, 'Which is a type of offline redundancy?', 'Cough Site', 'Nausea Site', 'Fever Site', 'Cold Site', 'A cold site is a business location that is used for backup in the event of a disruptive operational disaster at the normal business site.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fill_in_the_blanks`
--
ALTER TABLE `fill_in_the_blanks`
  ADD PRIMARY KEY (`blanksid`);

--
-- Indexes for table `match_images`
--
ALTER TABLE `match_images`
  ADD PRIMARY KEY (`matchid`);

--
-- Indexes for table `match_the_following`
--
ALTER TABLE `match_the_following`
  ADD PRIMARY KEY (`matchid`);

--
-- Indexes for table `multiple_choice`
--
ALTER TABLE `multiple_choice`
  ADD PRIMARY KEY (`multiplechoiceid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiple_choice`
--
ALTER TABLE `multiple_choice`
  MODIFY `multiplechoiceid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
