-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 06:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci1`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `created_at`, `title`, `body`, `image_path`, `user_id`) VALUES
(27, '2020-07-25 03:03:43', 'Deepika Padukone slams paparazzi for sharing and monetizing Sushant Singh Rajput&amp;amp;#039;s video without his family&amp;amp;#039;s consent!', 'Sushant Singh Rajput has passed away on June 14. He was 34. Soon, throwback pictures and videos of the actor have been surfacing over the internet. And recently, Deepika Padukone slammed an Instagram account who used a video of SSR&amp;amp;amp;#039;s body being taken to crematorium from the hospital.', 'http://localhost/news/uploads/tree3.png', 1),
(28, '2020-07-25 03:07:31', 'Sushant Singh Rajput had set up three companies, including one in the name of rumoured girlfriend Rhea Chakraborty', 'Sushant Singh Rajput, a National Physics Olympiad winner, is being hailed for his keen interest in space, physics and stars. Beyond films, Sushant had followed his passion for technology and fulfilled his dreams by turning entrepreneur to set up three companies. The 34-year-old actor had reportedly launched a company in 2018 that explored augmented and virtual reality and artificial intelligence among other things.', 'http://localhost/news/uploads/tree3.png', 1),
(29, '2020-07-25 03:07:55', 'When Sushant Singh Rajput deleted all his Instagram posts and wrote ‘NOT HERE RIGHT NOW’', 'The untimely demise of Bollywood actor Sushant Singh Rajput has shocked everyone. On June 14, the actor committed suicide at his Bandra residence. It is being reported that the actor was depressed and taking treatment for the same. The case is being investigated by the Mumbai police.', 'http://localhost/news/uploads/tree3.png', 1),
(30, '2020-07-25 03:08:47', 'Exclusive! I won’t defend my son at any cost; I have filed a complaint to investigate the truth: Actress Maala Parvathi', 'Seema Vineeth, a trans woman makeup artist from Trivandrum, Kerala, put up a post on June 9 at 11.09 am alleging that a popular Malayalam actress\' (who is a feminist and activist) son had sent her nudes.', 'http://localhost/news/uploads/tree3.png', 1),
(31, '2020-07-25 03:09:10', 'Sushant Singh Rajput passes away at 34, police find no suicide note at his Mumbai residence', 'Bollywood lost yet another actor when actor Sushant Singh Rajput committed suicide at his residence in Mumbai on Sunday afternoon. Rajput\'s last release was \'Chhichhore\', which hit the screens in 2019. The actor debuted in Bollywood with movie \'Kai Po Che!\'', 'http://localhost/news/uploads/tree3.png', 1),
(32, '2020-07-25 03:23:58', 'UP cop masturbates in front of women at police station, video goes viral', 'A police inspector in UP\'s Deoria was caught masturbating at a woman and her daughter when they visited the police station to lodge a complaint on June 22. Irate over SHO\'s repeated misbehaviour, she recorded a video that went viral on Tuesday. An FIR has been lodged against errant inspector Bhishmpal Singh Yadav in Bhatni police station on the victim\'s complaint.', 'http://localhost/news/uploads/tree3.png', 1),
(33, '2020-07-25 03:24:15', 'Filmmaker Anand Gandhi reveals Sushant Singh Rajput\'s last seen on Whatsapp was Sunday 9:15 am as he pens a heartfelt eulogy', 'Sushant Singh Rajput\'s sudden demise left his fans and B-town stars in shock. The star passed away by suicide on June 14th at his Bandra residence. Many of the actor\'s friends have been talking about their fondest memories with the actor after his death. Recently, filmmaker Anand Gandhi penned down a heartfelt eulogy for the \'Kedarnath\' actor. In his post, he revealed that Sushant Singh Rajput\'s last seen on Whatsapp was 9:15 am.', 'http://localhost/news/uploads/tree3.png', 1),
(34, '2020-07-25 03:25:04', 'Neetu Kapoor spotted in the city but the picture on her mobile phone cover grabs our attention', 'Neetu Kapoor was snapped by the paparazzi in the city on Wednesday. The actress was seen outside her Bandra residence, dressed in denims, a smart blue shirt and a chic sling bag. However, what caught our attention was a doting picture on Neetu Kapoor’s phone cover. It comes across as a cute picture of the Kapoor family captured into a sticker for Neetu Kapoor’s mobile phone.', 'http://localhost/news/uploads/tree3.png', 1),
(35, '2020-07-25 03:26:49', 'Sushant Singh Rajput\'s sister-in-law passes away; couldn\'t bear the loss of the actor', 'Sushant Singh Rajput\'s demise has left a permanent void in the film industry. Bollywood has lost a talented actor at a very young age. According to the reports, Sushant committed suicide at his residence. He was 34 and was reportedly going through a rough time emotionally.', 'http://localhost/news/uploads/tree3.png', 1),
(36, '2020-07-25 03:28:18', 'asautii Zindagii Kay: After four Covid-19 cases on the set, Erica Fernandes shoots from home', 'Television actress Erica Fernandes, who plays the female protagonist, Prerna Sharma in the show is working from home. According to a report in Mumbai Mirror, Erica and Aamna Sharif (Komolika) both doing the same.', 'http://localhost/news/uploads/tree3.png', 1),
(37, '2020-07-25 03:28:33', 'China entered covert deal with Pakistan military for bio-warfare capabilities against India, Western countries: Report', 'As part of a broader offensive against India and Western rivals, Pakistan and China have entered a secret three-year agreement to expand potential bio-warfare capabilities, including several research projects related to the deadly agent anthrax, the Klaxon reported.', 'http://localhost/news/uploads/tree3.png', 1),
(38, '2020-07-25 03:30:29', '1 in 4 people in Delhi may have been exposed to COVID-19: Can we achieve herd immunity soon?', 'After a period of a rampant rise in the number of infections which pushed the healthcare system to the verge of collapse, Delhi might be on its road to recovery', 'http://localhost/news/uploads/tree3.png', 1),
(39, '2020-07-25 03:30:49', 'Kangana Ranaut on her crusade for Sushant Singh Rajput: Yes, it is about Sushant, but it is also about my life', 'After Sushant’s death, I turned to understand what happened – and that was when I realised my perceptions were also wrong, what he had actually gone through, and I was overcome with guilt and shame: Kangana Ranaut explains why she is so vocal about seeking #JusticeForSushantSinghRajput', 'http://localhost/news/uploads/tree3.png', 1),
(40, '2020-07-25 03:31:22', 'US arrests 3 Chinese nationals for visa fraud', 'The FBI has arrested three Chinese nationals for visa fraud, while a fourth remains a fugitive staying at China&#039;s consulate in San Francisco. The four are believed to have been members of the military posing as researchers. The FBI has interviewed visa holders in more than 25 US cities suspected of hiding their Chinese military memberships.', 'http://localhost/news/uploads/tree3.png', 1),
(47, '2020-07-30 15:19:47', 'Viaks', 'vikash news', 'http://localhost/news/uploads/Screenshot_11.png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '0fcd98dd21568b50a1310b37636b7c0b25d3082f55d1cd4ea251ce2228600d6890131e51921f1f628a3e7efd3e2ac16daaadbcea0be7275106004dcb4e049aabwN3EedzDOWIQ+ET9I9LSGlTwNX247ReqDoJz9prCTsU='),
(12, 'Vikash Rana', 'vikash@gmail.com', '902ed254eaafcaf7d9d99cb87a9bc2637323336a02a8d26ca0d447ac8927a3bd58b74b49da3b8c7edc9a7602c37fd93d6a72682c58c2e51c70b9d2bcbd249b47cXIOODjM1kgfexe4JfIO3Wbf3U5Ztzj37oavbsgIvLU=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
