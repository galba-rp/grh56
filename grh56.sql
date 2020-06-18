-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 07:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grh56`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactmessages`
--

CREATE TABLE `contactmessages` (
  `message_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mailsubject` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactmessages`
--

INSERT INTO `contactmessages` (`message_id`, `contact_name`, `surname`, `email`, `mailsubject`, `mail`, `date`) VALUES
(59, 'dsa', 'ddddddddddddd', 'sdd@dd.com', 'dffffdfsdsttrufjutgjh', 'fgjhufgjufg', '2020-06-15 21:13:03'),
(60, 'sqsqwd', 'awdrfsfas', 'sdd@dd.com', 'oiuojuhytrfgfd', 'hgfjjkhj', '2020-06-15 21:13:13'),
(61, 'arqwr', 'aqwrfaetr', 'sw@df.com', 'aswfera', 'asetfaegtfse', '2020-06-16 15:50:27'),
(62, 'Slavko', 'Csddd', 'ad@ddf.com', 'NEw', 'asfmasg;k<br />\r\nasgadg-sadsfas*asgas/', '2020-06-16 15:57:37'),
(63, 'Slavko', 'sddd', 'as@as.com', 'aswfera', 'qdqdASDFAS<br />\r\nSAEFASFES', '2020-06-16 15:58:13'),
(64, 'Slavko', 'adAD', 'ad@ddf.com', 'sfdsagd', 'dshghfgadsghfshs', '2020-06-16 15:58:35'),
(65, 'sfdsf', 'ASFF', 'ad@ddf.com', 'asdadsf', 'sagfasg', '2020-06-16 15:59:07'),
(66, 'arqwr', 'aqwrfaetr', 'ad@ddf.com', 'aswfera', 'adfasfagfsda', '2020-06-16 15:59:30'),
(67, 'arqwr', 'adADa', 'ad@ddf.com', 'adfafas', 'sfsgaghadgfs', '2020-06-16 15:59:45'),
(68, 'Slavko', 'sddd', 'sw@df.com', 'sfdsagd', 'sfasgfgdaghds', '2020-06-16 16:01:12'),
(69, 'Slavko', 'sddd', 'sw@df.com', 'test subject', 'test text', '2020-06-16 16:02:43'),
(70, 'sfdsf', 'sddd', 'sw@df.com', 'test subject', 'test text', '2020-06-16 16:05:08'),
(71, 'Slavko', 'sddd', 'sw@df.com', 'sfdsagd', 'sfsfafs', '2020-06-16 16:09:35'),
(72, 'Allo', 'Allo', 'dgas@gmail.com', 'alert(&#39;bonjour&#39;)', 'From : Allo Allo\r\ndgas@gmail.com\r\nalert(&#39;bonjour&#39;);  ', '2020-06-17 15:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `connect_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_path`, `connect_id`) VALUES
(1, 'app/public/images/general.jpg', 1),
(2, 'app/public/images/busEng.jpg', 3),
(3, 'app/public/images/horeca.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lessonoftheweek`
--

CREATE TABLE `lessonoftheweek` (
  `id` int(11) NOT NULL,
  `lod_title` varchar(255) NOT NULL,
  `lod_comment` text NOT NULL,
  `lod_file` varchar(255) NOT NULL,
  `lod_creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessonoftheweek`
--

INSERT INTO `lessonoftheweek` (`id`, `lod_title`, `lod_comment`, `lod_file`, `lod_creation_date`) VALUES
(1, 'first lesson allws', 'serfse', 'app/public/videos/Gogo Lessons Flashcards ABC English Vocabulary Lesson 1 - Yo.mp4', '0000-00-00'),
(2, 'Could or was new', 'second', 'app/public/videos/Could vs Was able to - English In A Minute - YouTube.mp4', '0000-00-00'),
(11, 'Talking on the phone in a British accent. Brilliant. (ENGLIS', 'Talking on the phone in a British accent. Brilliant. (ENGLIS', 'app/public/videos/Talking on the phone in a British accent. Brilliant. (ENGLIS.mp4', '0000-00-00'),
(43, 'very funny', 'funnry', 'app/public/videos/Funniest_English_Teacher_-_Must_Watch_-_YouTube.mp4', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `short` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `title`, `short`, `content`, `description`) VALUES
(1, 'Anglais général', 'Our general english lessons Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Vous souhaitez apprendre l’anglais et améliorer vos capacités en communication écrite et verbale?<br>Nous développerons vos compétences en mettant l’accent sur l’oral, la prononciation, la grammaire et l’écoute.'),
(3, 'Anglais professionnel', 'ontrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av.', 'ant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l\'éthique. Les premières lignes du Lorem Ipsum, \"Lorem ipsum dolor sit amet...\", proviennent de la sec', '    Le cours permettra d’améliorer vos compétences dans des domaines clés, du réseautage aux conversations téléphoniques, en passant par les ventes et le marketing.'),
(4, 'Anglais de l\'hôtellerie et de la restauration', 'Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d\'entre elles a été altérée par l\'addition', 'Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien d\'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d\'humour.', '    Travaillez-vous avec les touristes ou que vous étudiez le tourisme et l\'hospitalité? Apprenez à communiquer plus efficacement en anglais avec notre cours.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `short` varchar(255) NOT NULL,
  `testimonial` text NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `short`, `testimonial`, `author`) VALUES
(1, '...Gérant d’une entreprise de négoce, j’ai cherché à me remettre à niveau en anglais afin de diversifier mes approvisionnements sur l’Europe début 2019....\r\nson approche et son professionnalisme m’ont permis de reprendre ', '« Gérant d’une entreprise de négoce de viande et volaille depuis 2017, j’ai cherché à me remettre à niveau en anglais afin de diversifier mes approvisionnements sur l’Europe début 2019.\r\nLors de ma première rencontre avec Gaëlle, sa première approche fut de chercher à comprendre mon besoin : qu’est ce que je devais faire avec l’anglais ?\r\nMe faire comprendre certes, mais dans quelles conditions ? orales ou écrites ? au téléphone ou en face-à-face ? sur des mails ou des courriers officiels ? Pour voyager pour les affaires ou pour visiter ? Pour parler de la pluie et du beau temps ou pour parler produit…\r\nPour échanger avec qui ? des Européens non anglo-saxons ou des Anglo-Saxons (Britannique, Irlandais), voir peut être même des Américains ?\r\n\r\n \r\n\r\nBref, son approche et son professionnalisme m’ont permis de reprendre pieds dans une langue que je n’utilisais plus depuis le lycée.\r\n\r\nSes recherches sur mon métier (elle est arrivée à un cours avec les différentes découpes d’animaux aux USA, en Angleterre et en France, pour mes donner le plus de vocabulaire possible), sa disponibilité pour répondre à quelques questions en dehors des heures de cours, mais aussi son dynamisme et son sourire, m’ont conquis et donné confiance, et font qu’aujourd’hui, je n ‘ai plus peur de m’exprimer en anglais ce qui m’a permis d’enrichir mes approvisionnements et développer mes ventes sur des pays européens.\r\nJ’utilise donc l’anglais oral et écrit quotidiennement en me mettant de moins en moins de barrières.\r\n\r\nMerci encore Gaëlle »\r\n\r\n', 'Olivier R.'),
(2, '...It\'s nothing to say that Gaelle is a good teacher and I am really glad that I had the opportunity to attend her classes...\r\n...The single concern that I have it is hard to find someone else as good as her!...', 'It\'s nothing to say that Gaelle is a good teacher and I am really glad that I had the opportunity to attend her classes.\r\nShe is always trying to make lessons fun and interesting and she is able to encourage everyone to participate. As for me, such approach is working very well and makes the learning process easier. Thanks to Gaelle\'s classes, I significantly improved my English level and I am very much grateful to her for that.\r\nThe single concern that I have it is hard to find someone else as good as her!', 'Dmytro V.'),
(3, '... Gaëlle is a joy to work with because of her always positive attitude, commitment to the learning process, empathy and ability to never give up on a student...', 'For a few years (4+) I was visiting English classes Gaëlle Rey-Hontar hosted at Limelight Networks Ukraine.\r\nGaëlle is one of many teachers I have studied with who uniquely stands out.\r\nIt’s not just her teaching skills that impress me. Gaëlle is a joy to work with because of her always positive attitude, commitment to the learning process, empathy and ability to never give up on a student.\r\n', 'Viktor V.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_student` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `surname` tinytext NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_status` int(11) NOT NULL DEFAULT 0 COMMENT '0-student,1-admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_student`, `username`, `surname`, `email`, `pass`, `created_at`, `id_status`) VALUES
(1, 'Admin', 'Admin', 'grh56@gmail.com', '$2y$10$ghiy.Hv3ScRX3hD13.9Fn.8bsrclm66/iswKHFz6nQYOj/dDjs9j6', '2020-03-23 15:57:50', 1),
(71, 'Three', 'Treeeeee', 'three@gmail.com', '$2y$10$LAfIR4moMKntliJw.ontn.tryqjRG1DEcYYxhkWRPusx/4aCRLOAa', '2020-04-07 18:00:04', 0),
(88, 'Student', 'Student', 'four@gmail.com', '$2y$10$RU8wEiUWSGswild1xYSr0.lsFqd47LbYlO6NhATx9FW1gk6pjhG6K', '2020-05-05 21:31:16', 0),
(119, 'Odyn', 'Odyn', 'odyn@gmail.com', '$2y$10$iCp9p.cxzFAhTjAkwSlhHeZmrhh4eEaXBHiiMgwFII7fppstkYxPS', '2020-05-12 09:04:02', 0),
(148, '', '', '', '$2y$10$gsxMPQeY/xQkxm8suN41zecqgYRZVqfWph/8qecDXPvF5Qsl1sl.W', '2020-06-16 20:03:35', 0),
(149, 'One', 'One', 'one@gmail.com', '$2y$10$VHcTjnBf1.amEHQftpl.A.kMqFjudT1kW5rm.L9PhbhHe78ndpAem', '2020-06-16 20:05:05', 0),
(152, '', '', 'wdada@gn.com', '$2y$10$A7wQrycsUK4j14fDL19hTOsTij1Iok53UPaxXi2G0z8dOfAemkFg.', '2020-06-17 15:45:36', 0),
(153, 'Addss', '', 'ada@ff.com', '$2y$10$iAW7OpYAT0IVI0dbk6B45uqrhjHiffWVgGvm.VrQVpoEsTs8zirWm', '2020-06-17 15:47:19', 0),
(161, 'Me', 'Me', 'me@gmail.com', '$2y$10$4UCTM7yCNhKqPmy6a5DqUO747xJtvveKUTZD7altf1KiOTzbqq.iu', '2020-06-17 17:19:47', 0),
(162, 'Fne', 'Fne', 'oneee@gmail.com', '$2y$10$eHQtFb947MBbsmyUtw/P3uPRmj4pTo8jjTnJD08CTt7hg3y3cffoG', '2020-06-17 17:27:25', 0),
(163, 'Studentone', 'Student', 'student@gmail.com', '$2y$10$JT.2H7imz9sn16nIBGjO0ewAFOSUvC8kje5KrtZobcRwycP6mpo3K', '2020-06-18 06:43:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactmessages`
--
ALTER TABLE `contactmessages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `lessonoftheweek`
--
ALTER TABLE `lessonoftheweek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactmessages`
--
ALTER TABLE `contactmessages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lessonoftheweek`
--
ALTER TABLE `lessonoftheweek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
